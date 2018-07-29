@include('layouts.includes.header')
<section class="grid-container fluid dash-container grid-margin-x grid-padding-x">
    <div class="grid-container">
        @include('layouts.includes.usersidebar')
        <div class="column small-12  medium-9 content-area">
            @yield('content')

            <router-view></router-view>
            <vue-progress-bar></vue-progress-bar>

        </div>

    </div>

</section>
@include('layouts.includes.footer')




