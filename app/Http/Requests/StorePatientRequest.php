<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $patientId = $this->patient ? $this->patient : null;

        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => ['required', 'email', 'unique:patients,email,' . $patientId],
            'phone_number' => 'nullable|digits_between:11,15',
            'address' => 'required|string|max:300',
            'nhs_number' => ['required', 'string', 'digits:10', 'unique:patients,nhs_number,' . $patientId],
            'date_of_birth' => 'required|date',
            'sex' => 'required|in:M,F,O,P',
        ];
    }

    protected function prepareForValidation() {
        $this->merge([
            'address' => preg_replace("/\s+/", " ", trim($this->address)),
            'first_name' => trim($this->first_name),
            'last_name' => trim($this->last_name),
            'email' => strtolower(trim($this->email)),
        ]);
    }
}
