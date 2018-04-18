@extends('master')

@section('title', $title)

@section('header')
    <header id="home">
        @include('parts.navbar')

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div id="w2d">
                        <div id="w2d-placeholder">
                            <img id="placeholder-image" src="{{ asset('images/w2d-placeholder-bg.svg') }}">
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

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/app.js') }}?v={{ rand(1,9999) }}"></script>
@endsection