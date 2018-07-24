@extends('layouts.main')

@section('content')

    <div class="column small-12  medium-10 content-area">

        <div class="dash-title text-center">
            <h5>Quick Over View</h5>
        </div>

        {{--second grid column--}}
        <div class="grid-x dashboard-content" >
            <div class=" cell medium-3 card dashboard-item ">
                <div class="card-divider">
                    Vehicles
                </div>
                <i class="fa fa-cab fa-4x icon-user"></i>
                <div class="card-section">
                    <h6>200 Registered Vehicles</h6>
                </div>
            </div>
            <div class="medium-offset-1 medium-3 card dashboard-item cell">
                <div class="card-divider">
                    Drivers
                </div>
                <i class="fa fa-users fa-4x icon-user"></i>
                <div class="card-section">
                    <h6>10 Drivers</h6>
                </div>
            </div>
            <div class="medium-offset-1 medium-3 card dashboard-item cell">
                <div class="card-divider">
                   Events
                </div>
                <i class="fa fa-calendar fa-4x icon-user"></i>
                <div class="card-section">
                    <h6>On Going Events 3</h6>
                </div>
            </div>
        </div>
        {{--second grid column--}}
        <div class="grid-x dashboard-content" >
            <div class=" cell medium-3 card dashboard-item ">
                <div class="card-divider">
                    Reservations
                </div>
                <i class="fa fa-calendar-check-o fa-4x icon-user"></i>
                <div class="card-section">
                    <h6>3 Reservation Requests </h6>
                </div>
            </div>
            <div class="medium-offset-1 medium-3 card dashboard-item cell">
                <div class="card-divider">
                    Reports
                </div>
                <i class="fa fa-area-chart fa-4x icon-user"></i>
                <div class="card-section">
                    <h6>Reports</h6>
                </div>
            </div>
            <div class="medium-offset-1 medium-3 card dashboard-item cell">
                <div class="card-divider">
                    My Account
                </div>
                <i class="fa fa-cogs fa-4x icon-user"></i>
                <div class="card-section">
                    <h6>Total events Booked 5</h6>
                </div>
            </div>
        </div>

        <router-view></router-view>

    </div>


@endsection
