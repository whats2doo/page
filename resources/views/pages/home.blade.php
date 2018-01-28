@extends('master')

@section('title', $title)

@section('header')
    <header>
        @include('parts/navbar')
        <div id="W2D">
            <img src="{{ asset('images/W2D.svg') }}" alt="W2D">
        </div>
    </header>
@endsection

@section('content')
@endsection

@section('footer')
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    Das ist der Footer
                </div>
            </div>
        </div>
    </footer>
@endsection