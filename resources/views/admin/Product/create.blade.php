
@extends('layouts.adminbase')
@section('title','Add Product')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Product Elements</h4>
                        <p class="card-description"> Add Product </p>
                        <form role="form" action="{{route('admin.Product.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleSelectGender">Parent Product</label>
                                <select class="form-control select2" name="category_id">
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
                                <label for="exampleInputEmail3">Price</label>
                                <input type="number" class="form-control" name="price" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Quantity</label>
                                <input type="number" class="form-control" name="quantity" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Minimum Quantity</label>
                                <input type="number" class="form-control" name="minquantity" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Tax %</label>
                                <input type="number" class="form-control" name="tax" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Detail Info</label>
                                <textarea class="form-control" id="detail" name="detail">
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
