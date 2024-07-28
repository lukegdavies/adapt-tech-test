<?php
namespace App\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Patient;

class EloquentPatientRepository implements PatientRepoInterface {
    public function fetchPatients(int $perPage = 10): LengthAwarePaginator {
        return Patient::paginate($perPage);
    }

    public function findById(int $id): ?Patient {
        return Patient::findOrFail($id);
    }

    public function create(array $data): Patient {
        return Patient::create($data);
    }

    public function update(int $id, array $data): Patient {
        $patient = $this->findById($id);
        $patient->update($data);
        return $patient;
    }
}