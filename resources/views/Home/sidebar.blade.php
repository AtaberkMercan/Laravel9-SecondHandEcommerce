@php
$mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
@endphp
        <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
            <h6 class="m-0">Categories</h6>
            <i class="fa fa-angle-down text-dark"></i>
        </a>
        <nav class=" collapse @if(@isset($page)) show @endif position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light  " id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
            <div class="navbar-nav w-100 overflow-hidden" style="height: 410px" style="height: 410px">
                @foreach($mainCategories as $rs)
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown">{{$rs->title}}<i class="fa fa-angle-down float-right mt-1"></i></a>
                    <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            @if(count($rs->children))
                                @include('home.categorytree',['children'=>$rs->children])
                            @endif
                    </div>
                </div>
                @endforeach
            </div>
        </nav>

    </div>
    <div class="col-lg-9">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
            <a href="" class="text-decoration-none d-block d-lg-none">
                <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">User Profile</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{route('userprofile')}}" class="nav-item nav-link">User Panel</a>
                        </div>
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{route('about')}}" class="nav-item nav-link">About Us</a>
                        <a href="{{route('contact')}}" class="nav-item nav-link">Contact Us</a>
                        <a href="{{route('references')}}" class="nav-item nav-link">References</a>
                        <a href="{{route('faq')}}" class="nav-item nav-link">FAQ</a>
                    </div>
                </div>
                @guest
                    <div class="navbar-nav ml-auto py-0">
                        <a href="/loginuser" class="nav-item nav-link">Login</a>
                        <a href="/registeruser" class="nav-item nav-link">Register</a>
                    </div>
                @endguest
                @auth
                <div class="navbar-nav ml-auto py-0">
                    <a href="/userprofile" class="nav-item nav-link">{{Auth::user()->name}}</a>
                    <a href="/logoutuser" class="nav-item nav-link">Logout</a>
                </div>
                @endauth
            </div>
        </nav>

