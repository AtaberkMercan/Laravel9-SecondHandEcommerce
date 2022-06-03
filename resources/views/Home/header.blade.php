<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-2 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark" href="{{route('faq')}}">FAQs</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="{{route('contact')}}">Help</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="{{route('contact')}}">Support</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark px-2" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-dark pl-2" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="{{route('home')}}" class="text-decoration-none">
                <h1 class="m-0 diplay-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">2nd</span>Sales</h1>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
            @include('home.messages')
        </div>
        <div class="col-lg-3 col-6 text-right">
            <a href="{{route('myaccount.myprofile')}}" class="btn border">
                <i class="fas fa-user text-primary"></i>
                <span class="badge"></span>
            </a>
            <a href="{{route('myaccount.myreviews')}}" class="btn border">
                <i class="fas fa-heart text-primary"></i>
                <span class="badge"></span>
            </a>
            <a href="{{route('user.shopcart.index')}}" class="btn border">
                <i class="fas fa-shopping-cart text-primary"></i>
                <span class="badge">{{\App\Http\Controllers\ShopcartController::countshopcart()}}</span>
            </a>
        </div>
    </div>
</div>
