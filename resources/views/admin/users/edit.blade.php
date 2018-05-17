@extends('admin.template.main')

@section('title', 'Editar Usuario ('.$users->name.')')


@section('contenido')

	{{-- Otra forma para programar en 
		
				{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
					
					<div class="form-group">
		
		
						{!! Form::label('name', 'Nombre') !!}
						{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
						
					</div>
		
				{!! Form::close() !!}
			
		--}}

	
				{!! Form::open(['route' => ['users.update', $users->id],  'method' => 'PUT'])  !!}
			
					<div class="form-group">
								
						<label for="name">Nombre</label>
						<input type="text" placeholder="{{ $users->name }}" name="name" id="name" class="form-control"> 
					
					</div>

					<div class="form-group">
								
						<label for="email">Correo Electronico</label>
						<input type="email" placeholder="{{ $users->email }}" name="email" id="email" class="form-control">
					
					</div>

					<div class="form-group">
								
						<label for="password">Contraseña</label>
						<input type="password" placeholder="*************" name="password" id="password" class="form-control">
					
					</div>	

					<div class="form-group">
								
						<label for="type">Tipo</label>
						<select name="type" class="form-control">
							<option value="">Seleccione un nivel..</option>
							<option value="member">Miembro</option>
							<option value="admin">Administrador</option>
						</select>
					
					</div>

					<div class="form-group">
						
						<input type="submit" value="REGISTRAR" class="btn btn-primary">

					</div>
			
				{!! Form::close() !!}
				
@endsection