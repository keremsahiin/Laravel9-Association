@extends('layouts.frontbase')

@section('title','User Comments & Reviews')

@section('sidebar')
    @include('home.sidebar')
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>User </h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a>My Profile</a>
                    <a>Comments</a>
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
            <p>User Comments & Reviews</p>
            <div class="input-checkbox">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Content Title</th>
                        <th>Subject</th>
                        <th>Comment</th>
                        <th>Rate</th>
                        <th>Status</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $comments as $rs)
                        <tr>
                            <td scope="row">{{$rs->id}} </td>
                            <td>
                                <a href="{{route('content',['id'=>$rs->content_id])}}"> {{$rs->content->title}}</a>
                            </td>
                            <td>{{$rs->subject}} </td>
                            <td>{{$rs->comment}} </td>
                            <td>{{$rs->rate}} </td>
                            <td>{{$rs->status}} </td>
                            <td> <a href="{{route('userpanel.commentdestroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-danger">Delete</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
