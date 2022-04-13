
@extends('layouts.adminbase')
@section('title','Product List')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Product List</h4>
                        <p class="card-description">List</p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Id</button> </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Category</button> </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Title</button> </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Price</button> </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Quantity</button> </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Image</button> </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Status</button> </th>
                                    <th style="width: 40px"><button type="button" class="btn btn-outline-secondary btn-fw">Edit</button></th>
                                    <th style="width: 40px"><button type="button" class="btn btn-outline-secondary btn-fw">Delete</button></th>
                                    <th style="width: 40px"><button type="button" class="btn btn-outline-secondary btn-fw">Show</button></th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach($data as $rs)
                                <tr>
                                    <td></td>
                                    <td>{{$rs->id}}</td>
                                    <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->price}}</td>
                                    <td>{{$rs->quantity}}</td>
                                    <td>@if($rs->img)
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->img)}}" class="rounded mx-auto d-block">
                                        @endif
                                    </td>
                                    <td>{{$rs->stats}}</td>
                                    <td><a href="{{route('admin.Product.edit',['id'=>$rs->id])}}"><button type="button" class="btn btn-success btn-fw">Edit</button> </a> </td>
                                    <td><a href="{{route('admin.Product.destroy',['id'=>$rs->id])}}"><button type="button" class="btn btn-danger btn-fw" onclick="return confirm('Are you sure to delete this Product?')">Delete</button> </a></td>
                                    <td><a href="{{route('admin.Product.show',['id'=>$rs->id])}}"><button type="button" class="btn btn-primary btn-fw">Show</button></a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="{{route('admin.Product.create')}}"><button type="button" class="btn btn-inverse-success btn-fw">Add Product</button></a>
                </div>

            </div>
        </div>
    </div>
@endsection
