@extends('layouts.app')

@section('content')

    <div class="form-container small-12 medium-6 small-centered columns auth">

            <div class="status_message">
                @if (session('status'))
                    <div class="callout">
                        {{ session('status') }}
                    </div>
                @endif
            </div>

            <div class="form-title text-center">
                <p>Reset you password</p>
                <i class="fa fa-unlock-alt fa-5x auth-icon" aria-hidden="true"></i>
            </div>

            <form class="auth-form" method="POST" action="{{ route('password.email') }}">

                {{ csrf_field() }}

                <div class="email">
                    <label for="email">E-Mail Address</label>

                    <input id="email" type="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelpText" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-text" id="emailHelpText">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <div class="column button-plus-link  ">
                        <button type="submit" class="button auth-button forgot-password large">
                            Send Password Reset Link
                        </button>
                    </div>
                </div>

            </form>

        </div>

@endsection
