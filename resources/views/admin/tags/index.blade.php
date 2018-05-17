@extends('admin.template.main')

@section('title', 'Listado de tags')

@section('contenido')
	
	

	<!-- Buscador de Tags -->
	<div class="navbar list-inline">
		
		<a href="{{ route('tags.create') }}" class="btn btn-primary">Registrar nuevo tag</a>		
		
			{!! Form::open(['route' => 'tags.index', 'method' => 'GET']) !!}
	

				
				<div class="btn-group" role="group" aria-label="Basic example">	
					
					<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="name">
					<button type="search" class="btn btn-primary"><span class="oi oi-magnifying-glass"></span></button> 
				</div>
					
			{!! Form::close() !!}

	</div>
		

	<!-- Fin de buscador -->

	<hr>

	<table class="table table-striped">
		
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			
				@foreach ($tags as $tag)
				<tr>
					<td>{{ $tag->id }}</td>
					<td>{{ $tag->name }}</td>
					<td>
						
						<a href="{{ route('admin.tags.destroy', $tag->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminarlo?')"><span class="oi oi-trash"> ELIMINAR </span></a>
						<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning"><span class="oi oi-pencil"> MODIFICAR </span></a>

					</td>
				</tr>
			@endforeach

		</tbody>
	</table>
		
	<div class="text-center">
		
		{!! $tags->render() !!}

	</div>

@endsection