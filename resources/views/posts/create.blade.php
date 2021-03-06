@extends('layouts.default')

@section('content')

<h1>Add Post</h1>
<hr />

{!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
<div class="form-group">
	{{ Form::label('Title') }}
	{{ Form::text('title', '', ['placeholder' => 'Enter Post Title', 'class' => 'form-control']) }}
</div>
<div class="from-group">
	{{ Form::label('Body') }}
	{{ Form::textarea('body', '', ['placeholder' => 'Enter Post Body', 'class' => 'form-control ckeditor']) }}
</div>
<div class="form-group pull-right">
	{{ Form::submit('Save', ['class' => 'btn btn-primary'])}}
</div>

{!! Form::close() !!}

@endsection