<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm; /*automatically imported by PHPStorm if clicked from down menu*/
use Illuminate\Http\Request;
//use App\User;
//use App\Mail\Welcome;
//use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    //
    public function create(){
        return view('registration/create');
    }

    public function store(RegistrationForm $form){
        //validate form

//        $this->validate(request(),[
//            'name' => 'required',
//            'email' => 'required|email',
//            'password' => 'required|confirmed'
//        ]);

        //create/save the user

//        $user = User::create(request(['name','email','password']));
//        $user = User::create([
//            'name' => request('name'),
//            'email' => request('email'),
//            'password' => bcrypt(request('password'))
//        ]);
//
//        //sign them in
//
//        // \Auth::login(); //Auth facade
//
//        // \Request::input or use App\Request then Request::input
//
//        auth()->login($user);
//
//        //send email
//        Mail::to($user)->send(new Welcome($user));

        //redirect to login or home page

        $form->persist();

        session()->flash('message','Thank you for signin up!');

        return redirect()->home();
    }
}
