@extends('includes.admin-layout')
@section('content')
<!--Action boxes-->
<section>
  <div class="username-box container">
  <p>Create Class</p>
    <form method="POST">
      <input type="text" value="Name Class"></input><br>
      <div class="radio">
        <label><input type="radio" id="radioclass" name="optradio" checked onclick="gone();">Class</label>
      </div>
      <div class="radio">
        <label><input type="radio" id="radiosubclass" name="optradio" onclick="show();">Sub Class</label>
      </div>
      <select id="course-list">
        <option selected="selected">Course</option>
      </select><br>
      <input type="submit" value="Create"></input>
    </form>
  </div>
</section>

<section>
  <div class="edit-course">
    <p>Edit Course</p>
    @foreach($class as $kelas)
      <div class="row">
        <div class="col-sm-4">{{ $kelas->nama }}</div>
        <div class="col-sm-4"><button class="btn btn-primary" style="display: inline;">Update</button></div>
        <div class="col-sm-4"><button class="btn btn-success">Delete</button></div>
      </div>
    @endforeach
  </div>
</section>
<script>
  function show() {
    document.getElementById("course-list").style.display = "inline-block";
  }
  function gone() {
    document.getElementById("course-list").style.display = "none";
  }
</script>
<!--End-Action boxes-->
@endsection