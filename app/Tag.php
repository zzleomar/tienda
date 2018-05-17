<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    protected $fillable = ['name'];

    public function articulos(){

    	return $this->belongsToMany('App\Articulo')->withTimestamps();

    } /* Fin de class articulos */

    // scopeSearch nos sirve para realizar busquedas 

    public function scopeSearch($query, $name){

    	return ($query->where('name', 'LIKE', "%$name%"));

    }

}
