<?php namespace GestorImagenes;


use Illuminate\Database\Eloquent\Model;

class Album extends Model {

	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'albumes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'nombre', 'descripcion', 'usuario_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

// Establecemos las relaciones entre fotos y album y usuario y album

// un album posee muchas fotos
    public function fotos()
    {
        return $this->hasMany('GestorImagenes\Foto');
    }

// un album pertenece a un usuario
    public function propietario()
    {
    	return $this->belongsTo('GestorImagenes\Foto');
    }


}
