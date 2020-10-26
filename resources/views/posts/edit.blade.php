@extends('layouts.default')

@section('content')

<h1>Edit {{ $post->title }}</h1>
<hr />

{!! Form::open(['action' => ['PostController@update', $post->slug], 'method' => 'POST']) !!}

{{ Form::hidden('_method', 'PUT') }}

<div class="form-group">
	{{ Form::label('Title') }}
	{{ Form::text('title', $post->title, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('Body') }}
	{{ Form::textarea('body', $post->body, ['class' => 'form-control ckeditor']) }}
</div>

<div class="form-group pull-right">
	{{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
</div>

{!! Form::close() !!}

@endsection