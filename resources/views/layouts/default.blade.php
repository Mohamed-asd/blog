<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name') }}</title>

</head>

<body>

	<div id="app">

		@include('elements.navbar')

		<div class="container">

			@include('elements.flash')

			@yield('content')

		</div>

	</div>

	<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>