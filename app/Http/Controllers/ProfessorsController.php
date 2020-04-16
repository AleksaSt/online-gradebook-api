<?php

namespace App\Http\Controllers;

use App\Gradebook;
use App\Professor;
use Illuminate\Http\Request;
use App\Http\Requests\ProfessorRequest;
use App\Image;
use Illuminate\Support\Facades\Validator;

class ProfessorsController extends Controller
{
    public function index(){
        return Professor::with('gradebook')->paginate(10);
    }

    public function getFreeProfessors(){
        
        $professors = Professor::with('gradebook')->get();

        $freeprofessors = [];

        foreach($professors as $professor){
            if(!$professor->gradebook){
                array_push($freeprofessors, $professor);
            }
        }
        
        return $freeprofessors;
    }

    public function store(ProfessorRequest $request){
        
        $professor = Professor::create($request->except('photos'));
        //request->photos.*
        foreach($request->photos as $photo){

            $image = Image::create(['url' => $photo]);
            
            $image->professor_id = $professor->id;

            $image->save();
        }

        if($request->gradebook_id){
            $gradebook = Gradebook::find($request->gradebook_id);

            $gradebook->professor_id = $professor->id;
        }
    }

    public function getSingleProfessor($id){
        return Professor::with('gradebook', 'images')->find($id);
    }
}
