<?php

namespace App\Services;

use App\Repositories\PatientRepoInterface as PatientRepo;

class PatientService {
    protected $patient;

    public function ___construct(PatientRepo $repo) {
        $this->patient = $repo;
    }

    public function fetch() {
        return $this->patient->fetchPatients();
    }

    public function getPatientById($id) {
        try {
            return $this->patient->findById($id);
        } catch (\Exception $e) {
            throw new \App\Exceptions\NotFoundException("Patient not found", 404);
        }
    }
}