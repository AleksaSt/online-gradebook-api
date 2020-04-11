<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gradebook;

class GradebooksController extends Controller
{
    public function index(){
        return Gradebook::with('professor')->paginate(10);
    }
}
