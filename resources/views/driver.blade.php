@include('layouts.includes.header')
<section class="grid-container fluid dash-container grid-margin-x grid-padding-x">
    <div class="grid-container">

        <div class="column small-12  medium-12 content-area">
            @yield('content')
            <div class="container">
            <div class="grid-x medium-offset-1">
                <div class="cell medium-4">
                    <driver-profile-component></driver-profile-component>
                </div>
                <div class="cell medium-7 medium-offset-1">
                    <driver-assignmenr-component></driver-assignmenr-component>
                </div>

            </div>
            </div>

        </div>

    </div>

</section>
@include('layouts.includes.footer')




