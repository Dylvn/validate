@extends('layouts.base')

@section('content')


        @if (count($errors) > 0)
            <div class="alert callout" data-closable="slide-out-right">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                    <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                        <span aria-hidden="true">&times;</span>
                    </button>
                 @endforeach
            </div>
        @endif

    <form data-abide novalidate id="form" method="post" action="/contact">

        {{ csrf_field() }}

        <div class="row">
            <div class="medium-6 columns">
            <label>Nom
                <input name="name" type="text" placeholder="Votre nom" required>
            </label>
            </div>
            <div class="medium-6 columns">
            <label>Email
                <input data-parsley-type="email" name="email" type="text" placeholder="Votre email" required>
            </label>
            </div>
        </div>
        <div class="row">
            <div class="medium-12 columns">
                <label>
                    Message
                    <textarea name="content" placeholder="Votre message" required></textarea>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="medium-offset-1">
                <div class="input-group-button">
                    <input type="submit" class="button" value="Submit">
                </div>    
            </div>
        </div>
    </form>

@endsection