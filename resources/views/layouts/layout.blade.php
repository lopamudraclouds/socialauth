<html>

<head>
    <title>Signature Generator - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type='image/x-icon' href="https://tools.codeclouds.com/favicon.ico">
    <link rel="stylesheet" href="{{url(asset('bootstrap/css/bootstrap.min.css'))}}">
    <link rel="stylesheet" href="{{url(asset('font-awesome/css/font-awesome.min.css'))}}">
    <link rel="stylesheet" href="{{url(asset('bootstrap/css/bootstrap.css'))}}">
    <link rel="stylesheet" href="{{url(asset('dist/css/cropper.css'))}}">
    <link rel="stylesheet" href="{{url(asset('dist/css/main.css'))}}">
    <link rel="stylesheet" href="{{url(asset('dist/css/custom.css'))}}">
    <link rel="shortcut icon" type="image/x-icon" href="https://tools.codeclouds.com/favicon.ico">
    <link rel="apple-touch-icon" sizes="60x60" href="https://tools.codeclouds.com/apple-icon-60x60.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
    <!-- @section('sidebar')
    This is the master sidebar.
    @show -->

    <div class="container">
        @yield('content')
    </div>
</body>

</html>