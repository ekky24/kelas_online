@extends('includes.admin-layout')
@section('content')
<!--Action boxes-->
<section>
  <div class="username-box">
  <p>Create User</p>
    <form method="POST">
      <select>
        <option selected="selected">Username</option>
        @foreach($member as $user)
          <option>{{$user->username}}</option>
        @endforeach
      </select><br>
      <input type="password" value="password"></input>
    </form>
  </div>
</section>

<section>
  <div class="course-box">
  <p>Manage Course</p>
    <form method="POST">
      <select id="member-username">
        <option selected="selected">Username</option>
        @foreach($member as $user)
          <option>{{$user->username}}</option>
        @endforeach
      </select><br>
      <select>
          <option selected="selected">Course</option>
      </select><br>
      <div class="row">
        <div class="col-sm-3">
          <input type="checkbox" value="course1">Course 1</input>
        </div>
        <div class="col-sm-3">
          <input type="checkbox" value="course2">Course 2</input>
        </div>
        <div class="col-sm-3">
          <input type="checkbox" value="course3">Course 3</input>
        </div>
      </div>
    </form> 
    <p id="lol">adwawd</p> 
  </div>
</section>
<!--End-Action boxes-->    
@endsection
