<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{BASE_URL.'frontend/assets/images/layout/favicon.ico'}}">
    <!-- Bootstrap Css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300;400;500;600;700&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Meddon&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <!-- Fancy Box-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <!-- Link Owl Carousel-->
    <link rel="stylesheet" href="{{BASE_URL.'frontend/assets/css/owl.carousel.min.css'}}">
    <link rel="stylesheet" href="{{BASE_URL.'frontend/assets/css/owl.theme.default.min.css'}}">
    <!-- Wow JS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Style Css-->
    <link href="{{BASE_URL.'frontend/assets/css/main.css'}}" rel="stylesheet"/>
    <title>{{$_ENV['APP_NAME']}}| @yield('title')</title>
</head>
<body>
<div class="wrapper">
    @include('site.main.layouts.header')
    @yield('content')
    @include('site.main.layouts.footer')
</div>
<!-- Start Modal-->
<div class="modal">
    <div class="modal__content">
        <button class="close-modal"><i class="fal fa-times"></i></button>
        <div class="modal__content-caption">
            <div class="modal__content-caption__search">
                <input class="caption__text" type="text" placeholder="Search..." autofocus="">
                <button class="caption__icon"><i class="far fa-search"></i></button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal-->
<!-- Start Back-to-top-->
<div class="back-to-top" id="back-to-top"><a href="#"><i class="fal fa-arrow-up"></i></a></div>
<!-- End Back-to-top-->

<!-- Jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap JS-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Owl Carousel-->
<script src="{{BASE_URL.'frontend/assets/js/owl.carousel.min.js'}}"></script>
<!-- Fancy Box-->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<!-- Wow JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<!-- Main JS-->
<script src="{{BASE_URL.'frontend/assets/js/main.js'}}"></script>
@yield('script')
</body>


