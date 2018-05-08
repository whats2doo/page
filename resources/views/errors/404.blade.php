@extends('master')

@section('title', 'Error 404 - page not found')

@include('parts.navbar')

@section('content')
    <section id="error-content">
        <div class="error-container text-center">
            <div class="row">
                <div class="col-md-12">
                    <h1><span class="error-icon"><i class="glyphicon glyphicon-exclamation-sign"></i></span> {{ __('messages.error-messages.404') }}</h1>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
@endsection

@section('footer')
    @include('parts.footer')
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/app.js') }}?v={{ rand(1,9999) }}"></script>
@endsection