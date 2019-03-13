@extends('akame.master')
@section('content')
@if($status)
<div class="container">
	@foreach($promo as $p)
		<div>
			<h4>{{$p->name}}</h4>
			<form method="get" action="download/{{$p->file}}">
				<button type="submit" class="btn-primary" style="display: inline;">Download</button>
			</form>
		</div>
	@endforeach	
</div>
@else
<p>
	Isi data lengkap kamu terlebih dahulu <a href="/daftar_promo">disini</a>
</p>
@endif
@endsection