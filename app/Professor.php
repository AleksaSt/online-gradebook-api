<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gradebook;
use App\Image;

class Professor extends Model
{
    
    protected $fillable = [
        'first_name', 'last_name', 'email', 'photo', 'user_id'
    ];

    public function gradebook(){
        return $this->hasOne(Gradebook::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function getFirstNameAttribute($firstName)
    {
        if($this->user_id){
    
            return $this->user->first_name;
        }
      
        return $firstName;
    }

    public function getLastNameAttribute($lastName)
    {
        if($this->user_id){
    
            return $this->user->last_name;
        }

        return $lastName;
    }

    public function getEmailAttribute($email)
    {
        if($this->user_id){
    
            return $this->user->email;
        }

        return $email;
    }

    public function getPhotoAttribute($photo)
    {
        if($this->user_id){
    
            return $this->user->photo;
        }

        return $photo;
    }
}
