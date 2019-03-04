@extends('includes.admin-layout')
@section('content')
<div class="post-box">
	<h1>Videos</h1>
	<hr><br>
	@if(count($video) > 0)
		@foreach($video as $row)
			<div class="well">
				<div class="row">
					<div class="span2" style="text-align: left;">
						<h3><a href="/admin/video/{{ $row->id }}">{{ $row->judul }}</a></h3>
						<p>{{ $row->get_post->title }}</p>
						<a class="btn btn-primary" href="/admin/video/{{$row->id}}/edit">Edit</a>
						<a class="btn btn-danger" href="/admin/video/{{$row->id}}/delete">Hapus</a>
					</div>
				</div>
			</div>
		@endforeach
	@else
		<h3>No Video Found</h3>
	@endif
</div>

@endsection