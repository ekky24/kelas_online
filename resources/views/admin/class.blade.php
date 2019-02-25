@extends('includes.admin-layout')
@section('content')
<!--Action boxes-->
<section>
  <div class="username-box container">
  <h1>Create Class</h1>
    {!! Form::open(['action' => 'KelasController@store', 'method' => 'POST']) !!}
      <div class="form-group">
        {{Form::text('nama', '', ['class' => 'form-control', 'placeholder' => 'Nama Class'])}}
      </div>
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
  </div>
</section>
<!--End-Action boxes-->
@endsection