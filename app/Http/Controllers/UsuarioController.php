<?php namespace GestorImagenes\Http\Controllers;

class UsuarioController extends Controller {

	
	public function __construct()
	{
		$this->middleware('guest');
	}


	public function getEditarPerfil()
	{
		return 'mostrando formulario del perfil del usuario';
	}

	public function postEditarPerfil()
	{
		return 'generando actualizacion del perfil del usuario';
	}

	public function missingMethod($parameters = array())
    {
        abort(404);
    }

	

}
