@extends('admin.template.main')

@section('title','Agregar categoria')

@section('contenido')
	
	{!! Form::open(['route' => 'categorias.store', 'method' => 'POST']) !!}
		
	
		<div class="form-group">
			<label for="name">Nombre</label>
			<input type="text" name="name" id="name" placeholder="Ingrese nombre de la categoria" class="form-control">

		</div>

		
		<div class="form-group">
			
			<input type="submit" class="btn btn-primary" value="Registrar" required>

		</div>


	{!! Form::close() !!}

@endsection