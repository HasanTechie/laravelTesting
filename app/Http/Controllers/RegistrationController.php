<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    //
    public function create(){
        return view('registration/create');
    }

    public function store(){
        //validate form

        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        //create/save the user

//        $user = User::create(request(['name','email','password']));
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        //sign them in

        // \Auth::login(); //Auth fasaade /facade

        // \Request::input or use App\Request then Request::input

        auth()->login($user);

        //redirect to login or home page

        return redirect()->home();
    }
}
