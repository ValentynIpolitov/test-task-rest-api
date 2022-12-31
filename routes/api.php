<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\EmployeeController;
use App\Http\Controllers\Api\V1\EmployeeStatusController;
use App\Http\Controllers\Api\V1\EmployeeDocumentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1'], function() {
    Route::apiResource('employees', EmployeeController::class);
    Route::get('/employee-statuses', [EmployeeStatusController::class, 'index']);
    Route::get('/employee-document/{id}', [EmployeeDocumentController::class, 'show']);
});
