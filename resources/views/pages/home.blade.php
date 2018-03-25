@extends('master')

@section('title', $title)

@section('header')
    <header>
        @include('parts.navbar')
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