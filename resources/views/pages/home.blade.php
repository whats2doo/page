@extends('master')

@section('title', __('messages.meta.home.title'))
@section('description', __('messages.meta.home.description'))

@section('header')
    <header id="home">
        @include('parts.navbar')

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="w2d">
                        <div id="w2d-placeholder">
                            <img id="placeholder-image" src="{{ asset('images/painter-placeholder.svg') }}">
                            <img id="shadow" src="{{ asset('images/shadow.svg') }}">
                        </div>
                        <div id="painter"></div>
                        <div id="cleaner"></div>
                    </div><!-- w2d -->

                    <div id="header-content">
                        <h1>{{ __('messages.header.why') }}</h1>

                        <div id="token-sale-timer">
                            <div id="countdown">
                                <countdown></countdown>
                            </div>
                        </div>

                        <div id="header-buttons">
                            @spaceless
                            <a href="#subscribe" data-scroll="subscribe" class="btn btn-default btn-lg">{{ __('messages.header.subscribe') }}</a>
                            <a href="{{ asset('documents/whitepaper.pdf') }}" class="btn btn-white btn-lg" target="_blank">{{ __('messages.header.whitepaper') }}</a>
                            @endspaceless
                        </div>

                        <h2>{{ __('messages.header.official') }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="arrow-down">
            <a href="#about" data-scroll="about"><i class="ion-ios-arrow-down"></i></a>
        </div>
    </header>
@endsection

@section('content')

    @include('parts.about')
    @include('parts.mission')
    @include('parts.numbers')
    @include('parts.token-allocation')
    @include('parts.ico')
    @include('parts.whitepaper')
    @include('parts.roadmap')
    @include('parts.subscribe')
    @include('parts.team')
    @include('parts.companies')
    @include('parts.advisors')
    @include('parts.faq')
    @include('parts.dj')
@endsection

@section('footer')
    @include('parts.footer')
@endsection