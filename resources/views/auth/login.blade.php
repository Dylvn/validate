@extends('layouts.base')

@section('content')
<div class="row">
    <div class="medium-8 medium-offset-2 columns">
        <div class="panel panel-default">
            <div class="text-center">Login</div>
            <div class="panel-body">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="medium-6 columns">
                        <label>Adresse Email
                            <input id="email" type="text" name="email" value="{{ old('email') }}" placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </label>
                        </div>
                        <div class="medium-6 columns">
                        <label>Mot de passe
                            <input id="password" type="password" name="password" type="text" placeholder="password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </label>
                        </div>
                            <fieldset class="columns">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">Se rappeler de moi</label>
                            </fieldset>
                    </div>
                    <button type="submit" class="button">
                        Login
                    </button>
                    <a class="button warning" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </form>


            </div>
        </div>
    </div>
</div>
@endsection
