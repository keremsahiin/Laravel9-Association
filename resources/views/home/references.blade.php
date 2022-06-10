@extends('layouts.frontbase')

@section('title','References | '. $setting->title)
@section('keywords', $setting->keywords)
@section('description', $setting->description)
@section('icon', \Illuminate\Support\Facades\Storage::url($setting->icon))

@section('sidebar')
    @include('home.sidebar')
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>References</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('references')}}">References</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="section">

        <div class="container">

            <div class="row">
                {!! $setting->references !!}
            </div>

        </div>

    </div>

@endsection
