@extends('includes.admin-layout')
@section('content')
<div class="username-box">
  <h1>Upload Materi Promo</h1>
    <hr><br>
    <form action="/admin/promo/upload" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="judul" placeholder="Judul Materi PDF">
        </div><br>
        <div class="form-group">
            <label title="file">Pilih File...</label>
            <input type="file" name="materi" accept=".pdf">
        </div><br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @include('includes/error')
</div>
@endsection