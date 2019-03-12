@extends('includes.admin-layout')
@section('content')
<!--Action boxes-->
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
        {{Form::label('email', 'Email', ['style' => 'text-align:left;font-weight:bold;'])}}
        {{Form::text('email', '', ['class' => 'input-block-level', 'placeholder' => 'Email'])}}
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
    <form action="/admin" method="post">
    {!! Form::open(['action' => 'AdminController@store_course', 'method' => 'POST']) !!}
      <select id="member-username" name="user_id" class="span8">
        <option selected="selected">Username</option>
        @foreach($member as $user)
          <option value="{{ $user->id }}">{{$user->username}}</option>
        @endforeach
      </select><br>
      <br>
      <div class="row">
      @foreach($kelas as $index => $k)
        <div class="row container">
        <div class="span2" style="text-align: left; font-weight: bold; font-size: 20px; margin-top: 25px">
          <input type="checkbox" value="{{ $k->id }}" class="largerCheckbox"> {{ $k->nama }}</input>
          <div id="checkbox_sub_kelas{{$k->id}}" style="font-weight: normal; font-size: 12px; margin-top: 10px; display: none;">
            @foreach($sub_kelas as $index => $sk)
              @if($sk->parent_id == $k->id)
                <input type="checkbox" name="sub_kelas_id[]" value="{{ $sk->id }}"> {{ $sk->nama }}</input><br>
              @endif
            @endforeach
          </div>
        </div>
      </div>
      @endforeach
      </div>
      <input type="submit" value="Update" class="btn btn-primary" style="float: right;"></input>
    </form>
  </div>
</section>  

<!--End-Action boxes-->    
@endsection
