<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link href="https://vjs.zencdn.net/7.4.1/video-js.css" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">

    <title>My App</title>
</head>

<body>
    <div id="app">
        @include('layouts.header')
        
        @yield('content')
    </div>

    <script src="./js/app.js"></script>
    {{-- <script src='https://vjs.zencdn.net/7.4.1/video.js'></script> --}}
</body>

</html>