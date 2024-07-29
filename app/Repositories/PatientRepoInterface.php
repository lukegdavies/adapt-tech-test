<?php

namespace App\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Patient;


/**
 * Interface for patient repository to abstract the data layer implementation.
 * Defines standard operations for patient data management.
 */
interface PatientRepoInterface {

    /**
     * Fetches and returns paginated results of patients.
     *
     * @param int $perPage The number of patients to return per page.
     * @return LengthAwarePaginator A paginator instance containing the patients.
     */
    public function fetchPatients(int $perPage = 10): LengthAwarePaginator;

    /**
     * Finds a patient by their ID.
     *
     * @param int $id The ID of the patient to find.
     * @return Patient|null The found patient or null if no patient is found.
     */
    public function findById(int $id): ?Patient;

    /**
     * Creates a new patient record in the database.
     *
     * @param array $data The data to create a new patient.
     * @return Patient The newly created patient instance.
     */
    public function create(array $data): Patient;

    /**
     * Updates an existing patient record identified by ID.
     *
     * @param int $id The ID of the patient to update.
     * @param array $data The data to update in the patient record.
     * @return Patient The updated patient instance.
     */
    public function update(int $id, array $data): Patient;

    /**
     * Deletes a patient record by ID.
     *
     * @param int $id The ID of the patient to delete.
     * @return bool True if the deletion was successful, otherwise false.
     */
    public function delete(int $id): bool;
}