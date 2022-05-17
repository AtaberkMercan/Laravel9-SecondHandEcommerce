
@extends('layouts.adminwindow')
@section('title','Show Comment & Review:'.$data->title)
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$data->title}}</h4>
                        <p class="card-description">  <code>Comment & Review Messages</code>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                     <th style="width: 30px">Id</th>
                                     <td> {{$data->id}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Product</th>
                                    <td>
                                        {{$data->product->title}}
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">User Name</th>
                                    <td>
                                        {{$data->user->name}}
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Subject</th>
                                    <td> {{$data->subject}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Comment</th>
                                    <td> {{$data->review }} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Rate</th>
                                    <td> {{$data->rate}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Status</th>
                                    <td> {{$data->status}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">IP-Number</th>
                                    <td> {{$data->IP}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Created Date</th>
                                    <td> {{$data->created_at}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Update Date</th>
                                    <td> {{$data->updated_at}} </td>
                                </tr>
                                <tr>

                                    <th style="width: 30px">Admin's Note </th>
                                    <td>
                                        <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <select name="status">
                                                <option selected> {{$data->status}} </option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                            <button type="submit" class="btn btn-primary ">Update Comment</button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                            <td><a href="{{route('admin.comment.destroy',['id'=>$data->id])}}"><button type="button" class="btn btn-danger btn-fw" onclick="return confirm('Are you sure to delete this category?')">Delete</button> </a></td>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
