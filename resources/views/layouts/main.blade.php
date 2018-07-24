@include('layouts.includes.header')
    <div class="grid-container dash-container">

        @include('layouts.includes.sidebar')

            @yield('content')

    </div>
@include('layouts.includes.footer')




