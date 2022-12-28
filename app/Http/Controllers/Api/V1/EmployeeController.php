<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Employee;
use App\Http\Resources\V1\EmployeeResource;

class EmployeeController extends Controller
{
    public function index() {
        return EmployeeResource::collection(Employee::all());
    }

    public function show(Employee $employee) {
        return new EmployeeResource($employee);
    }

    public function store(StoreEmployeeRequest $request) {
        Employee::create($request->validated());
        return response()->json('Employee created');
    }

    public function update(StoreEmployeeRequest $request, Employee $employee) {
        return response()->json('Not implemented in V1');
    }

    public function destroy(Skill $skill) {
        return response()->json('Not implemented in V1');
    }
}
