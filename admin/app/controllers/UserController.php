<?php

class UserController extends BaseController 
{

	public function actionInsertar()
	{
		if($_POST)
		{
			$mensajeGlobal = '';

			User::create([ 
				'password' 	=> Hash::make('txtPassword'), 
				'name' 		=> Input::get('txtName'),
				'email'		=> Input::get('txtEmail'),
				'type' 		=> Input::get('cbType')
				]);

			Session::flash('mensajeGlobal' , '1');
		}
		if(Session::has('mensajeGlobal'))
		{
			return View::make('addUser', ['mensajeGlobal' => Session::get('mensajeGlobal')]);
		}
		return View::make('addUser');

	}

}
