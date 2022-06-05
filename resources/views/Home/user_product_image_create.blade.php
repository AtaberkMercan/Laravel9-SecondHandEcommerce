@extends('layouts.frontbase')
@section('title','Add Image')
@section('sidebar')
    @include('home.sidebar')
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Add Image</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Add Image</p>
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
                <h3>{{$product->title}}</h3>
                <hr>
                <form  role="form" action="{{route('user.image.store',['pid'=>$product->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                        <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" name="img" placeholder="Upload Image">
                            <button type="submit" class="btn btn-primary ">Upload</button>
                        </div>

                    </div>

                </form>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Prdoduct Image Gallery</h4>
                            <p class="card-description">List</p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th> Id Number </th>
                                        <th>Title</th>
                                        <th> Image </th>
                                        <th>Delete</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($images as $rs)
                                        <tr>
                                            <td>{{$rs->id}}</td>
                                            <td>{{$rs->title}}</td>
                                            <td>@if($rs->img)
                                                    <img src="{{\Illuminate\Support\Facades\Storage::url($rs->img)}}" class="rounded mx-auto d-block" height="100" >
                                                @endif
                                            </td>
                                            <td><a href="{{route('user.image.destroy',['pid'=>$product->id,'id'=>$rs->id])}}"><button type="button" class="btn btn-danger btn-fw" onclick="return confirm('Are you sure to delete this category?')">Delete</button> </a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
