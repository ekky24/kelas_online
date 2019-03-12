@extends('includes.admin-layout')
@section('content')
<div>
	<h1>Create Post</h1>
	{!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    	<div class="form-group">
    		{{Form::label('title', 'Title')}}
    		{{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    	</div>
        <div class="form-group">
            {{Form::label('subkelas', 'Subkelas')}}
            {{Form::select('subkelas', $subkelas, $post->class_id)}}
        </div>
    	<div class="form-group">
    		{{Form::label('body', 'Body')}}
    		{{Form::textarea('body', $post->body,['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
    	</div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
    	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
</div>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'article-ckeditor' );
</script>
@endsection