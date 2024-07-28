<?php

namespace App\Services;

use App\Repositories\PatientRepoInterface as PatientRepo;

class PatientService {
    protected $patient;

    public function __construct(PatientRepo $repo) {
        $this->patient = $repo;
    }

    public function fetch() {
        return $this->patient->fetchPatients();
    }

    public function getPatientById(int $id) {
        try {
            return $this->patient->findById($id);
        } catch (\Exception $e) {
            throw new \App\Exceptions\NotFoundException("Patient not found", 404);
        }
    }

    public function storePatient(array $data) {
        return $this->patient->create($data);
    }

    public function updatePatient(int $id, array $data) {
        return $this->patient->update($id, $data);
    }
}