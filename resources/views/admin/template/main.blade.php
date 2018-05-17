<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title', 'DEFAULT')| Panel de administracion</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/iconos/font/css/open-iconic-bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/chosen/chosen.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/Trumbowyg/dist/ui/trumbowyg.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-fileinput-master/css/fileinput.min.css') }}">

</head>
<body>

	@include('admin.template.partials.nav')
	<div class="container">
		<div class="card">
	  		<div class="card-body">
			    <h4 class="card-title">@yield('title', 'DEFAULT')</h4>

				<section>
					
					@include('flash::message')
					@include('admin.template.partials.errors')
					
					@yield('contenido')	
				</section>
		
			</div>
		</div>
	
		@include('admin.template.partials.footer')

	</div>
	
	<script src="{{ asset('plugins/JQuery/jquery.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('plugins/chosen/chosen.jquery.js') }}" type="text/javascript"></script>
	<script type="text/javascript" src="{{ asset('plugins/trumbowyg/dist/trumbowyg.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/trumbowyg/dist/langs/es.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/bootstrap-fileinput-master/js/fileinput.js') }}"></script>

	<script>
		$('div.alert').delay(3000).fadeOut(350);
	</script>
	
	@yield('js')

</body>
</html>