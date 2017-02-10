@extends('layouts.base')

@section('content')

    <div class="message row">
        <div class="medium-6 columns">
            <p class="text-left">De : {{ $message->name }}</p>
        </div>
        <div class="medium-6 columns">
            <p class="text-right">Email : <a href="mailto:{{ $message->email }}">{{ $message->email }}</a></p>
        </div>
    </div>
    <div class="message row">
        <div class="medium-12 columns">
            <p class="text-center">{{ $message->content }}</p>
        </div>
    </div>

@stop