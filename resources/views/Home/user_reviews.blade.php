@extends('layouts.frontbase')
@section('title','User Reviews')
@section('sidebar')
    @include('home.sidebar')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">User Reviews</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">User Reviews</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-3 col-md-12">
                @include('home.usermenu')
            </div>

            <div class="col-lg-9 col-md-12">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th> Id </th>
                        <th> Product </th>
                        <th> Subject </th>
                        <th> Review </th>
                        <th> Rate </th>
                        <th> Status </th>
                        <th> Date </th>
                    </tr>
                    </thead>
                    <tbody>
                    @include('home.messages')
                    @foreach($datalist as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td> <a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}"target="_blank">
                                    {{$rs->product->title}} </a>
                            </td>
                            <td>{{$rs->subject}}</td>
                            <td>{{$rs->review}}</td>
                            <td>{{$rs->rate}}</td>
                            <td>{{$rs->status}}</td>
                            <td>{{$rs->created_at}}</td>
                            <td><a href="{{route('myaccount.destroyreview',['id'=>$rs->id])}}"><button type="button" class="btn btn-danger btn-fw" onclick="return confirm('Are you sure to delete this Message?')">Delete</button> </a></td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
