<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use GestorImagenes\Foto;
use GestorImagenes\Album;
use GestorImagenes\Usuario;
use Illuminate\Support\Facades;



class FotosSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
       $albumes = Album::all();
       $contador = 0;
		foreach ($albumes as $album) {

			$cantidad = mt_rand(0,5);
            for ($i=0; $i < $cantidad ; $i++) { 
            	$contador++;
            	Foto::create(
            		[
            		'nombre' =>"Nombre Foto$contador",
            		'descripcion' => "descripcion foto $contador",
            		'ruta' =>'img/text.png',
            		'album_id' => $album->id
            		]);
        	
                }
	    }


	}

}
