<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'photo', 'gradebook_id'
    ];
    
    public function gradebook(){
        return $this->belongsTo(Gradebook::class);
    }
}
