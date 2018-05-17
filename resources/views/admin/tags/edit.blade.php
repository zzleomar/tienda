@extends('admin.template.main')

@section('title','Editar tag ( '.$tag->name.' )')


@section('contenido')
	
	{!!  Form::open(['route' => ['tags.update', $tag->id], 'method' => 'PUT'])  !!}

		<div class="form-group">
			<label for="name">Nombre</label>
			<input type="text" name="name" id="name" placeholder="{{ $tag->name }}" class="form-control" required>

		</div>

		
		<div class="form-group">
			
			<input type="submit" class="btn btn-primary" value="Registrar" required>

		</div>

	{!!  Form::close()  !!}

@endsection