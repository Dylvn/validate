<!doctype html>
<html class="no-js" lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation Starter Template</title>
    <link rel="stylesheet" href="/css/foundation.css" />
    <link rel="stylesheet" href="/css/app.css?v=0.1">
  </head>
  <body>
    <div class="top-bar">
        <div class="top-bar-title">
            <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
            <button class="menu-icon dark" type="button" data-toggle></button>
            </span>
            <strong>Filmosaure</strong>
        </div>
        <div id="responsive-menu">
            <div class="top-bar-right">
            <ul class="dropdown menu" data-dropdown-menu>
                @if(Request::path() == '/')
                    <li class="active">
                @else
                    <li>
                @endif
                <a href="/">Accueil</a></li>
                @if(Request::path() == 'products')
                    <li class="active">
                @else
                    <li>
                @endif
                <a href="/products">Nos produits</a></li>
                @if (Auth::guest())
                    @if(Request::path() == 'contact')
                        <li class="active">
                    @else
                        <li>
                    @endif
                    <a href="/contact">Contact</a></li>
                @endif
                @if (Auth::check()) 
                    <li>
                        <a href="#">Administrateur</a>       
                        <ul class="menu vertical">
                            @if(Request::path() == 'messages')
                                <li class="active">
                            @else
                                <li>
                            @endif
                            <a href="/messages">Mes messages (non lu)</a></li>

                            @if(Request::path() == 'addProduct')
                                <li class="active">
                            @else
                                <li>
                            @endif
                            <a href="/addProduct">Ajouter d'autre films</a></li>

                            @if(Request::path() == 'logout')
                                <li class="active">
                            @else
                                <li>
                            @endif
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        </ul>
                    </li>
                @endif
            </ul>
            </div>
            <!--<div class="top-bar-right">
            <ul class="menu">
                <li><input type="search" placeholder="Search"></li>
                <li><button type="button" class="button">Search</button></li>
            </ul>
            </div>-->
        </div>
    </div>
    
    @if (session()->has('message'))
        <div class="{{ session('messageType') }} callout" data-closable="slide-out-right">
              <p>{{ session('message') }}</p>
              <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
                  <span aria-hidden="true">&times;</span>
              </button>
        </div>
    @endif


    @yield('content')

    <script src="/js/vendor/jquery.js"></script>
    <script src="/js/vendor/what-input.js"></script>
    <script src="/js/foundation.min.js"></script>
    <script src="/js/base.js?v=0.1"></script>
    <script>
      $(document).foundation();
    </script>

  </body>
</html>