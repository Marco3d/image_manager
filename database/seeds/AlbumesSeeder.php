<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use GestorImagenes\Foto;
use GestorImagenes\Album;
use GestorImagenes\Usuario;
use Illuminate\Support\Facades;



class AlbumesSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$usuarios = Usuario::all();
		$contador = 0;
		foreach ($usuarios as $usuario) {

			$cantidad = mt_rand(0,15);
            for ($i=0; $i < $cantidad ; $i++) { 
            	$contador++;
            	Album::create(
            		[

            		'nombre' =>"album$contador",
            		'descripcion' => "descripcion album $contador",
            		'usuario_id' => $usuario->id


            		]);
        	
                }
	    }


		


	}

}
