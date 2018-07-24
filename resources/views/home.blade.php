@extends('layouts.main')

@section('content')

    <div class="column small-12  medium-10 button-plus-link">

        <div class="form-title text-center">
            <br/>
        </div>

        <div class="callout">
            You are logged in!

        </div>
        <router-view></router-view>

    </div>


@endsection
