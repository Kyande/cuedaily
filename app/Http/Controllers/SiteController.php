<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //call landing page.
	public function landing()
	{
		//return a view in views/site.
		return view('site.landing');
	}
}
