@extends('admin.template.main')

@section('title','Editar categoria. ('.$categorias->name.')')

@section('contenido')
	
	{!! Form::open(['route' => ['categorias.update',$categorias->id], 'method' => 'PUT']) !!}
		
	
		<div class="form-group">
			<label for="name">Nombre</label>
			<input type="text" name="name" id="name" placeholder="{{ $categorias->name }}" class="form-control">

		</div>

		
		<div class="form-group">
			
			<input type="submit" class="btn btn-primary" value="Editar" required>

		</div>


	{!! Form::close() !!}

@endsection