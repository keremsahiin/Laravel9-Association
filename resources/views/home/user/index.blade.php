@extends('layouts.frontbase')

@section('title','Contact Panel')

@section('sidebar')
    @include('home.sidebar')
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contact</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a>User Panel</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
<div class="contact">
    <div class="container">
        <div class="section-header text-center">
                <p>User Menu</p>
                @include('home.user.usermenu')
        </div>
    </div>
</div>
<div class="container">
    <div class="section-header text-center">
        <p>User Profile</p>
    </div>
    <div class="input-chechbox">
        @include('profile.show')
    </div>
</div>
@endsection
