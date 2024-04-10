<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{env('APP_NAME')}} - {{env('APP_SUBTITLE')}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    @vite([
    'resources/lib/lightbox/css/lightbox.min.css',
    'resources/lib/owlcarousel/assets/owl.carousel.min.css',

    'resources/css/bootstrap.min.css',
    'resources/css/style.css',


    'resources/lib/easing/easing.min.js',
    'resources/lib/waypoints/waypoints.min.js',
    //'resources/lib/lightbox/js/lightbox.min.js',
    'resources/lib/owlcarousel/owl.carousel.min.js',
    'resources/js/main.js',
    'resources/js/app.js',
    ])
</head>

<body>

<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->


<!-- Navbar start -->
@include('layouts.wrapper-blocks.header')
<!-- Navbar End -->
<livewire:OverlayForm/>
@yield('content')

<!-- Footer Start -->
@include('layouts.wrapper-blocks.footer')
<!-- Footer End -->

<!-- Copyright Start -->
@include('layouts.wrapper-blocks.copytight')
<!-- Copyright End -->



<!-- Back to Top -->
<a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


@section('scripts')
</body>

</html>
