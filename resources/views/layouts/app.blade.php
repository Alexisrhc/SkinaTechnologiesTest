<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <link href="{{ asset('template/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('template/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <link href="{{ asset('template/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="">{{ config('app.name') }}</a>
            <small>@yield('title')</small>
        </div>
        @yield('content')

    </div>

    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <script src="{{ asset('template/plugins/node-waves/waves.js') }}"></script>

    <script src="{{ asset('template/plugins/jquery-validation/jquery.validate.js') }}"></script>

    <script src="{{ asset('template/js/admin.js') }}"></script>
    <script src="{{ asset('template/js/pages/examples/sign-in.js') }}"></script>
</body>

</html>