@extends('includes.admin-layout')
@section('content')
<div class="post-box">
	<h1>Materi Promo</h1>
	<hr><br>
	@if(count($promo) > 0)
		@foreach($promo as $row)
			<div class="well">
				<div class="row">
					<div class="span2" style="text-align: left;">
						<h3>{{ $row->name }}</h3>
						<a class="btn btn-primary" href="/admin/promo/{{$row->id}}/edit">Edit</a>
						<a class="btn btn-danger" href="/admin/promo/{{$row->id}}/delete">Hapus</a>
					</div>
				</div>
			</div>
		@endforeach
	@else
		<h3>No promo Found</h3>
	@endif
</div>

@endsection