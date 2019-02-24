@extends('includes.admin-layout')
@section('content')
<!--Action boxes-->
<div class="container">
  <section>
    <div class="username-box">
      <h1>Create User</h1>
      <hr>
      <br>
      {!! Form::open(['action' => 'AdminController@store', 'method' => 'POST']) !!}
        <div class="form-group">
          {{Form::label('username', 'Username', ['style' => 'text-align:left;font-weight:bold;'])}}
          {{Form::text('username', '', ['class' => 'input-block-level', 'placeholder' => 'Username'])}}
        </div><br>
        <div class="form-group">
          {{Form::label('password', 'Password', ['style' => 'text-align:left;font-weight:bold;'])}}
          {{Form::password('password', ['class' => 'input-block-level', 'placeholder' => 'Password'])}}
        </div><br>
        <input type="submit" value="Create" class="btn btn-primary" style="float: right;"></input>
      {!!Form::close()!!}
    </div>
    <br>
    <br>
    <br>
  </section>

  <section>
    <div class="course-box">
      <h1>Manage Course</h1>
      <hr>
      <br>
      {!! Form::open(['action' => 'AdminController@store', 'method' => 'POST']) !!}
        <select id="member-username" class="span12">
          <option selected="selected">Username</option>
          @foreach($member as $user)
            <option>{{$user->username}}</option>
          @endforeach
        </select><br>
        <br>
        <div class="row">
        @foreach($kelas as $k)
          <div class="span2" style="text-align: left; font-weight: bold; font-size: 20px;">
            <input type="checkbox" value="course{{ $k->id }}" class="largerCheckbox"> {{ $k->nama }}</input>
          </div>
        @endforeach
        </div>
      {!!Form::close()!!} 
    </div>
    <input type="submit" value="Update" class="btn btn-primary" style="float: right;"></input>
  </section>
</div>

<!--End-Action boxes-->    
@endsection
