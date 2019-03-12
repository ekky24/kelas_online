@extends('includes.admin-layout')
@section('content')
<section>
  <div class="edit-course">
    <h1>Edit Course</h1>
    <hr><br>
    @foreach($kelas as $k)
      <div class="well">
        <div class="row">
          <div class="span2" style="text-align: left;"><a href="/kelas/{{ $k->id }}"><h4>{{ $k->nama }}</h4></a></div>
          <div class="span7" style="text-align: right; float: right;">
            <a href="/kelas/{{ $k->id }}/edit" class="btn btn-primary">Edit</a>
            {!!Form::open(['action' => ['KelasController@destroy', $k->id], 'method' => 'POST', 'style' => 'display:inline-block;'])!!}
              {{Form::hidden('_method','DELETE')}}
              {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
          </div>
        </div>
        <small>Created at : {{ $k->created_at }}</small>
      </div>
    @endforeach
  </div>
</section>
@endsection