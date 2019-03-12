@extends('includes.admin-layout')
@section('content')
<div class="username-box">
	<h1>Upload Video</h1>
    <hr><br>
    <form action="/admin/video/upload" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <select id="post_kelas" name="post_id">
                <option disabled selected value> -- Pilih Post -- </option>
                @foreach($post as $row)
                    <option value="{{ $row->id }}">{{ $row->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="text" name="judul" placeholder="Judul Video">
        </div><br>
        <div class="form-group">
            <label title="file">Pilih File...</label>
            <input type="file" name="materi_video" accept=".mp4,.flv,.avi,.mov,.mkv">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @include('includes/error')
</div>
@endsection