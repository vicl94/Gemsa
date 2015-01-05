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
				'name' 		=> Input::get('txtUsuario'),
				'email'		=> Input::get('txtEmail'),
				'type' 		=> Input::get('cbType')
				]);

			Session::flash('mensajeGlobal' , 'Usuario registrado correctamente');
			Session::flash('color' , 'green');
		}
		if(Session::has('mensajeGlobal'))
		{
			return View::make('addUser', ['mensajeGlobal' => Session::get('mensajeGlobal') , 'color' => Session::get('color')] );
		}
		return View::make('addUser');

	}

}
