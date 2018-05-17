@extends('admin.template.main')

@section('title', 'Listados de Articulos')

@section('contenido')


	<div class="navbar list-inline">
		
		<a href="{{ route('articulos.create') }}" class="btn btn-primary">Registrar nuevo articulo</a>

		<hr>		
		
			{!! Form::open(['route' => 'articulos.index', 'method' => 'GET']) !!}
	

				
				<div class="btn-group" role="group" aria-label="Basic example">	
					
					<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="title">
					<button type="search" class="btn btn-primary"><span class="oi oi-magnifying-glass"></span></button> 
				</div>
					
			{!! Form::close() !!}

	</div>

	<hr>	

	<table class="table table-striped">

		<thead>
			<th>ID</th>
			<th>Titulo</th>
			<th>Categoria</th>
			<th>Usuario</th>
			<th>Accion</th>
		</thead>

		<tbody>

			@foreach ($articulos as $articulo)
				<tr>
					<td>{{ $articulo->id }}</td>
					<td>{{ $articulo->title }}</td>
					<td>{{ $articulo->category->name }}</td>
					<td>{{ $articulo->user->name }}</td>
					<td>
						
						<a href="{{ route('admin.articulos.destroy', $articulo->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminarlo?')"><span class="oi oi-trash"> ELIMINAR </span></a>
						<a href="{{ route('articulos.edit', $articulo->id) }}" class="btn btn-warning"><span class="oi oi-pencil"> MODIFICAR </span></a>

					</td>
				</tr>
			@endforeach

		</tbody>
	</table>

	<div class="text-center">
		{!! $articulos->render() !!}
	</div>	
	
@endsection
	
