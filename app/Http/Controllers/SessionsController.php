<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        //all urls are accessible by a guest user except logout(destroy).
        $this->middleware('guest')->except('destroy');
    }
    //login page.
    public function create()
    {
    	//return a view in views/users.
        return view('users.login');
    }

    //login a user.
    public function store(){
        /*validate inputs, by checking if both email and password inouts are empty first*/
        if(!request('email') || !request('password')){

            return back()->withErrors([
                    'message' => 'Email and Password fields are both required for login, please try again'
                ]);
        }

        //login user. if not successful go back to login page.
        if(!Auth()->attempt(request(['email','password']))){

            return back()->withErrors([
                    'message' => 'Email or Password did not match, please try again'
                ]);
        }

        //redirect home.
        return redirect('/home');
    }

    //logout a registered user
    public function destroy()
    {
        //logout.   
        auth()->logout();
        //redirect home.
        return redirect('/home');
    }
}
