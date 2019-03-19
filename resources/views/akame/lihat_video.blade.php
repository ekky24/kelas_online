@extends('akame.master')
@section('content')

<div class="container" style="margin-top: 30px;">
	<h1>{{ $video->judul }}</h1>
	<hr>
	<h4>Materi: {{ $video->get_post->title }}</h4>
		<center>
			<video width="720" controls>
				<source src="{{ $path }}" type="video/mp4">
			</video>
			<!--<iframe width="420" height="345" src="{{ $path }}"></iframe>-->
		</center>
</div>

@endsection