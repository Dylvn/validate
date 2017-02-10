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

<form method="POST" action="/product/{{ $film->id }}/update">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="row">
        <div class="medium-6 columns">
        <label>Titre du film
            <input type="text" value="{{ old('title') ? old('title') : $film->name }}" name="name" placeholder="Titre du film">
        </label>
        </div>
        <div class="medium-6 columns">
        <label>Réalisateur
            <input type="text" value="{{ old('title') ? old('title') : $film->realisateur }}" name="realisateur" placeholder="Réalisateur">
        </label>
        </div>
    </div>
    <div class="row">
            <div class="medium-12 columns">
                <label>
                    Synopsis
                    <textarea name="synopsis" placeholder="Votre message">{{ old('title') ? old('title') : $film->synopsis }}</textarea>
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
    </div>
</form>


@endsection