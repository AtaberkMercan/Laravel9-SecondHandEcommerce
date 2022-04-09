
@extends('layouts.adminbase')
@section('title','Show Category:'.$data->title)
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$data->title}}</h4>
                        <p class="card-description">  <code>DETAILS</code>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                     <th style="width: 30px">Id</th>
                                     <td> {{$data->id}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Title</th>
                                    <td> {{$data->title}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Keywords</th>
                                    <td> {{$data->keys}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Description</th>
                                    <td> {{$data->desc}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Image</th>
                                    <td> {{$data->img}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Status</th>
                                    <td> {{$data->stats}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Created Date</th>
                                    <td> {{$data->created_at}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Update Date</th>
                                    <td> {{$data->updated_at}} </td>
                                </tr>
                            </table>
                            <a href="{{route('admin.Category.edit',['id'=>$data->id])}}"><button type="button" class="btn btn-primary btn-fw">Edit</button></a>
                            <td><a href="{{route('admin.Category.destroy',['id'=>$data->id])}}"><button type="button" class="btn btn-danger btn-fw" onclick="return confirm('Are you sure to delete this category?')">Delete</button> </a></td>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
