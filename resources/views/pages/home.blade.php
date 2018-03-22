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

    @include('parts.whitepaper')
    @include('parts.roadmap')
    @include('parts.team')
    @include('parts.companies')
    @include('parts.advisors')
@endsection

@section('footer')
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    Das ist der Footer neu
                </div>
            </div>
        </div>
    </footer>
@endsection