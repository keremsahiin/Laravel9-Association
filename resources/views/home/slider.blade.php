<!-- Carousel Start -->
<div class="carousel">
    <div class="container-fluid">
        <div class="owl-carousel">
            @foreach($sliderdata as $rs)
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="{{Storage::url($rs->image)}}" alt="Image">
                </div>
                <div class="carousel-text">
                    <h1>{{$rs->title}}</h1>
                    <div class="carousel-btn">
                        <a class="btn btn-custom" href="">Donate Now</a>
                        <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Watch Video</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Carousel End -->
