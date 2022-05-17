<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="desc" content="@yield('desc')">
    <meta name="keys" content="@yield('keys')">
    <meta name="author" content="Ataberk Mercan">
    <link rel="icon" type="image/x-icon" href="@yield('icon')">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="{{asset('assets')}}/img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/rating.css" rel="stylesheet">
</head>
<body>
@include('home.header')
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            @section('sidebar')
            @show
                @section('slider')
                @show
        </div>
    </div>
</div>
@yield('content')
@include("home.footer")
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/lib/easing/easing.min.js"></script>
<script src="{{asset('assets')}}/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/mail/jqBootstrapValidation.min.js"></script>
<script src="{{asset('assets')}}/mail/contact.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>
</body>
</html>
