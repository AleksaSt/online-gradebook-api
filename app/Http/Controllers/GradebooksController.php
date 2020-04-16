<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gradebook;
use App\Http\Requests\GradebookRequest;
use App\Professor;

class GradebooksController extends Controller
{
    public function index(){
        return Gradebook::with('professor')->paginate(10);
    }

    public function store(GradebookRequest $request){
        
        $gradebook = Gradebook::create($request->all());

        if($request->professor_id){
            $professor = Professor::find($request->professor_id);

            $professor->gradebook_id = $gradebook->id;

            $professor->save();
        }
    }

    public function getFreeGradebooks(){
        
        $gradebooks = Gradebook::with('professor')->get();

        $freeGradebooks = [];

        foreach($gradebooks as $gradebook){
            if(!$gradebook->professor){
                array_push($freeGradebooks, $gradebook);
            }
        }
        
        return $freeGradebooks;
    }

    public function getMyGradebook($id){

        $professor = Professor::where('user_id', $id)->first();

        $gradebook = Gradebook::where('professor_id', $professor->id)->with('professor', 'students')->first();

        return $gradebook;
    }

    public function getAllGradebooks(){
        return Gradebook::all();
    }

    public function show($id){
        return Gradebook::with('professor', 'students', 'comments')->find($id);
    }

    public function edit(GradebookRequest $request, $id){
    
        Gradebook::whereId($id)->update($request->all());
    }
}
