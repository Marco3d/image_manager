<?php namespace GestorImagenes\Http\Controllers;

class FotoController extends Controller {

	public function __construct()
	{
		$this->middleware('guest');
	}


	public function getIndex()
	{
		return 'mostrando fotos del usuario';
	}

	
	public function getCrearFoto()
	{
		return 'Formulario de crear foto';
	}

	public function putCrearFoto()
	{
		return 'almacenando foto';
	}

	public function getEliminarFoto()
	{
		return 'Formulario de Eliminar foto';
	}

	public function putActualizarFoto()
	{
		return 'actualizar foto';
	}


	public function getEliminarFoto()
	{
		return 'Formulario de Eliminar foto';
	}

	public function putEliminarFoto()
	{
		return 'Eliminar foto';
	}





}
