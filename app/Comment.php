<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comment extends Model
{
    protected $fillable = [
        'content', 'user_id', 'gradebook_id'
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function gradebook(){
        return $this->belongsTo(Gradebook::class);
    }
}
