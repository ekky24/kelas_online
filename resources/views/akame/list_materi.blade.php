@extends('akame.master')
@section('content')

<div class="container" style="margin-top: 30px;">
	@foreach($post as $p)
		<div class="row" style="margin-top: 10px">
			<div class="col-md-6">
				<h4>{{$p->title}}</h4>
			</div>
			<div class="col-md-6">
				<form method="get" action="/pos/{{$p->id}}">
					<button type="submit" class="btn akame-btn active">Selengkapnya</button>
				</form>
			</div>
		</div>
	@endforeach	
</div>

@endsection