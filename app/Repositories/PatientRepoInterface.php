<?php

namespace App\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Patient;

interface PatientRepoInterface {
    public function fetchPatients(int $perPage = 10): LengthAwarePaginator;
    public function findById(int $id): ?Patient;
    public function create(array $data): Patient;
    public function update(int $id, array $data): Patient;
}