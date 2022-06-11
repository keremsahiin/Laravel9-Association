@extends('layouts.frontbase')

@section('title','Contact | '. $setting->title)
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
                    <h2>Contact</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('contact')}}">Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center">
                <p>Contact Form</p>
                <h2> Information About Contact </h2>
                <h3> {!! $setting->contact !!} </h3>
            </div>
            <div class="contact-img">
                <img src="{{asset('assets')}}/img/contact.jpg" alt="Image">
            </div>
            <div class="contact-form">
                @include('home.messages')
                <form  id="checkout-form"  action="{{route("storemessage")}}" class="clearfix" method="post">
                    @csrf
                    <div class="form-item">
                        <input type="name" class="form-control" id="name" name="name" placeholder="Name & Surname">
                    </div>
                    <div class="form-item"">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                    </div>
                    <div class="form-item"">
                        <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                    </div>
                    <div class="form-item"">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                    </div>
                    <div class="form-item"">
                        <textarea class="form-control"  type="text" id="message" name="message" placeholder="Message" ></textarea>
                    </div>
                    <div>
                        <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                    </div>
                </form>
        </div>
    </div>

@endsection
