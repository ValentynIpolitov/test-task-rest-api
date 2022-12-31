<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Employee;
use App\Models\EmployeeAccomodationRequest;
use App\Http\Resources\V1\EmployeeResource;
use App\Models\EmployeeDocument;

class EmployeeController extends Controller
{
    public function index() {
        return EmployeeResource::collection(Employee::all());
    }

    public function show(Employee $employee) {
        return new EmployeeResource($employee);
    }

    public function store(StoreEmployeeRequest $request) {
        $employee = Employee::create($request->validated());

        // creating employees accomodation requests
        foreach ($request->accomodation_requests as $accomodation_request) {
            EmployeeAccomodationRequest::create([
                'accomodation_name' => $accomodation_request['value'],
                'employee_id' => $employee->id 
            ]);
        }

        // storing files to storage and saving path to DB
        foreach ($request->allFiles() as $files) {
            foreach ($files as $file) {
                $path = $file->store('employee-documents', 'local');
    
                EmployeeDocument::create([
                    'name' => $file->getClientOriginalName(),
                    'path' => $path,
                    'employee_id' => $employee->id 
                ]);
            }
        }

        return response()->json('Employee created');
    }

    public function update(StoreEmployeeRequest $request, Employee $employee) {
        return response()->json('Not implemented in V1');
    }

    public function destroy(Skill $skill) {
        return response()->json('Not implemented in V1');
    }
}
