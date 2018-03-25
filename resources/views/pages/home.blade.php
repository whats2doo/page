@extends('master')

@section('title', $title)

@section('header')
    <header>
        @include('parts.navbar')

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    @spaceless
                    <div id="w2d">
                        <div id="painter"></div>
                    </div>
                    @endspaceless
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    {{--<div id="penis">--}}
    {{--<penis></penis>--}}
    {{--</div>--}}

    @include('parts.about')
    @include('parts.mission')
    @include('parts.whitepaper')
    @include('parts.roadmap')
    @include('parts.subscribe')
    @include('parts.team')
    @include('parts.companies')
    @include('parts.advisors')
    @include('parts.dj')
@endsection

@section('footer')
    @include('parts.footer')
@endsection