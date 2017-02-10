@extends('layouts.base')

@section('content')

    <div class="row">
        @foreach ($films as $film)
            <div class="medium-4 columns">
                <div class="row">
                    <p class="lead text-center">{{ $film->name }}</p>
                </div>
                <div class="row">
                    <a href="/product/{{ $film->id }}"><img width="797" height="1080" src="/img/{{ $film->img }}.jpg" onerror="this.src='/img/banane.jpg'" alt=""></a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="menu-centered">
            {{ $films->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>

@endsection