@extends('layouts.frontbase')
@section('title','Order Products')

@section('sidebar')
    @include('home.sidebar')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Order Products</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Order Products</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <form action="{{route('user.order.store')}}" method="post">
                        @csrf
                    <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Name and Surname</label>
                            <input class="form-control" name="name" value="{{(Auth::user()->name)}}" type="text" placeholder="Name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" name="email" value="{{(Auth::user()->email)}}" type="text" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address </label>
                            <input class="form-control" name="address" value="{{(Auth::user()->address)}}" type="text" placeholder="123 Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" name="phone" value="{{(Auth::user()->phone)}}" type="text" placeholder="+123 456 789">
                        </div>
                    </div>
                </div>
                <h4 class="font-weight-semi-bold mb-4">Payment Details</h4>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Card Name</label>
                        <input class="form-control" name="cardname" value="{{(Auth::user()->name)}}" type="text" placeholder="Card Name">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Card Number</label>
                        <input class="form-control" name="cardnumber" value="" type="number" placeholder="Card Number">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Valid Dates </label>
                        <input class="form-control" name="dates" value="" type="text" placeholder="Valid Dates mm/yy">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Security Number</label>
                        <input class="form-control" name="key" value="" type="text" placeholder="Security Number">
                    </div>
                    <div class="col-md-6 form-group">
                        <input class="form-control" name="total" value="{{$total}}" type="hidden" placeholder="Security Number">
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Place Order</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Products</h5>
                        @foreach($orderlist as $rs)
                        <div class="d-flex justify-content-between">
                            <p>{{$rs->product->title}}</p>
                            <p>${{$rs->product->price}}</p>
                        </div>
                        @endforeach
                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">{{$total}}</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">Free</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">{{$total}}</h5>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- Contact End -->
@endsection

