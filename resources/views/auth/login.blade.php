@extends('layouts.admin')

@section('content')
    <div class="container">
        <form class="login-form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="login-wrap">
                <p class="login-img"><img src="{{ URL::asset('img/atmaevent/logo_sideways.png') }}" alt="Logo AtmaEvent Menyamping" width="230px" height="auto"></p>
                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <label class="checkbox">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    <span class="pull-right"> <a href="{{ route('password.request') }}"> Forgot Password?</a></span>
                </label>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                <button class="btn btn-info btn-lg btn-block" type="submit" href="{{ url('/register') }}">Signup</button>
            </div>
        </form>
    </div>
@endsection
