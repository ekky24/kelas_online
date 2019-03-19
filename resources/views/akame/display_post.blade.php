@extends('akame.master')

@section('content')
<div class="show-post-box container">
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
@endsection