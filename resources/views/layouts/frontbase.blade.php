<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="author" content="KEREM ŞAHİN">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="@yield("keywords")" name="keywords">
    <meta content="@yield("description")" name="description">
    <link href="@yield("icon")" rel="icon" type="image/x-icon">

    <!-- Favicon -->
    <link href="{{asset('assets')}}/img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
    @yield("head")
</head>
<body>
<!-- Pre Loader -->
<div id="loader" class="show">
    <div class="loader"></div>
</div>

@include('home.header')

@include('home.sidebar')
@section('sidebar')
@show

@section('slider')
@show

@yield('content')


@include('home.footer')
@yield('foot')
</body>

</html>
