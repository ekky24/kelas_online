@extends('includes.admin-layout')
@section('content')
<div class="post-list-box">
	<h1>Sub Kelas</h1>
	<hr>
	<br>
	@if(count($subkelas) > 0)
		@foreach($subkelas as $sk)
			<div class="well">
				<div>
					<h3><a href="/subkelas/{{ $sk->id }}">{{ $sk->nama }}</a></h3>
					<small>Written On {{ $sk->created_at }}</small>
				</div>
				<br>
				<a href="/subkelas/{{ $sk->id }}/edit" class="btn btn-primary">Edit</a>
				{!!Form::open(['action' => ['SubController@destroy', $sk->id], 'method' => 'POST', 'style' => 'display:inline-block;'])!!}
	              {{Form::hidden('_method','DELETE')}}
	              {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
	            {!!Form::close()!!}
			</div>
		@endforeach
	@else
		<h3>No Post Found</h3>
	@endif
</div>
@endsection