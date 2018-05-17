<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriaRequest;
use App\Categoria;

class CategoriasController extends Controller
{

	public function index(){
		$categorias = Categoria::orderBy('id','ASC')->paginate(5);
        return view('admin.categorias.index')->with('categorias',$categorias);
    } /* Fin de index */

    public function create(){
    	return view('admin.categorias.create');
    } /* Fin de create */

    public function store(CategoriaRequest $request){

    	$categoria = new Categoria($request->all());
    	$categoria->save();

    	flash("La categoria ".$categoria->name." fue creada correctamente")->success()->important();
    	return redirect()->route('categorias.index');

    } /* Fin de store */

    public function destroy($id){

    	$categoria = Categoria::find($id);
    	$categoria->delete();

    	flash("La categoria ".$categoria->name." fue eliminada correctamente")->success()->important();
    	return redirect()->route('categorias.index');
    } /* Fin de destroy */

    public function edit($id){

    	$categoria = Categoria::find($id);
    	return view('admin.categorias.edit')->with('categorias', $categoria);

    }/* Fin de edit */

    public function update(CategoriaRequest $request, $id){

    	$categoria = Categoria::find($id);
    	$categoria->fill($request->all());
    	$categoria->save();

    	flash("La categoria ".$categoria->name." fue modificada correctamente")->warning()->important();
    	return redirect()->route('categorias.index');

    }/* Fin de edit */

}
