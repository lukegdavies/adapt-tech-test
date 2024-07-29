<?php
namespace App\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Patient;

/**
 * Implements the patient repository using Eloquent ORM.
 * This class handles all data persistence operations for the Patient model.
 */
class EloquentPatientRepository implements PatientRepoInterface {

    /**
     * Fetches patients with pagination.
     * 
     * This method retrieves all patients from the database and paginates them according to the provided parameter.
     * It leverages Eloquent's built-in pagination features to simplify pagination logic.
     *
     * @param int $perPage The number of items to be displayed per page.
     * @return LengthAwarePaginator A paginator instance containing patients.
     */
    public function fetchPatients(int $perPage = 10): LengthAwarePaginator {
        return Patient::paginate($perPage);
    }


    /**
     * Finds a patient by their ID.
     * 
     * Utilizes Eloquent's `findOrFail` method which throws a ModelNotFoundException if no model is found.
     * This exception should be handled at a higher layer to return a proper user-friendly error or response.
     *
     * @param int $id The unique identifier of the patient.
     * @return Patient|null Returns the patient model if found, or throws an error if not found.
     */
    public function findById(int $id): ?Patient {
        return Patient::findOrFail($id);
    }

    /**
     * Creates a new patient record in the database.
     * 
     * Takes an array of data, which must be validatable by the Patient model's standards, and creates a new record.
     *
     * @param array $data Data to populate the new patient record.
     * @return Patient Returns the newly created patient model instance.
     */
    public function create(array $data): Patient {
        return Patient::create($data);
    }

    /**
     * Updates an existing patient.
     * 
     * Finds the patient by ID and updates it with new data. If the patient does not exist, a ModelNotFoundException will be thrown.
     *
     * @param int $id The ID of the patient to update.
     * @param array $data New data for updating the patient record.
     * @return Patient Returns the updated patient model instance.
     */
    public function update(int $id, array $data): Patient {
        $patient = $this->findById($id);
        $patient->update($data);
        return $patient;
    }

    /**
     * Deletes a patient from the database.
     * 
     * Finds the patient by their ID and deletes the record. Returns true if the delete was successful, or false otherwise.
     *
     * @param int $id The ID of the patient to delete.
     * @return bool True if the patient was successfully deleted, false otherwise.
     */
    public function delete(int $id): bool {
        return $this->findById($id)->delete();
    }
}