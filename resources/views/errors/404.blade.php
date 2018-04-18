@extends('master')

@section('title', 'Error 404 - page not found')

@section('content')
    <section id="error-content">
        <div class="error-container text-center">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('images/w2d.svg') }}" width="200">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1><span class="error-icon"><i class="glyphicon glyphicon-exclamation-sign"></i></span> {{ __('messages.error-messages.404') }}</h1>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
@endsection