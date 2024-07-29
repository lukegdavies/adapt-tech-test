<?php

namespace App\Services;

use App\Repositories\PatientRepoInterface as PatientRepo;

/**
 * PatientService handles all business logic regarding patient operations.
 * It utilizes the PatientRepo to interact with the database.
 */
class PatientService {

    /**
     * @var PatientRepo The repository responsible for data operations.
     */
    protected $patient;

    /**
     * Constructs a new PatientService instance.
     * 
     * @param PatientRepo $repo The patient repository implementation.
     */
    public function __construct(PatientRepo $repo) {
        $this->patient = $repo;
    }

    /**
     * Fetches all patients from the repository.
     * 
     * @return array An array of all patient records.
     */
    public function fetch() {
        return $this->patient->fetchPatients();
    }

    /**
     * Retrieves a patient by their ID.
     * Throws NotFoundException if the patient is not found.
     * 
     * @param int $id The ID of the patient to retrieve.
     * @return \App\Models\Patient The requested patient.
     * @throws \App\Exceptions\NotFoundException If no patient is found.
     */
    public function getPatientById(int $id) {
        try {
            return $this->patient->findById($id);
        } catch (\Exception $e) {
            throw new \App\Exceptions\NotFoundException("Patient not found", 404);
        }
    }

    /**
     * Stores a new patient record in the repository.
     * 
     * @param array $data The patient data to store.
     * @return \App\Models\Patient The newly created patient record.
     */
    public function storePatient(array $data) {
        return $this->patient->create($data);
    }

    /**
     * Updates an existing patient's data in the repository.
     * 
     * @param int $id The ID of the patient to update.
     * @param array $data The updated data for the patient.
     * @return \App\Models\Patient The updated patient record.
     */
    public function updatePatient(int $id, array $data) {
        return $this->patient->update($id, $data);
    }

    /**
     * Deletes a patient from the repository.
     * 
     * @param int $id The ID of the patient to delete.
     * @return bool True if the deletion was successful, otherwise false.
     */
    public function deletePatient($id) {
        return $this->patient->delete($id);
    }
}