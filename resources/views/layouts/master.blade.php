<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link href="https://vjs.zencdn.net/7.4.1/video-js.css" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>My App</title>
</head>

<body>
    <div id="app">
        @include('layouts.header')
        
        @yield('content')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='https://vjs.zencdn.net/7.4.1/video.js'></script>
    <script src="//cdn.sc.gl/videojs-hotkeys/0.2/videojs.hotkeys.min.js"></script>
    <script src="./js/app.js"></script>
</body>

<script>
    var video = videojs('my-video', {
        playbackRates: [.5, 1, 1.5, 2, 2.5],
        fluid: true
    });
    // var video = videojs('my-video', {
    //     // options:
    //     preload: 'auto',
    //     playbackRates: [.5, 1, 1.5, 2, 2.5]
    //     plugins: {
    //         hotkeys: {
    //             seekStep: 10,
    //             enableNumbers: false
    //         }
    //     }
    // });

    // video.ready(function () {
    //     var speed = prompt("How fast should we go?");

    //     this.playbackRate(speed)

    //     setTimeout(() => { this.play(); },1000);

    //     // setTimeout(() => { 
    //     //     this.play(); 
    //     // }, 3000); 
    // });

    // video.on('pause', function(){
    //     alert('You have' + this.remainingTime() + 'seconds left to watch');
    // });
    
    video.on('ended', function(){
        $.ajax({
            type: 'POST',
            url: '/completions',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            // data: { videoId: $('video').data('video-id') }
            data: { videoId: 1 }
        })
        // alert('The video has ended');
    });


    video.ready(function (){
        this.hotkeys({
            seekStep: 10,
            enableNumbers: false
        });
    })
</script>

</html>