@extends('includes.admin-layout')
@section('content')
<div class="post-list-box">
	<a href="/kelas" class="btn btn-default">Back To Class</a>
	<h1>{{ $kelas->nama }}</h1>
	<hr>
	<br>
	@if(count($subkelas) > 0)
		@foreach($subkelas as $sk)
			<div class="well">
				<div class="row">
					<div class="span6">
						<h3><a href="/subkelas/{{ $sk->id }}">{{ $sk->nama }}</a></h3>
						<small>Written On {{ $sk->created_at }}</small>
					</div>
				</div>
			</div>
		@endforeach
	@else
		<h3>No Post Found</h3>
	@endif
</div>
@endsection