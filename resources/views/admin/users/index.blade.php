@extends('admin.template.main')

@section('title', 'Lista de usuario')

@section('contenido')
	
	<a href="{{ route('users.create') }}" class="btn btn-info">REGISTRAR NUEVO USUARIO</a>
	<hr>

	<table class="table table-striped">
		
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Tipo</th>
			<th>Accion</th>
		</thead>
		
		<tbody>
			
			@foreach ($users as $user)
				<tr>

					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
						
						@if ($user->type == "admin")
							 <span class="badge badge-danger">{{ $user ->type }}</span>
						@else
							<span class="badge badge-primary">{{ $user ->type }}</span>
						@endif

					</td>
					<td>
						<a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminarlo?')"><span class="oi oi-trash"> ELIMINAR </span></a>
						<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><span class="oi oi-pencil"> MODIFICAR </span></a>
					</td>

				</tr>
			@endforeach

		</tbody>

	</table>
	
	<div class="text-center">
		{!! $users->render() !!}
	</div>

@endsection