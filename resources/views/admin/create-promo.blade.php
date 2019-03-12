@extends('includes.admin-layout')
@section('content')
<!--Action boxes-->
<section>
  <div class="subkelas-create-box">
  <h1>Create Promo</h1>
  <hr><br>
    {!! Form::open(['action' => 'User@store', 'method' => 'POST']) !!}
      <div class="form-group">
        {{Form::text('nama', '', ['class' => 'input-block-level', 'placeholder' => 'Nama Sub Class'])}}
      </div>
      <div class="form-group">
        {{Form::label('kelas', 'Kelas')}}
        {{Form::select('kelas', $kelas)}}
      </div>
      <br>
      {{Form::submit('Submit', ['class' => 'btn btn-primary', 'style' => 'float:right;'])}}
    {!! Form::close() !!}
  </div>
</section>
<!--End-Action boxes-->
@endsection