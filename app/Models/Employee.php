<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeStatus;
use App\Models\EmployeeDocument;
use App\Models\EmployeeAccomodationRequest;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function employeeStatus() {
        return $this->belongsTo(EmployeeStatus::class);
    }

    public function documents() {
        return $this->hasMany(EmployeeDocument::class);
    }

    public function accomodationRequests() {
        return $this->hasMany(EmployeeAccomodationRequest::class);
    }
}
