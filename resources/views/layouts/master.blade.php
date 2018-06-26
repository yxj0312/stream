<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/app.css">

    <title>My App</title>
</head>

<body>
    <div id="app">
        <router-link to="/">Home</router-link>
        <router-link to="/about">About</router-link>
    </div>

    <script src="./js/app.js"></script>
</body>

</html>