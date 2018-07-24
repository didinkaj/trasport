@extends('layouts.app')

@section('content')

        <div class="form-container small-12 medium-6 small-centered columns">

            <div class="form-title text-center">
                <i class="fa fa-user-plus fa-5x auth-icon" aria-hidden="true"></i>
            </div>

            <form class="auth-form" method="POST" action="{{ route('register') }}">

                {{ csrf_field() }}

                <div class="name">
                    <label for="email">Name</label>

                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" aria-describedby="nameHelpText" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-text" id="nameHelpText">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="email">
                    <label for="email">E-Mail Address</label>

                    <input id="email" type="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelpText" required>

                    @if ($errors->has('email'))
                        <span class="help-text" id="emailHelpText">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="password">
                    <label for="password">Password</label>

                    <input id="password" type="password" name="password" aria-describedby="passwordHelpText" required>

                    @if ($errors->has('password'))
                        <span class="help-text" id="passwordHelpText">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="password-confirm">
                    <label for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" type="password" name="password_confirmation" required>
                </div>


                <div class="row">
                    <div class="column button-plus-link">
                        <a href="{{ route('login') }}" class="pull-right forgot-password">
                            &nbsp;
                            Already have an account?
                        </a>
                    </div>
                    <div class="column button-plus-link  ">
                        <button type="submit" class="button auth-button">
                            Register
                        </button>
                    </div>
                </div>


            </form>

        </div>


@endsection
