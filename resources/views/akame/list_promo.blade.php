@extends('akame.master')
@section('content')
@if($status)
<div class="container" style="margin-top: 30px;">
	@foreach($promo as $p)
		<div>
			<h4 style="display: inline-block;">{{$p->name}}</h4>
			<form method="get" action="download/{{$p->file}}" style="display: inline-block; float: right;">
				<button type="submit" class="btn akame-btn active">Download</button>
			</form>
		</div>
	@endforeach	
</div>
@else
<div class="container">
	<p>
		Isi data lengkap kamu terlebih dahulu <a href="/daftar_promo">disini</a>
	</p>
</div>
@endif
@endsection