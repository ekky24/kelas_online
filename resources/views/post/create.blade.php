@extends('includes.admin-layout')
@section('content')
<div class="create-box">
	<h1>Create Post</h1>
	{!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    	<div class="form-group">
    		{{Form::label('title', 'Title')}}
    		{{Form::text('title', '', ['class' => 'input-block-level', 'placeholder' => 'Title'])}}
    	</div>
        <div class="form-group">
            {{Form::label('subkelas', 'Sub Kelas')}}
            {{Form::select('subkelas', $subkelas)}}
        </div>
    	<div class="form-group">
    		{{Form::label('body', 'Body')}}
    		{{Form::textarea('body', '',['id' => 'article-ckeditor', 'class' => 'input-block-level', 'placeholder' => 'Body Text'])}}
    	</div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
    	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
</div>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'article-ckeditor' );
</script>
@endsection