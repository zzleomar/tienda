<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{

    public function index(){

        $users = User::orderBy('name','ASC')->paginate(5);
        return view('admin.users.index')->with('users',$users);

    } /* Fin de index */

    public function create()
    {
    	return view('admin.users.create');
    } /* Fin de create */


    public function store(UserRequest $request){

    	$user = new User($request->all());
    	$user->password = bcrypt($request->password);
    	$user->save();
        
        flash('Se ha registrado '.$user->name.' de forma exitosa')->success()->important();
        
        return redirect()->Route('users.index');

    } /* Fin de store */

    public function destroy($id){

        $user = User::find($id);
        $user->delete();

        flash('Se ha borrado '.$user->name.' de forma exitosa')->error()->important();
        return redirect()->Route('users.index');

    } /* Fin de destroy */



    public function edit($id){

        $user = User::find($id);
        return view('admin.users.edit')->with('users',$user);   

    } /*Fin de edit*/

    public function update(Request $request, $id){
        $user = User::find($id);
        /*$user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->password = bcrypt($request->password);*/

        $user->fill($request->all());
        $user->save();

        flash('Se ha modificado '.$user->name.' de forma exitosa')->success()->important();
        return redirect()->Route('users.index');

    } /* Fin de update */


}
