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
                <table id="example1" class="table table-bordered">
                    <thead>
                    <tr>
                        <th> # </th>
                        <th> Name </th>
                        <th> Address </th>
                        <th> Phone Number </th>
                        <th> Product_id </th>
                        <th> Price </th>
                        <th> Quantity </th>
                        <th> Amount </th>
                        <th> Note </th>
                        <th> Date</th>
                        <th>Status </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($saleslist as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->name}}</td>
                            <td>{{$rs->address}}</td>
                            <td>{{$rs->phone}}</td>
                            <td>{{$rs->title}}</td>
                            <td>${{$rs->price}}</td>
                            <td>{{$rs->quantity}}</td>
                            <td>${{$rs->amount}}</td>
                            <td>{{$rs->note}}</td>
                            <td>{{$rs->created_at}}</td>
                            <td>{{$rs->status}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

