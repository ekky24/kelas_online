@extends('includes.admin-layout')
@section('content')
<!--Action boxes-->
<section>
  <div class="username-box">
  <h1>Create Class</h1>
  <hr><br>
    {!! Form::open(['action' => 'KelasController@store', 'method' => 'POST']) !!}
      <div class="form-group">
        {{Form::text('nama', '', ['class' => 'input-block-level', 'placeholder' => 'Nama Class'])}}
      </div>
      <br>
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
  </div>
</section>
<!--End-Action boxes-->
@endsection