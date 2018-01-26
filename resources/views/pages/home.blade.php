@extends('master')

@section('title', $title)

@section('content')
    <div id="app">
        <example-component></example-component>
        {{ __('messages.test') }}: Das ist home 2
    </div>
@endsection