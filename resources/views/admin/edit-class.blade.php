@extends('includes.admin-layout')
@section('content')
<section>
  <div class="edit-course">
  <h1>Edit Kelas</h1>
    {!! Form::open(['action' => ['KelasController@update', $kelas->id], 'method' => 'POST']) !!}
      <div class="form-group">
        {{Form::text('nama', '', ['class' => 'form-control', 'placeholder' => $kelas->nama])}}
      </div>
      {{Form::hidden('_method', 'PUT')}}
      {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
  </div>
</section>
@endsection