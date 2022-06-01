@extends('layouts.frontbase')
@section('title','My Shopcart')
@section('sidebar')
    @include('home.sidebar')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">My Shopcart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">My Shopcart</p>
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
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                    </thead>
                    <tbody class="align-middle">
                    @php
                    $total=0;
                    @endphp
                    @foreach($data as $rs)
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
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <form action="{{route('user.shopcart.update',['id'=>$rs->id])}}" method="post">
                                    @csrf
                                <input  name="quantity"  type="number" value="{{$rs->quantity}}" min="1" max="{{$rs->product->quantity}}" onchange="this.form.submit()">
                                </form>
                            </div>
                        </td>
                        <td class="align-middle">{{$rs->quantity*$rs->product->price}}</td>
                        <td><a href="{{route('user.shopcart.destroy',['id'=>$rs->id])}}" class="align-middle"><button class="btn btn-sm btn-primary" onclick="return confirm('Are you sure to delete this Message?')"><i class="fa fa-times"></i></button></a></td>
                    </tr>
                    @php
                        $total+=$rs->product->price*$rs->quantity;
                    @endphp
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
                        <button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

