@extends('master')

@section('title', $title)

@section('content')
    Hannes stinkt von oben bis unten den ganzen tag lang
    <div id="app">
        <example-component></example-component>
        {{ __('messages.test') }}: Das ist home 2
    </div>
@endsection