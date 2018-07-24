@extends('layouts.app')

@section('content')

    <div class="form-container small-12 medium-6 small-centered columns">
        <div class="form-title text-center">
            <i class="fa fa-user-circle fa-5x auth-icon" aria-hidden="true"></i>
        </div>

        <form class="auth-form" method="POST" action="{{ route('login') }}">

            {{ csrf_field() }}

            <div class="email">
                <label class="form-label" for="email">E-Mail Address</label>

                <input id="email" type="email" name="email" value="{{ old('email') }}"
                       aria-describedby="emailHelpText" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-text" id="emailHelpText">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                @endif
            </div>

            <div class="password">
                <label class="form-label" for="password">Password</label>

                <input id="password" type="password" name="password" aria-describedby="passwordHelpText"
                       required>

                @if ($errors->has('password'))
                    <span class="help-text" id="passwordHelpText">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                @endif
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
            </div>
            <div class="row">
                <div class="column small-12  medium-6 button-plus-link">
                    <a href="{{ route('password.request') }}" class="pull-right forgot-password">
                        &nbsp;
                        Forgot Your Password?
                    </a>
                </div>
                <div class="column small-12 medium-6 button-plus-link  ">
                    <button type="submit" class=" auth-button button">
                        Login
                    </button>
                </div>
            </div>

        </form>

    </div>
@endsection
