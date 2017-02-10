@extends('layouts.base')

@section('content')

    <div class="product-content row">
    
        <div class="medium-2 columns">
            <img id="imgProduct" width="797" height="1080" src="/img/{{ $film->img }}.jpg" alt="">
        </div>
        <div class="medium-8 columns">
            <h1>{{ $film->name }}</h1>
        </div>
        <div class="medium-2 columns">
            <h4>Informations</h4>
            <ul>
                <li>Réalisateur : <br>{{ $film->realisateur }}</li>
                <li>{{ str_plural('Catégorie', $film->categories->count() ) }} : 
                    @foreach( $film->categories as $categorie )
                        <br>{{ $categorie->name }}
                    @endforeach
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="medium-offset-2 medium-8 columns">
                <p>{{ $film->synopsis }}</p>
            </div>
        </div>
    
    </div>

    @if(Auth::check())
        <div class="row">
            <a class="button success" href="/product/{{ $film->id }}/update">Modifier ce film</a>
            <a class="button warning" href="/product/{{ $film->id }}/delete">Supprimer ce film</a>
        </div>
    @endif

@stop