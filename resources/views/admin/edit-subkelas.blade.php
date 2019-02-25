@extends('includes.admin-layout')
@section('content')
<section>
  <div class="edit-subkelas">
  <h1>Edit Sub Kelas</h1>
    {!! Form::open(['action' => ['SubController@update', $subkelas->id], 'method' => 'POST']) !!}
      <div class="form-group">
        {{Form::text('nama', '', ['class' => 'input-block-level', 'placeholder' => $subkelas->nama])}}
      </div>
      {{Form::hidden('_method', 'PUT')}}
      {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
  </div>
</section>
@endsection