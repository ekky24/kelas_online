@extends('includes.admin-layout')
@section('content')
<section>
  <div class="edit-subkelas">
  <h1>Edit Video</h1>
    {!! Form::open(['action' => ['VideoController@update', $video->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

      <div class="form-group">
        {{Form::text('judul', $video->judul, ['class' => 'input-block-level', 'placeholder' => $video->judul])}}
      </div>
      <div class="form-group">
        {{Form::label('post', 'Post')}}
        {{Form::select('post_id', $post, $video->post_id)}}
      </div>
      <div class="form-group">
          <label title="file">Pilih File...</label>
          <input type="file" name="materi_video" accept=".mp4,.flv,.avi,.mov,.mkv">
      </div>
      {{Form::hidden('_method', 'PUT')}}
      {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
  </div>
</section>
@endsection