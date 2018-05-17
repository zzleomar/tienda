<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;

class TestController extends Controller
{
    public function view($id){
    	$articulo = Articulo::find($id);
    	/*$articulo->each(function($articulo){
    		$articulo->categoria;
    		$articulo->user;
    		//$articulo->tags;
    	});*/
    	
    	$articulo->categoria;
    	$articulo->user;
    	//$articulo->tags;
    	//dd($articulo); devuelve los valores 
       
       return view('test.index',['prueba' => $articulo]);
    } /* Fin de view */
}
