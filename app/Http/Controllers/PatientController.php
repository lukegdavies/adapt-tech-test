<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PatientService;
use App\Http\Requests\StorePatientRequest;

/**
 * Handles web requests concerning patient management within the application.
 * Utilizes PatientService for business logic separation, ensuring the controller remains lightweight.
 *
 * Methods in this controller handle views and redirections with appropriate data loading and error handling.
 */
class PatientController extends Controller
{
    /**
     * The patient service instance, utilized to handle all data operations concerning patients.
     *
     * @var PatientService
     */
    protected $patient;

    /**
     * Create a new controller instance.
     * Automatically injects the PatientService dependency and assigns it to a class property.
     *
     * @param PatientService $patient A service class managing patient data operations.
     */
    public function __construct(PatientService $patient) {
        $this->patient = $patient;
    }

    /**
     * Display a listing of patients.
     * Fetches all patient data via PatientService and passes it to the view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('patients.index')->withPatients($this->patient->fetch());
    }

    /**
     * Show the form for creating a new patient.
     * Returns the view which contains the form to input new patient data.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     * Handles POST request to create a new patient entry using the validated request data.
     * Redirects to the patient index with a success or error message.
     *
     * @param StorePatientRequest $request Validated form data.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePatientRequest $request)
    {
        try {
            $this->patient->storePatient($request->validated());
            return redirect()->route('patients.index')->with('success', 'Patient created successfully.');
        } catch (\Exception $e) {
             return redirect()->route('patients.index')->with('error', 'Failed to create patient.');
        }
    }

    /**
     * Display the specified patient.
     * Retrieves a single patient by ID and returns the view to display the patient's details.
     *
     * @param string $id The ID of the patient to retrieve.
     * @return \Illuminate\View\View
     */
    public function show(string $id)
    {
        return view('patients.view')->withPatient($this->patient->getPatientById($id));
    }


    /**
     * Show the form for editing the specified patient.
     * Retrieves details for a specific patient by ID and loads the form view for editing.
     *
     * @param string $id The ID of the patient to edit.
     * @return \Illuminate\View\View
     */
    public function edit(string $id)
    {
        return view('patients.edit')->withPatient($this->patient->getPatientById($id));
    }

    /**
     * Update the specified patient in the database.
     * Processes the validated request data to update the patient's details via PatientService.
     * Redirects with a success message on successful update or an error message on failure.
     *
     * @param StorePatientRequest $request Validated patient data.
     * @param string $id The ID of the patient to update.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StorePatientRequest $request, string $id)
    {
        try {
             $this->patient->updatePatient($id, $request->validated());
             return redirect()->route('patients.index')->with('success', 'Patient Updated successfully.');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->route('patients.index')->with('error', 'Failed to update patient.');
        }
    }

    /**
     * Remove the specified patient from the database.
     * Deletes a patient entry by ID via PatientService and handles redirection with either a success or error message.
     *
     * @param string $id The ID of the patient to delete.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(string $id)
    {
        try {
            $this->patient->deletePatient($id);
            return redirect()->route('patients.index')->with('success', 'Patient Deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('patients.index')->with('error', 'Failed to Delete patient.');
        }
    }
}
