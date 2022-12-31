<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'min:2'],
            'employee_id' => ['required', 'unique:employees,employee_id'],
            'department' => ['required', 'min:2'],
            'employee_status_id' => ['required', 'numeric'],
            'email' => ['required', 'email', 'unique:employees,email'],
            'accomodation_requests'=> [],
            'files' => []//['max:2048']
        ];
    }
}
