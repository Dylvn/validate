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

<form data-abide novalidate method="POST" action="/addProduct">
    {{ csrf_field() }}
    <div class="row">
        <div class="medium-6 columns">
        <label>Titre du film
            <input type="text" name="name" placeholder="Titre du film" required>
        </label>
        </div>
        <div class="medium-6 columns">
        <label>Réalisateur
            <input type="text" name="realisateur" placeholder="Réalisateur" required>
        </label>
        </div>
    </div>
    <div class="row">
        <div class="medium-12 columns">
            <label>Selectionner une catégorie
                <select name="categorie">
                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                    @endforeach
                </select>
            </label>
        </div>
    </div>
    <div class="row">
            <div class="medium-12 columns">
                <label>
                    Synopsis
                    <textarea name="synopsis" placeholder="Votre message" required></textarea>
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