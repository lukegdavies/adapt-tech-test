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
}