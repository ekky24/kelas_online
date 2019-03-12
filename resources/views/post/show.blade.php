@extends('includes.admin-layout')
@section('content')
<div class="show-post-box">
	<a href="/posts" class="btn btn-default">Back To Post</a>
	<h1>{{ $post->title }}</h1>
	<img style="width:100px;" src="/storage/cover_image/{{$post->cover_image}}">
	<br><br>		
	<div>
		{!! $post->body !!}
	</div>
	<hr>
	<small>Written on {{ $post->created_at }}</small>
	<hr>
	<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

	{!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
		{{Form::hidden('_method','DELETE')}}
		{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
	{!!Form::close()!!}
</div>
@endsection