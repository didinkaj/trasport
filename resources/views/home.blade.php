@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            <div class="form-container small-6 small-centered columns">

                <div class="form-title text-center">
                    Dashboard
                </div>

                <div class="callout">
                    You are logged in!

                </div>

                <main-component></main-component>
                <router-view></router-view>



            </div>

        </div>

    </div>

@endsection
