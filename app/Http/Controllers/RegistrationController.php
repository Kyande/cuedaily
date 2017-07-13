<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function __construct()
    {
         //all urls are accessible by a guest user
        $this->middleware('guest');
    }
    //register a new user.
    public function create()
    {
    	# code...
    	//return a view in views/users
    	return view('users.register');
    }

    public function store(){
    	//validate the form.
    	$this->validate(request(),[

    		'username' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|confirmed|min:8'
    	]);

    	//register and store user.

    	$user = User::create([
    			'username' => request('username'),
    			'email' => request('email'),
    			'password' => bcrypt(request('password'))
    		]);

    	//sign in user.
    	auth()->login($user);

    	//redirect to home page.
    	return redirect('/home');
    }
}
