@extends('includes.admin-layout')
@section('content')
<div class="container">
	<h1>Videos</h1>
	@if(count($video) > 0)
		@foreach($video as $row)
			<div class="well">
				<div class="row">
					<div class="span3">
						<h3><a href="/admin/video/{{ $row->id }}">{{ $row->judul }}</a></h3>
						<p>{{ $row->get_sub_kelas->nama }}</p>
						<small>Uploaded at {{ $row->created_at }}</small>
					</div>
					<div class="span6">
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