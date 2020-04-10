<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function store(RegisterRequest $request){
        
        $user =  User::create($request->all());

        $user['password'] = bcrypt($user['password']);

        $user->save();
    }
}
