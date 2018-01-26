<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="screen" type="text/css">
</head>
<body>
<example-component></example-component>
@yield('content')
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>