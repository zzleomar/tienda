<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ $prueba->title }}</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
</head>
<body>
	
	<h1>{{ $prueba->title }}</h1>
	<br>
	{{ $prueba->content }}
	<br>
	{{ $prueba->user->name }} 

	<br>
	<br>

	@for ($i = 0; $i < 10; $i++)
		{{ $i }}
	@endfor

	<br>

	@if (1 == 1)
		{{ "My Word is good form laravel" }}
	@endif

	<br>

	
</body>
</html>