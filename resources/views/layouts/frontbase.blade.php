<html>
<head>
    <title>@yield('title')</title>
    <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('assets')}}/js/jquery-1.11.0.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Free Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <script type="text/javascript" src="{{asset('assets')}}/js/move-top.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start menu -->
    <script src="{{asset('assets')}}/js/simpleCart.min.js"> </script>
    <link href="{{asset('assets')}}/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{asset('assets')}}/js/memenu.js"></script>
    <script>$(document).ready(function(){$(".memenu").memenu();});</script>

</head>
<body>
@include('home.header')
@include('home.slider')
@show

@include('home.shoes')

@include('home.footer')

</body>
</html>
