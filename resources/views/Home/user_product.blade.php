@extends('layouts.frontbase')
@section('title','User Product')
@section('sidebar')
    @include('home.sidebar')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">User Products</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">User Products</p>
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
                        <th> Category </th>
                        <th> Title </th>
                        <th> Price </th>
                        <th> Quantity </th>
                        <th> Image </th>
                        <th> Image Gallery</th>
                        <th> Status </th>
                    </tr>
                    </thead>
                    <tbody>
                    @include('home.messages')
                    @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->price}}</td>
                            <td>{{$rs->quantity}}</td>
                            <td>@if($rs->img)
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($rs->img)}}" width="100" height="50" class="rounded mx-auto d-block " >
                                @endif
                            </td>
                            <td> <a href="{{route('user.image.index',['pid'=>$rs->id])}}"
                                    onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                    <img src="{{asset('assets')}}/admin/images/carousel/gallery.jpg" width="100" height="50">
                                </a>
                            </td>
                            <td>{{$rs->stats}}</td>
                            <td><a href="{{route('user.Product.edit',['id'=>$rs->id])}}"><button type="button" class="btn btn-success btn-fw">Edit</button> </a> </td>
                            <td><a href="{{route('user.Product.destroy',['id'=>$rs->id])}}"><button type="button" class="btn btn-danger btn-fw" onclick="return confirm('Are you sure to delete this Product?')">Delete</button> </a></td>
                            <td><a href="{{route('user.Product.show',['id'=>$rs->id])}}"><button type="button" class="btn btn-primary btn-fw">Show</button></a></td>
                        </tr>

                    </tbody>
                    @endforeach
                </table>
                <a href="{{route('user.Product.create')}}"><button type="button" class="btn btn-primary btn-fw">Add Product</button></a>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

