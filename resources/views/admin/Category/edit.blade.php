
@extends('layouts.adminbase')
@section('title','Edit Category:'.$data->title)
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Category</h4>
                        <p class="card-description"> Edit  {{$data->title}} </p>
                        <form role="form" action="{{route('admin.Category.update',['id'=>$data->id])}}" method="post">
                            @csrf
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
                                <label for="exampleSelectGender">Status</label>
                                <select class="form-control" name="stats">
                                    <option selected> value="{{$data->stats}}" </option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>

                                <div class="input-group col-xs-12">
                                    <input type="file" name="img"  class="custom-file-input">
                                    <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload
                            </button>
                          </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary ">Update Data</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
