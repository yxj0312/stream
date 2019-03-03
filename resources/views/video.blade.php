@extends('layouts.master')

@section('content')
<div class="container">
    <div class="notification">
        This container is <strong>centered</strong> on desktop.
    </div>
    <video controls autoplay poster="https://vjs.zencdn.net/v/oceans.png">
        <source src="http://vjs.zencdn.net/v/oceans.mp4" type="video/mp4">
        <p>
            Please upgrade your browser, yo.
        </p>
    </video>
</div>
@endsection