<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmployeeStatus;
use App\Http\Resources\V1\EmployeeStatusResource;

class EmployeeStatusController extends Controller
{
    public function index() {
        return EmployeeStatusResource::collection(EmployeeStatus::all());
    }
}
