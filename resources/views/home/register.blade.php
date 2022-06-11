@extends('layouts.frontbase')

@section('title','User Registration Page ')


@section('sidebar')
    @include('home.sidebar')
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Register</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                     <a>User Register</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="section">

        <div class="container">


                @include('auth.register')


        </div>

    </div>

@endsection
