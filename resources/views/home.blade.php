@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Dashboard
                    <a href="/posts/create" class="pull-right btn btn-default btn-sm">
                        <i class="fas fa-plus"> Add Post </i>
                    </a>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Posts</h3>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>Title</td>
                                <td>Created</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></td>
                                <td>{{ $post->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <a href="/posts/{{ $post->slug }}/edit" class="btn btn-info btn-sm">
                                        <i class="fas fa-edit"></i> Edit Post
                                    </a>
                                </td>
                                <td>
                                    {!! Form::open(['action' => ['PostController@destroy',
                                    $post->slug], 'method' => 'POST']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"> Delete Post</i>
                                    </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
