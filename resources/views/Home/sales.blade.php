@extends('layouts.frontbase')
@section('title','My Sales')
@section('sidebar')
    @include('home.sidebar')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">My Sales</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">My Sales</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-1">
            <div class="col-lg-2 col-md-12">
                @include('home.usermenu')
            </div>
            <div class="col-lg-9 col-md-12">

            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

