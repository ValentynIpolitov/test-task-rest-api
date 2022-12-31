<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmployeeDocument;

class EmployeeDocumentController extends Controller
{
    public function show($id) {
        $document = EmployeeDocument::findOrFail($id);
        return response()->download(storage_path().'/'.'app/'.$document->path);
    }
}
