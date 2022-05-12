@extends('layouts.frontbase')
@section('title','Frequently Asked Questions | '.$setting->title)
@section('desc',$setting->desc)
@section('keys',$setting->keys)
@section('icon',\Illuminate\Support\Facades\Storage::url($setting->icon))
@section('sidebar')
    @include('home.sidebar')
@endsection
@section('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Frequently Asked Questions</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">About Us</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div id="accordion">
        @foreach($datalist as $rs)
            <div clss="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
            <h3>{{$rs->question}}</h3>
                    </a>
                </div>
                <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion">
                    <div class="card-body">
            <p>{!!$rs->answer!!}</p>
                    </div>
                </div>
        @endforeach
        </div>
    </div>
    <!-- Contact End -->
@endsection
