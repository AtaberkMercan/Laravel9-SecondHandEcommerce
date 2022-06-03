@extends('layouts.frontbase')
@section('title','Order Items')
@section('sidebar')
    @include('home.sidebar')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Order Items</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Order Items</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        @include('home.messages')
        <div class="row px-xl-5">
            <div class="col-lg-3 col-md-12">
                @include('home.usermenu')
            </div>
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Note</th>
                    </tr>
                    </thead>
                    <tbody class="align-middle">
                    @php
                    $total=0;
                    @endphp
                    @foreach($datalist as $rs)
                    <tr>
                        <td>
                            @if($rs->product->img)
                                <img src="{{Storage::url($rs->product->img)}}" height="30">
                            @endif
                        </td>
                        <td> <a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}"
                            class="align-middle">{{$rs->product->title}}
                            </a>
                        </td>
                        <td class="align-middle">{{$rs->product->price}}</td>
                        <td class="align-middle">
                            {{$rs->quantity}}
                        </td>
                        <td class="align-middle">{{$rs->amount}}</td>
                        <td class="align-middle">{{$rs->status}}</td>
                        <td class="align-middle">{{$rs->note}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">{{$rs->order->total}}</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">{{$rs->order->total}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

