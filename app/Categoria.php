<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

	/* Se debe crear una variable con el nombre de la tabla */
    protected $table = "categorias";

    /* $fillable almacena los campos JSON */
    protected $fillable = ['name'];

/* Relacion de 1..* es hasMany */

    public function articulos(){

    	return $this->hasMany('App\Articulo');

    } /* Fin de articles */

}
