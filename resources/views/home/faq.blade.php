@extends('layouts.frontbase')

@section('title','Frequently Asked Questions | '. $setting->title)
@section('keywords', $setting->keywords)
@section('description', $setting->description)
@section('icon', \Illuminate\Support\Facades\Storage::url($setting->icon))

@section('sidebar')
    @include('home.sidebar')
@endsection
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jqery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pooper.js@1.16.1/dist/umd/pooper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('faq')}}">Frequently Asked Questions</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="section">

        <div class="container">

            <div class="row">
                <div class="section-header text-center">
                    <h1> Frequently Asked Questions </h1>
                </div>
                <div id="accordion">
                    @foreach($datalist as $rs)
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                                    <h3>{{$rs->question}}</h3>
                                </a>
                            </div>
                            <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion">
                                <div class="card-body">
                                <p>{!! $rs->answer !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>

@endsection
