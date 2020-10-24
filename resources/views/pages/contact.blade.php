@extends('layouts.default')

@section('content')

<h1>Contact Us</h1>
<hr />
<form action="">
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group pull-right">
		<button class="btn btn-info">Send</button>
	</div>
</form>
@endsection