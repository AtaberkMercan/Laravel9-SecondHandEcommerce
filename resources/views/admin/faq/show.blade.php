
@extends('layouts.adminbase')
@section('title','Show FAQ:')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <p class="card-description">  <code>DETAILS</code>
                        </p>
                        <div class="table-responsive">
                            <td><a href="{{route('admin.faq.edit',['id'=>$data->id])}}"><button type="button" class="btn btn-primary btn-fw">Edit</button></a></td>
                            <td><a href="{{route('admin.faq.destroy',['id'=>$data->id])}}"><button type="button" class="btn btn-danger btn-fw" onclick="return confirm('Are you sure to delete this category?')">Delete</button> </a></td>
                            <table class="table table-bordered">
                                <tr>
                                     <th style="width: 30px">Id</th>
                                     <td> {{$data->id}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Question</th>
                                    <td> {{$data->question}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Asnwer</th>
                                    <td>{!!$data->answer!!}  </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Status</th>
                                    <td> {{$data->status}} </td>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
