
@extends('layouts.adminbase')
@section('title','Category List')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category List</h4>
                        <p class="card-description">List</p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Id</button> </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Title</button> </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Keywords</button> </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Description</button> </th>
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
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->keys}}</td>
                                    <td>{{$rs->desc}}</td>
                                    <td>{{$rs->img}}</td>
                                    <td>{{$rs->stats}}</td>
                                    <td><a href="/admin/Category/edit/{{$rs->id}}"><button type="button" class="btn btn-success btn-fw">Edit</button> </a> </td>
                                    <td><a href="/admin/Category/destroy/{{$rs->id}}"><button type="button" class="btn btn-danger btn-fw" onclick="return confirm('Are you sure to delete this category?')">Delete</button> </a></td>
                                    <td><a href="/admin/Category/show/{{$rs->id}}"><button type="button" class="btn btn-primary btn-fw">Show</button></a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="/admin/Category/create"><button type="button" class="btn btn-inverse-success btn-fw">Add Category</button></a>
                </div>

            </div>
        </div>
    </div>
@endsection
