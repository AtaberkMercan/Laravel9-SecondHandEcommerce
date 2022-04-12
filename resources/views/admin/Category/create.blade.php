
@extends('layouts.adminbase')
@section('title','Add Category')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category Elements</h4>
                        <p class="card-description"> Add Category </p>
                        <form role="form" action="{{route('admin.Category.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleSelectGender">Parent Category</label>
                                <select class="form-control select2" name="parent_id">
                                    <option value="0" selected="selected"> Main Category </option>
                                    @foreach($data as $rs)
                                    <option value ="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" >
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Keywords</label>
                                <input type="text" class="form-control" name="keys" placeholder="keys">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Description</label>
                                <input type="text" class="form-control" name="desc" placeholder="desc">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Status</label>
                                <select class="form-control" name="stats">
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
                            <button type="submit" class="btn btn-primary ">Save</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
