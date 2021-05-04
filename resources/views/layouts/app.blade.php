
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FreshMart - Organic, Fresh Food, Farm Store HTML Template</title>

    <meta name="keywords" content="Organic, Fresh Food, Farm Store">
    <meta name="description" content="FreshMart - Organic, Fresh Food, Farm Store HTML Template">
    <meta name="author" content="tivatheme">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" type="image/png">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('libs/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('libs/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('libs/font-material/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('libs/nivo-slider/css/nivo-slider.css')}}">
    <link rel="stylesheet" href="{{asset('libs/nivo-slider/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('libs/nivo-slider/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('libs/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('libs/slider-range/css/jslider.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/reponsive.css')}}">
</head>

<body class="home home-2">
<div id="all">
    <!-- Header -->
@include('components.header')
<!-- header area end -->
    @if (\Session::has('success'))
        <div class="alert alert-success alert-dismissible" style="position: fixed;right: 20px;top: 20px;left: 50%;transform: translateX(-50%);z-index: 9999999999999;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success! </strong> {{ \Session::get('success') }}
        </div>
    @endif

    @if (\Session::has('warning'))
        <div class="alert alert-warning alert-dismissible" style="position: fixed;right: 20px;top: 20px;left: 50%;transform: translateX(-50%);z-index: 9999999999999;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Warning! </strong> {{ \Session::get('warning') }}
        </div>
    @endif

    @if (\Session::has('danger'))
        <div class="alert alert-danger alert-dismissible" style="position: fixed;right: 20px;top: 20px;left: 50%;transform: translateX(-50%);z-index: 9999999999999;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error! </strong> {{ \Session::get('danger') }}
        </div>
    @endif
    <div id="content" class="site-content">
        <!-- Slideshow -->

    @include('components.slide')


        <!-- Banners -->
    @include('components.banner')

    <!-- Main Content -->
    @yield('content')

    </div>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5cbd450cc1fe2560f3ffe02b/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <!-- Footer -->
@include('components.footer')
</div>

<!-- Vendor JS -->
<script src="{{asset('libs/jquery/jquery.js')}}"></script>
<script src="{{asset('libs/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('libs/jquery.countdown/jquery.countdown.js')}}"></script>
<script src="{{asset('libs/nivo-slider/js/jquery.nivo.slider.js')}}"></script>
<script src="{{asset('libs/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('libs/slider-range/js/tmpl.js')}}"></script>
<script src="{{asset('libs/slider-range/js/jquery.dependClass-0.1.js')}}"></script>
<script src="{{asset('libs/slider-range/js/draggable-0.1.js')}}"></script>
<script src="{{asset('libs/slider-range/js/jquery.slider.js')}}"></script>
<script src="{{asset('libs/elevatezoom/jquery.elevatezoom.js')}}"></script>

<!-- Template CSS -->
<script src="{{asset('js/main.js')}}"></script>
@yield('script')
</body>

</html>
