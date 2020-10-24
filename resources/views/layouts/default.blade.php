<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<title>{{ config('app.name') }}</title>
</head>
<body>
	<div class="container">
		@include('elements.navbar')
		@yield('content')
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>