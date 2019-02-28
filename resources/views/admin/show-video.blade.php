@extends('includes.admin-layout')
@section('content')
<div class="post-box">
	<h1>{{ $video->judul }}</h1>
	<hr><br>
	<h4>{{ $video->get_post->title }}</h4>
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