@extends('layouts.app')

@section('content')

    <div class="grid-container auth-container">
        <div class="row align-middle ">

            <div class="form-container small-12 medium-6 small-centered columns">

                <div class="row align-middle home-logo ">
                    <div class="columns">
                        <img src="{{asset('images/logo.jpg')}}">
                    </div>
                </div>
            </div>

            <div class="form-container small-12 medium-6 small-centered columns">
                <div class="form-title text-center">
                    <h4>Login</h4>
                </div>

                <form class="login-form" method="POST" action="{{ route('login') }}">

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
                        <div class="column button-plus-link">
                            <a href="{{ route('password.request') }}" class="pull-right">
                                &nbsp;
                                Forgot Your Password?
                            </a>
                        </div>
                        <div class="column button-plus-link ">
                            <button type="submit float-right" class="button">
                                Login
                            </button>
                        </div>


                    </div>
            </div>
            </form>

        </div>

    </div>

    </div>
@endsection
