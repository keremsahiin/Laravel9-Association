@extends('layouts.frontbase')

@section('title', $data->title )

@section('content')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">{{$data->title}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img" data-parallax="scroll" data-image-src="{{asset('assets')}}/img/about.jpg"></div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header">
                        <h1>{{$data->title}}</h1>
                    </div>
                    <div>
                        @php
                            $average = $data->comment->average('rate');
                        @endphp
                        <div class="content-rating">
                            <i class="fa fa-star @if($average<1) -o empty @endif"></i>
                            <i class="fa fa-star @if($average<2) -o empty @endif"></i>
                            <i class="fa fa-star @if($average<3) -o empty @endif"></i>
                            <i class="fa fa-star @if($average<4) -o empty @endif"></i>
                            <i class="fa fa-star @if($average<5) -o empty @endif"></i>
                        </div>
                        <a href="#">{{number_format($average,1)}}/{{$data->comment->count('id')}}  Average/Comment(s)</a>
                    </div>
                    <div class="about-tab">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab-content-1" class="container tab-pane active">
                                <p>
                                    {!!$data->detail!!}
                                </p>
                            </div>
                            <div id="tab-content-2" class="container tab-pane fade">
                                Sed tincidunt, magna ut vehicula volutpat, turpis diam condimentum justo, posuere congue turpis massa in mi. Proin ornare at massa at fermentum. Nunc aliquet sed nisi iaculis ornare. Nam semper tortor eget est egestas, eu sagittis nunc sodales. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent bibendum sapien sed purus molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                            <div id="tab-content-3" class="container tab-pane fade">
                                Aliquam dolor odio, mollis sed feugiat sit amet, feugiat ut sapien. Nunc eu dignissim lorem. Suspendisse at hendrerit enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed condimentum semper turpis vel facilisis. Nunc vel faucibus orci. Mauris ut mauris rhoncus, efficitur nisi at, venenatis quam. Praesent egestas pretium enim sit amet finibus. Curabitur at erat molestie, tincidunt lorem eget, consequat ligula.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-home"></i>
                        <div class="facts-text">
                            <h3 class="facts-plus" data-toggle="counter-up">150</h3>
                            <p>Countries</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-charity"></i>
                        <div class="facts-text">
                            <h3 class="facts-plus" data-toggle="counter-up">400</h3>
                            <p>Volunteers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-kindness"></i>
                        <div class="facts-text">
                            <h3 class="facts-dollar" data-toggle="counter-up">10000</h3>
                            <p>Our Goal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-donation"></i>
                        <div class="facts-text">
                            <h3 class="facts-dollar" data-toggle="counter-up">5000</h3>
                            <p>Raised</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Meet Our Team</p>
                <h2>Awesome guys behind our charity activities</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        @foreach($images as $rs)
                        <div class="team-img">
                            <img src="{{Storage::url($rs->image)}}" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Donald John</h2>
                            <p>Founder & CEO</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets')}}/img/team-2.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Adam Phillips</h2>
                            <p>Chef Executive</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets')}}/img/team-3.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Thomas Olsen</h2>
                            <p>Chef Advisor</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets')}}/img/team-4.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>James Alien</h2>
                            <p>Advisor</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <!--Comment Area-->
    <div class="single">
        <div class="container">
            <h1><strong>Comments ({{$data->comment->count('id')}})</strong></h1>
            <div class="row">
                <div class="col-lg-8">
                    @foreach($comments as $rs)
                        <div class="single-comment">
                             <div class="comment-heading">
                                 <div><a href="#"><i class="fa fa-user-o"></i>{{$rs->user->name}}</a></div>
                                 <div><a href="#"><i class="fa fa-user-o"></i>{{$rs->created_at}}</a></div>
                                 <div class="comment-rating pull-right">
                                     <i class="fa fa-star @if($rs->rate<1) -o empty @endif"></i>
                                     <i class="fa fa-star @if($rs->rate<2) -o empty @endif"></i>
                                     <i class="fa fa-star @if($rs->rate<3) -o empty @endif"></i>
                                     <i class="fa fa-star @if($rs->rate<4) -o empty @endif"></i>
                                     <i class="fa fa-star @if($rs->rate<5) -o empty @endif"></i>
                                 </div>
                             </div>
                            <div class="comment-body">
                                <strong>{{$rs->subject}}</strong>
                                <p>{{$rs->comments}}</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="comment-form">
                        @include('home.messages')
                        <h2>Leave a comment</h2>
                        <form action="{{route('storecomment')}}" method="post">
                            @csrf
                            <input type="hidden" class="input" name="content_id" value="{{$data->id}}">
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <label for="comment">Comment</label>
                                <textarea id="comment" id="comment" name="comment" placeholder="Comment" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-rating">
                                    <strong class="text-uppercase"> Your Rating (5-1): </strong>
                                    <div class="stars">
                                        <input type="radio" id="star5" name="rate" value="5" /> 5<label for="star5"></label>
                                        <input type="radio" id="star4" name="rate" value="4" /> 4<label for="star4"></label>
                                        <input type="radio" id="star3" name="rate" value="3" /> 3<label for="star3"></label>
                                        <input type="radio" id="star2" name="rate" value="2" /> 2<label for="star2"></label>
                                        <input type="radio" id="star1" name="rate" value="1" /> 1<label for="star1"></label>
                                    </div>
                                </div>
                            </div>
                            @auth()
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-custom">
                            </div>
                            @else
                                <a href="/login" class="btn btn-custom">For Submit Your Review , Please Login</a>
                            @endauth
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>


@endsection
