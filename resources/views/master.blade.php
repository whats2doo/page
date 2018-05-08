<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-env="{{ app()->environment() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/apple-touch-icon-180x180.png') }}">
    <link rel="icon" href="{{ asset('images/apple-touch-icon.png') }}">

    <meta property="og:title" content="{{ __('messages.opengraph.title') }}">
    <meta property="og:type" content="Website">
    <meta property="og:url" content="https://ico.whats2doo.com/">
    <meta property="og:description" content="{{ __('messages.opengraph.description') }}">
    <meta property="og:image" content="{{ asset('images/w2d-primary.svg') }}">
    <meta property="og:site_name" content="{{ __('messages.opengraph.site-name') }}">

    <meta name="description" content="@yield('description')">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ rand(1,9999) }}" media="screen" type="text/css">
    @include('parts.hotjar')
</head>
<body>

@include('parts.env')
@yield('header')
@yield('content')
@yield('footer')

<script type="text/javascript" src="{{ asset('js/app.js') }}?v={{ rand(1,9999) }}"></script>

</body>
</html>