@extends('includes.admin-layout')
@section('content')
<div class="container">
	<a href="/kelas" class="btn btn-default">Back To Class</a>
	<h1>{{ $kelas->nama }}</h1>
	<hr>
	<br>
	@if(count($post) > 0)
		@foreach($post as $p)
			<div class="well">
				<div class="row">
					<div class="span3">
						<img style="width:100px;" src="/storage/cover_image/{{$p->cover_image}}">
					</div>
					<div class="span6">
						<h3><a href="/posts/{{ $p->id }}">{{ $p->title }}</a></h3>
						<small>Written On {{ $p->created_at }}</small>
					</div>
				</div>
			</div>
		@endforeach
	@else
		<h3>No Post Found</h3>
	@endif
</div>
@endsection