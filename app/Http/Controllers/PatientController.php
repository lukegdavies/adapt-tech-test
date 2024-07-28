<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PatientService;

class PatientController extends Controller
{
    protected $patient;

    public function __construct(PatientService $patient) {
        $this->patient = $patient;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('patients.index')->withPatients($this->patient->fetch());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRequest $request)
    {
        try {
            $this->patient->storePatient($request->validated());
            return redirect()->route('patients.index')->with('success', 'Patient created successfully.')
        } catch (\Exception $e) {
             return redirect()->route('patients.index')->with('error', 'Failed to create patient.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
