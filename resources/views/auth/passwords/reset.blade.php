@extends('layouts.app')

@section('content')

        <div class="form-container medium-6 small-centered columns auth">

            <div class="status_message">
                @if (session('status'))
                    <div class="alert-box success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>

            <div class="form-title text-center">
                <p>Reset Password</p>
                <i class="fa fa-unlock fa-5x auth-icon" aria-hidden="true"></i>
            </div>

            <form class="auth-form" method="POST" action="{{ route('password.request') }}">

                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="email">
                    <label for="email">E-Mail Address</label>

                    <input id="email" type="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelpText" required autofocus>

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

                <div class="password">
                    <label for="password-confirm">Confirm Password</label>

                    <input id="password-confirm" type="password" name="password_confirmation" aria-describedby="passwordConfirmHelpText" required>

                    @if ($errors->has('password'))
                        <span class="help-text" id="passwordConfirmHelpText">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>


                <div class="row">
                    <div class="column button-plus-link  ">
                        <button type="submit" class="button auth-button forgot-password large">
                            Reset Password
                        </button>
                    </div>
                </div>

            </form>

        </div>


@endsection
