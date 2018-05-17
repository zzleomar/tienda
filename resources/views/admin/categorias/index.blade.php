@extends('admin.template.main')

@section('title','Listado de categoria')

@section('contenido')
	
	<a href="{{ route('categorias.create') }}" class="btn btn-primary">Registrar nueva categoria</a><hr>
	
	<table class="table table-striped">

		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Accion</th>
		</thead>

		<tbody>

			@foreach ($categorias as $categoria)
				<tr>
					<td>{{ $categoria->id }}</td>
					<td>{{ $categoria->name }}</td>
					<td>
						
						<a href="{{ route('admin.categorias.destroy', $categoria->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminarlo?')"><span class="oi oi-trash"> ELIMINAR </span></a>
						<a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning"><span class="oi oi-pencil"> MODIFICAR </span></a>

					</td>
				</tr>
			@endforeach

		</tbody>
	</table>

	<div class="text-center">
		{!! $categorias->render() !!}
	</div>

@endsection