@extends('layouts.master')

@section('content')
<div class="container">
    <div class="notification">
        This container is <strong>centered</strong> on desktop.
    </div>
    <video id="my-video"
           class="video-js vjs-big-play-centered" 
           controls
           poster="https://vjs.zencdn.net/v/oceans.png" 
           data-setup="{}"
    >
        <source src="http://vjs.zencdn.net/v/oceans.mp4" type="video/mp4">

        <p class='vjs-no-js'>
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
        </p>
    </video>
</div>
@endsection