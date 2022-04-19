@extends('layouts.adminwindow')
@section('title','Image Gallery List')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <h3>{{$product->title}}</h3>
            <hr>
            <form  role="form" action="{{route('admin.image.store',['pid'=>$product->id])}}" method="post" enctype="multipart/form-data">
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
                            <table class="table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th> <button type="button" class="btn btn-dark btn-fw">Id Number</button> </th>
                                    <th> <button type="button" class="btn btn-dark btn-fw">Title</button> </th>
                                    <th> <button type="button" class="btn btn-dark btn-fw">Image</button> </th>
                                    <th><button type="button" class="btn btn-dark btn-fw">Delete</button></th>

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
                                    <td><a href="{{route('admin.image.destroy',['pid'=>$product->id,'id'=>$rs->id])}}"><button type="button" class="btn btn-danger btn-fw" onclick="return confirm('Are you sure to delete this category?')">Delete</button> </a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection

