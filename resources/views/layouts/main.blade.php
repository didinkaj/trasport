@include('layouts.includes.header')
    <section class="grid-container fluid dash-container grid-margin-x grid-padding-x">
        <div class="grid-container">
        @include('layouts.includes.sidebar')

            @yield('content')
        </div>

    </section>
@include('layouts.includes.footer')




