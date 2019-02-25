@extends('includes.admin-layout')
@section('content')
<div class="container">
	<h1>{{ $video->judul }}</h1>
	<h6>{{ $video->get_sub_kelas->nama }}</h6>
		<div class="well">
			<div class="row">
				<div class="span12 text-center">
					<video width="720" controls>
						<source src="{{ $path }}" type="video/mp4">
					</video>
					<!--<iframe width="420" height="345" src="{{ $path }}"></iframe>-->
				</div>
			</div>
		</div>
</div>

@endsection