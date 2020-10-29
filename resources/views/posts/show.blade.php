@extends('layouts.default')

@section('content')

<h1>{{ $post->title }}</h1>
<hr />

@if(!Auth::guest() && Auth::user()->id === $post->user_id)
	<div class="clearfix">

		<a href="/posts/{{ $post->slug }}/edit" class="btn btn-default">
			<i class="fas fa-edit"></i> Edit Post
		</a>

		<div class="pull-right">
			{!! Form::open(['action' => ['PostController@destroy', $post->slug], 'method' => 'POST']) !!}
			{{ Form::hidden('_method', 'DELETE')}}
			<button type="submit" class="btn btn-danger">
				<i class="fas fa-trash"></i> Delete Post
			</button>
			{!! Form::close() !!}
		</div>

	</div>
@endif

<br />

<div class="panel">
	<div class="panel-body">
		{!! $post->body !!}		
	</div>
</div>

@endsection