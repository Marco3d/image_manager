<?php namespace GestorImagenes\Http\Controllers;

class AlbumController extends Controller {

	
	public function __construct()
	{
		$this->middleware('guest');
	}

	public function getIndex()
	{
		return 'mostrando albumes del usuario';
	}

	
	public function getCrearAlbum()
	{
		return 'Formulario de crear Album';
	}

	public function putCrearAlbum()
	{
		return 'almacenando Album';
	}

	public function getActualizarAlbum()
	{
		return 'Formulario de actualizar Album';
	}

	public function putActualizarAlbum()
	{
		return 'actualizar Album';
	}


	public function getEliminarAlbum()
	{
		return 'Formulario de Eliminar Album';
	}

	public function putEliminarAlbum()
	{
		return 'Eliminar Album';
	}

    public function missingMethod($parameters = array())
    {
        abort(404);
    }


	



}
