<?php

class UploadModuleController extends BaseController {

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

	public function getUpload()
	{
		return View::make('upload.upload')->with('estado', false);
	}
	public function postUpload()
	{
		/*
		//Subida simple

		$file = Input::file('file');

		$url_imagen = Hash::make($file->getClientOriginalName());

		$destino = public_path() .'/uploads/';

		$subir = $file->move($destino,$url_imagen.'.'.$file->guessExtension());

		return View::make('images.upload')->with('estado',true);
		*/

		//Subida con dropzone



		$file = Input::file('file');

		$name = Input::file('file')->getClientOriginalName();
		$ext = Input::file('file')->getClientOriginalExtension();
		$type = Input::file('file')->getMimeType();
		$size = Input::file('file')->getSize();

		/*File::create([
			'name' => $name,
			'ext' => $ext,
			'user_id' => Auth::id(),
			'type' => $type, 
			'public' => false,
			'size' => $size
		]);*/

		$secureName = Hash::make($file->getClientOriginalName());
		$dir = public_path() .'/uploads/';
		$subir = $file->move($dir,$secureName.'.'.$file->guessExtension());
		return View::make('upload.upload')->with('estado', true);


	}

}
