@extends('layouts.default')

@section('content')

@if($posts->count() > 0)
	@foreach($posts as $post)
	<div class="panel">
		<div class="panel-heading">
			<h3>
				<a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
			</h3>
		</div>
		<div class="panel-body">
			{!! str_limit($post->body, 300) !!}
		</div>
		<div class="panel-footer">
			<span class="label label-primary">
				<i class="fas fa-calendar"></i> {{ $post->created_at->format("Y-m-d") }}
			</span>
			&nbsp;
			<span class="label label-primary">
				<i class="fas fa-user"></i> {{ $post->user->name }}
			</span>
		</div>
	</div>
	@endforeach
	{{ $posts->links() }}
@else
<div class="alert alert-info">
	<strong>Ops</strong> No Posts
</div>
@endif

@endsection