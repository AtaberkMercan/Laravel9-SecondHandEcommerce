<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
@yield('head')
<body>
@section('header')
    This is the master sidebar.
@show
@section('sidebar')
    This is the master sidebar1.
@show
@section('slider')
    This is the master sidebar.
@show
<div class="container">
    @yield('content')
</div>
    @section('footer')
        Footer.<br>
    @show

</body>
</html>
