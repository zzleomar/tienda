<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
	
	Tipos de Rutas: GET, POST, PUT, DELETE, RESOURCE

 */

Route::get('/', function () {
    return view('welcome');
});


 
/*
  //Rutas normales
 
 Route::get('articulos', function(){
	echo "Esta es la seccion de articulos";
  });

  //Rutas con parametros

  Route::get('articulos/{nombre}', function($nombre){
		echo "Esta es la seccion de articulos: ".$nombre;
   });

	
   // Es opcional si el usuario no colaca nombre en el parametro	

   Route::get('articulos/{nombre?}', function($nombre = "No coloco nombre"){
		echo "Esta es la seccion de articulos: ".$nombre;
   });

   //Darle nombre a las rutas

   Route::get('articulos', [

	'as' 	=> 'articulos',
	'uses' 	=> 'UserController@add'

	]);

	//Definir un grupo de Rutas

	Route::group(['prefix' => 'articulos'], function(){

		Route::get('view/{articulos?}', function($articulo = "Vacio"){

			echo "Esto es: ". $articulo;

		}); 

	});	

	Route::group(['prefix' => 'articulos'], function(){

		Route::get('view/{id}',[
			'uses' => 'TestController@view',
			'as'   => 'articulosView'
		]);
	});
*/
	
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy',[

		'uses' => 'UsersController@destroy',
		'as'   => 'admin.users.destroy'

		]);

	Route::resource('categorias', 'CategoriasController');
	Route::get('categorias/{id}/destroy',[

		'uses' => 'categoriasController@destroy',
		'as'   => 'admin.categorias.destroy'

		]);

	Route::resource('tags', 'TagsController');
	Route::get('tags/{id}/destroy',[

		'uses' => 'TagsController@destroy',
		'as'   => 'admin.tags.destroy'

		]);

	Route::resource('articulos', 'ArticulosController');
	Route::get('articulos/{id}/destroy',[

		'uses' => 'ArticulosController@destroy',
		'as'   => 'admin.articulos.destroy'

		]);

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
