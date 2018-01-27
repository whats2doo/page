<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-env="{{ app()->environment() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ rand(1,9999) }}" media="screen" type="text/css">
</head>
<body>
@if(app()->environment() !== 'prod' || app()->environment() !== 'production')
    <div id="env">{{ app()->environment() }}</div>
@endif
@yield('content')
<script type="text/javascript" src="{{ asset('js/app.js') }}?v={{ rand(1,9999) }}"></script>
</body>
</html>