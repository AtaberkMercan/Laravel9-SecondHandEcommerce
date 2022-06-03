@extends('layouts.frontbase')
@section('title','User Orders')
@section('sidebar')
    @include('home.sidebar')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">User Orders</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">User Orders</p>
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
                <table id="example1" class="table table-bordered ">
                    <thead>
                    <tr>
                        <th> Id </th>
                        <th> Name </th>
                        <th> E-mail </th>
                        <th> Phone </th>
                        <th> Address </th>
                        <th> Total </th>
                        <th> Date </th>
                        <th> Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @include('home.messages')
                    @foreach($datalist as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->name}}</td>
                            <td>{{$rs->email}}</td>
                            <td>{{$rs->phone}}</td>
                            <td>{{$rs->address}}</td>
                            <td>{{$rs->total}} </td>
                            <td>{{$rs->created_at}} </td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('user.order.show',['id'=>$rs->id])}}"><button type="button" class="btn btn-primary btn-fw">Show</button></a></td>
                        </tr>

                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

