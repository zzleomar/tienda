@extends('admin.template.main')

@section('title','Agregar articulos')

@section('contenido')
	
	<!-- files para agregar archivio-->

	{!! Form::open(['route' => 'articulos.store', 'method' => 'POST', 'files' => 'true']) !!}	

		<div class="form-group">
			<label for="name">Titulo</label>
			<input type="text" name="title" id="name" placeholder="Ingrese nombre de la categoria" class="form-control" required>

		</div>

		

		<div class="form-group">
			<label for="category_id">Categoria</label>
			<select name="category_id" id="category_id" class="form-control select-categoria" required>
				
				@foreach ($categorias as $categoria)
					<option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
				@endforeach
				
			</select>

		</div>

		<div class="form-group">
			<label for="content">contenido</label>
			<textarea name="content" id="content" class="form-control textarea-content" placeholder="Contenido para hablar"></textarea>

		</div>

		<div class="form-group">
			<label for="tag_id">Tags</label>
			<select name="tag_id[]" id="tag_id" class="form-control select-tag" multiple required>
				
				@foreach ($tags as $tag)
					<option value="{{ $tag->id }}">{{ $tag->name }}</option>
				@endforeach
				
			</select>

		</div>

		<div class="form-group">
			<label for="image">Imagen</label>
			<input type="file" name="image" id="image" required>

		</div>

		<div class="form-group">
			
			<input type="submit" class="btn btn-primary btn-block" value="Registrar" required>

		</div>
		

	{!! Form::close() !!}


@endsection

<!-- agregamos el estilo de seleccion en el formulario -->

@section('js')

	<script>
			
		$('.select-tag').chosen({
			placeholder_text_multiple:'Selecciones los tags',
			max_selected_options:2,
			search_contains: true,
			no_results_text:'El tag que esta buscando no existe'

		});

		$('.select-categoria').chosen({

			placeholder_text_single:'seleccione una categoria'

		});

		$('.textarea-content').trumbowyg({
			lang:'es'
		});

		
			$("#image").fileinput({
				//uploadAsync:false,
				//minFileCount:1,
				//maxFileCount:10,
				//showCaption: false,
				browseClass: "btn btn-primary",
				fileType: "any",
				showUpload:false,
				showRemove:true
				
			});

	</script>

	</script>
	
@endsection