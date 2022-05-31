@extends('layouts.frontbase')
@section('title','Edit Product')
@section('sidebar')
    @include('home.sidebar')
@endsection
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Edit Product</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Edit Product</p>
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
                <h4 class="card-title">Edit Product</h4>
                <p class="card-description"> Edit  {{$data->title}} </p>
                <form role="form" action="{{route('user.Product.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleSelectGender">Parent Category</label>
                        <select class="form-control select2" name="category_id">
                            @foreach($datalist as $rs)
                                <option value ="{{$rs->id}}" @if($rs->id==$data->category_id) selected="selected"@endif>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" >
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$data->title}}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Keywords</label>
                        <input type="text" class="form-control" name="keys" value="{{$data->keys}}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Description</label>
                        <input type="text" class="form-control" name="desc" value="{{$data->desc}}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Price</label>
                        <input type="number" class="form-control" name="price" value="{{$data->price}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Quantity</label>
                        <input type="number" class="form-control" name="quantity" value="{{$data->quantity}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Minimum Quantity</label>
                        <input type="number" class="form-control" name="minquantity" value="{{$data->minquantity}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Tax %</label>
                        <input type="number" class="form-control" name="tax" value="{{$data->tax}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Detail Info</label>
                        <textarea class="form-control" id="detail" name="detail">
                                    {{$data->detail}}
                                </textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#detail'))
                                .then(editor=>{console.log(editor);})
                                .catch(error=>{console.error(error);})
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" name="stats">
                            <option selected> {{$data->stats}} </option>
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>File upload</label>
                        <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" name="img" placeholder="Upload Image">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ">Update Data</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
