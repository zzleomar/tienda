<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Articulo extends Model
{

    use Sluggable;
    
    /*Sluggable toma el titulo como referencia*/
    public function sluggable(){

        return[
            'slug' => ['source' => 'title']
        ];

    }

	/* Se debe crear una variable con el nombre de la tabla */
    protected $table = "articulos";
    
	/* $fillable almacena los campos JSON */
    protected $fillable = ['title','content','category_id','user_id'];

    public function category(){

        return $this->belongsTo('App\Categoria');

    } /* Fin de categorias */

    public function user(){

    	return $this->belongsTo('App\User');

    } /* Fin de user */

    public function imagenes(){

        return $this->hasMany('App\Imagen');

    } /* Fin de imagenes */

    public function tags(){

        return $this->belongsToMany('App\Tag')->withTimestamps();

    } /* Fin de tags */

    /* scopeSearch nos sirve para buscar */

    public function scopeSearch($query, $title){

       return ($query->where('title', 'LIKE', "%$title%"));

    } /* Fin de scopeSearch */
}
