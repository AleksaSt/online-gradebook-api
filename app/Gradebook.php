<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Professor;
use App\Student;
use App\Comment;

class Gradebook extends Model
{

    protected $fillable = [
        'name', 'professor_id'
    ];
    
    public function professor(){
        return $this->belongsTo(Professor::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
