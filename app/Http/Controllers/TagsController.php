<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Tag;

class TagsController extends Controller
{
    
	public function index(Request $request){

        //search nos sirve para realizar busquedad
        $tags = Tag::search($request->name)->orderBy('id','DESC')->paginate(5);
		    return view('admin.tags.index')->with('tags',$tags);

    } /* Fin de index */

    public function create()
    {

    	return view('admin.tags.create');
    	
    } /* Fin de create */


    public function store(TagRequest $request){

    	   $tag = new Tag($request->all());
           $tag->save();

           flash('Se ha registrado '.$tag->name.' de forma exitosa')->success()->important();
           return redirect()->Route('tags.index');

    } /* Fin de store */

    public function destroy($id){

       $tag = Tag::find($id);
       $tag->delete();

       flash('Se ha borrado '.$tag->name.' de forma exitosa')->error()->important();
       return redirect()->Route('tags.index');


    } /* Fin de destroy */



    public function edit($id){

         $tag = Tag::find($id);
         return view('admin.tags.edit')->with('tag',$tag);

    } /*Fin de edit*/

    public function update(Request $request, $id){
       
        $tag = Tag::find($id);
        $tag->fill($request->all());
        $tag->save();

        flash('Se ha modificado '.$tag->name.' de forma extitosa')->success()->important();
        return redirect()->Route('tags.index');

    } /* Fin de update */

}
