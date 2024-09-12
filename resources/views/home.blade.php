@extends('layouts.appafterlogin')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>User Profile</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a>
                        </li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="user-profile">
            <div class="row">
                <!-- user profile first-style start-->
                <div class="col-sm-12">
                    <div class="card hovercard text-center">
                        <div class="cardheader"></div>
                        <div class="user-image">
                            <div class="avatar">
                                <img alt="" src="{{ asset('assets/images/user/7.jpg') }}">
                            </div>
                            <div class="icon-wrapper">
                                <i class="icofont icofont-pencil-alt-5"></i>
                            </div>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h6><i class="fa fa-envelope"></i> Email</h6>
                                                <span>{{ Auth::user()->email }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h6><i class="fa fa-calendar"></i> BOD</h6>
                                                <span>{{ date('d-M-Y', strtotime(Auth::user()->date_of_birth)) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                                    <div class="user-designation">
                                        <div class="title"><a target="_blank"
                                                href="">{{ Str::ucfirst(Auth::user()->name) }}</a>
                                        </div>
                                        <div class="desc">{{ Str::ucfirst(Auth::user()->gender) }}</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h6>
                                                    <i class="fa fa-location-arrow"></i> Location
                                                </h6>
                                                <span>{{ @$users->city->name }} {{ @$users->state->name }}
                                                    {{ @$users->country->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- user profile first-style end-->
                <!-- user profile second-style start-->


            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
