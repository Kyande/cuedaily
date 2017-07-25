<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //call landing page.
	public function landing()
	{
		//return a view in views/site.
		//return view('site.landing');
		//redirect to home page.
		return redirect('/home');
	}
	//call about page.
	public function about()
	{
		//return a view in views/about.
		return view('site.about');
	}
}
