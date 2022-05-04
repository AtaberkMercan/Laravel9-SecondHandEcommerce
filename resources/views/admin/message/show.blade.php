
@extends('layouts.adminwindow')
@section('title','Show Message:'.$data->title)
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$data->title}}</h4>
                        <p class="card-description">  <code>Contact Us Form  Messages</code>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                     <th style="width: 30px">Id</th>
                                     <td> {{$data->id}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Name & Surname</th>
                                    <td>
                                        {{$data->name}}
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Phone Number</th>
                                    <td> {{$data->phone}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">E-Mail</th>
                                    <td> {{$data->email}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Subject</th>
                                    <td> {{$data->subject}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Message</th>
                                    <td> {{$data->message}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">IP-Number</th>
                                    <td> {{$data->ip}} </td>
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
                                <tr>

                                    <th style="width: 30px">Admin's Note </th>
                                    <td>
                                        <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <textarea class="form-control" id="note" name="note">{{$data->note}}</textarea>
                                            <button type="submit" class="btn btn-primary ">Update Note</button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                            <td><a href="{{route('admin.message.destroy',['id'=>$data->id])}}"><button type="button" class="btn btn-danger btn-fw" onclick="return confirm('Are you sure to delete this category?')">Delete</button> </a></td>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
