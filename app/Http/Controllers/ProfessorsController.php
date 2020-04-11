<?php

namespace App\Http\Controllers;

use App\Professor;
use Illuminate\Http\Request;

class ProfessorsController extends Controller
{
    public function index(){
        return Professor::with('gradebook')->paginate(10);
    }
}
