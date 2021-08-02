<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Signature Tool</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type='image/x-icon' href="https://tools.codeclouds.com/favicon.ico">
    <link rel="stylesheet" href="{{url(asset('bootstrap/css/bootstrap.min.css'))}}">
    <link rel="stylesheet" href="{{url(asset('font-awesome/css/font-awesome.min.css'))}}">
    <link rel="stylesheet" href="{{url(asset('bootstrap/css/bootstrap.css'))}}">
    <link rel="stylesheet" href="{{url(asset('dist/css/custom.css'))}}">
    <link rel="shortcut icon" type="image/x-icon" href="https://tools.codeclouds.com/favicon.ico">
    <link rel="apple-touch-icon" sizes="60x60" href="https://tools.codeclouds.com/apple-icon-60x60.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <div class="vertical-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-box-login">
                        <div class="img-cont">
                            <img src="{{url(asset('dist/images/logo-codeclouds-tm.svg'))}}" alt="" />
                        </div>
                        <p class="login">Sign In</p>

                        <a href="{{ url('auth/google') }}" class="btn btn-block btn-social btn-danger" tabindex="0">
                            <i class="fa fa-google-plus"></i> Sign in with Google</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>