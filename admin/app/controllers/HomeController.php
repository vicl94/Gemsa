<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showLogin()
	{
		if(Auth::check()) {
			return View::make('welcome');
		} else {
			return View::make('landing');
		}
		
	}

	public function processLogin()
	{
		if(Auth::attempt(Input::only('email', 'password'))) {
			return Redirect::to('/');
		} else {
			return 'no';
		}
	}
}
