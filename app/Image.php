<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Professor;

class Image extends Model
{

    protected $fillable = [
        'url', 'professor_id'
    ];
    
    public function professor(){
        return $this->belongsTo(Professor::class);
    }
}
