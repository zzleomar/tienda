@extends('admin.template.main')

@section('title','Agregar tag')


@section('contenido')
	
	{!!  Form::open(['route' => 'tags.store', 'method' => 'POST'])  !!}

		<div class="form-group">
			<label for="name">Nombre</label>
			<input type="text" name="name" id="name" placeholder="Ingrese nombre del tag" class="form-control" required>

		</div>

		
		<div class="form-group">
			
			<input type="submit" class="btn btn-primary" value="Registrar" required>

		</div>

	{!!  Form::close()  !!}

@endsection