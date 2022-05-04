
@extends('layouts.adminbase')
@section('title','Contact Form Message List')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Message List</h4>
                        <p class="card-description">List</p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Name And Surname</button> </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Phone Number</button> </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">E-Mail</button> </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Subject</button> </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Status</button> </th>
                                    <th style="width: 40px"><button type="button" class="btn btn-outline-secondary btn-fw">Show</button></th>
                                    <th style="width: 40px"><button type="button" class="btn btn-outline-secondary btn-fw">Delete</button></th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs->phone}}</td>
                                    <td>{{$rs->email}}</td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.message.show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><button type="button" class="btn btn-inverse-primary btn-fw">Show</button></a></td>
                                    <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}"><button type="button" class="btn btn-danger btn-fw" onclick="return confirm('Are you sure to delete this Message?')">Delete</button> </a></td>
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
