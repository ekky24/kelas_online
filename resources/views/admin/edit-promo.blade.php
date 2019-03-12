@extends('includes.admin-layout')
@section('content')
<section>
  <div class="edit-subkelas">
  <h1>Edit Promo</h1>
    {!! Form::open(['action' => ['PromoController@update', $promo->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

      <div class="form-group">
        {{Form::text('judul', $promo->name, ['class' => 'input-block-level', 'placeholder' => $promo->judul])}}
      </div>
      <div class="form-group">
          <label title="file">Pilih File...</label>
          <input type="file" name="materi_promo" accept=".pdf">
      </div>
      {{Form::hidden('_method', 'PUT')}}
      {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
  </div>
</section>
@endsection