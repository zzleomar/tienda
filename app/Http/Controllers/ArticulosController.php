<?php

namespace App\Http\Controllers;
use App\Categoria;
use App\Tag;
use App\Articulo;
use App\Imagen;
use App\User;
use App\Http\Requests\ArticuloRequest;

use Illuminate\Http\Request;

class ArticulosController extends Controller
{

    public function index(Request $request){

        $articulos =  Articulo::search($request->title)->orderBy('id','DESC')->paginate(5);
        $articulos->each(function($articulos){
            $articulos->category;
            $articulos->user;
        });

        return view('admin.articulos.index')
            ->with('articulos',$articulos);

    } /* Fin de index */

    public function create(){

    	/* el metodo lists fue cambiado por pluck nos sirve si vamos utilizar el form de laravel*/

    	$categorias = Categoria::orderBy('name','ASC')->get();
    	$tags       = Tag::orderBy('name','ASC')->get();

		return view('admin.articulos.create')->with('categorias',$categorias)->with('tags',$tags);

    } /* Fin de create */

    public function store(ArticuloRequest $request){

       // dd($request->tag_id);

       if($request->file('image')){

            /*Manipulacion de imagenes*/
            $file = $request->file('image');
            $name = 'practica_'.time().'.'.$file->getClientOriginalExtension(); //Agrega nombre propio a las imagenes
            $path = public_path().'/imagenes/articulos/'; //indica la ruta de la carpeta donde se guardara las imagenes
            $file->move($path, $name);

        } /* Fin de if */

        $articulo = new Articulo($request->all());

        /* \Auth::user() nos trae todos los datos del usuario */
        $articulo->user_id = \Auth::user()->id; 
    
    	$articulo->save();

        //$articulo->tags()->sync($request->tag_id);

        $imagen = new Imagen();
        $imagen->name = $name;
        //$imagen->articulo()->associate($articulo);
        $imagen->article_id = $articulo->id;
        $imagen->save();

        flash('Se ha creado '.$articulo->title.' de forma exitosa')->success()->important();
        return redirect()->Route('articulos.index');

    	//$name = $file->getClientOriginalName();

    }

    public function edit($id){

        $articulo   = Articulo::find($id);
        $articulo   ->category;
        $categorias = Categoria::orderBy('name','DESC')->get();
        $tags       = Tag::orderBy('name','DESC')->get();

        /* ToArray colocas los objetos en forma de array */

        //$my_tags = $articulo->tags->puck('id')->ToArray();
        //dd($my_tags);

        return view('admin.articulos.edit')
        ->with('articulo',$articulo)
        ->with('categorias',$categorias)
        ->with('tags',$tags);
        //->with('my_tags',$my_tags)

    } /* Fin de edit */

    public function update( Request $request, $id ){
            $articulo = Articulo::find($id);
            $articulo->fill($request->all());
            $articulo->save();

            //$articulo->tags()->sync($request->tags);

            flash('Se ha editado '.$articulo->title.' de forma exitosa')->success()->important();
            return redirect()->route('articulos.index');
    } /* Fin de update */

    public function destroy($id){

        $articulo = Articulo::find($id);
        $articulo->delete();

        flash('Se ha eliminado '.$articulo->title.' de forma exitosa')->error()->important();
            return redirect()->route('articulos.index');

    } /* Fin de destroy */

}
