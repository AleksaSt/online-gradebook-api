<?php

namespace App\Http\Controllers;

use App\Gradebook;
use App\Http\Requests\StudentRequest;
use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function store(StudentRequest $request){

        Student::create($request->all());
    }
}
