@extends('master')

@section('title', $title)

@section('header')
    <header>
        <div class="header_bg">
            @include('parts.navbar')
            <div id="W2D">
                <img src="{{ asset('images/W2D.svg') }}" alt="W2D">
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div id="penis">
        <penis></penis>
    </div>

    @include('parts.about')
    @include('parts.mission')
    @include('parts.whitepaper')
    @include('parts.roadmap')
    @include('parts.subscribe')
    @include('parts.team')
    @include('parts.companies')
    @include('parts.advisors')
    @include('parts.people')
@endsection

@section('footer')
    @include('parts.footer')
@endsection