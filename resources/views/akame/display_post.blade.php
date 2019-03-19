@extends('akame.master')

@section('content')
<div class="container" style="margin-top: 30px">
	<div class="tabbable">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
		    	<a class="nav-link active" data-toggle="tab" href="#tab1">Materi</a>
			</li>
			<li class="nav-item">
		    	<a class="nav-link" data-toggle="tab" href="#tab2">Video</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="tab1">
				<h1>{{ $post->title }}</h1>
			    <img style="width:100px;" src="/storage/cover_image/{{$post->cover_image}}">
			    <br><br>        
			    <div>
			        {!! $post->body !!}
			    </div>
			    <hr>
			    <small>Written on {{ $post->created_at }}</small>
			    <hr>
			</div>
			<div class="tab-pane" id="tab2">
				@foreach($post->get_video as $video)
					<div class="row" style="margin-top: 10px">
						<div class="col-md-6">
							<h4>{{$video->judul}}</h4>
						</div>
						<div class="col-md-6">
							<form method="get" action="/lihat_video/{{$video->id}}" style="display: inline;">
								<button type="submit" class="btn akame-btn active">Lihat</button>
							</form>
							<form method="get" action="/download_video/{{$video->path}}" style="display: inline;">
								<button type="submit" class="btn akame-btn active">Download</button>
							</form>
						</div>
					</div>
				@endforeach	
			</div>
		</div>
	</div>
</div>
@endsection