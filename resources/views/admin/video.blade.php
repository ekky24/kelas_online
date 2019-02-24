@extends('includes.admin-layout')
@section('content')
<div class="container">
	<h1>Upload Video</h1>
    <form action="/admin/video/upload" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label title="kelas">Kelas</label>
            <select id="post_kelas">
                <option disabled selected value> -- Pilih Kelas -- </option>
                @foreach($kelas as $row)
                    <option value="{{ $row->id }}">{{ $row->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label title="sub_kelas">Sub Kelas</label>
            <select id="post_sub_kelas" name="sub_kelas_id">
                <option disabled selected value> -- Pilih Sub Kelas -- </option>
            </select>
        </div>
        <div class="form-group">
            <label title="judul">Judul</label>
            <input type="text" name="judul">
        </div>
        <div class="form-group">
            <label title="file">Pilih File...</label>
            <input type="file" name="materi_video" accept=".mp4,.flv,.avi,.mov,.mkv">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @include('includes/error')
</div>
@endsection