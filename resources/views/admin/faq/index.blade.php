
@extends('layouts.adminbase')
@section('title','FAQ List')
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">FAQ List</h4>
                        <p class="card-description">List</p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Questions</button> </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Answer</button> </th>
                                    <th> <button type="button" class="btn btn-outline-secondary btn-fw">Status</button> </th>
                                    <th style="width: 40px"><button type="button" class="btn btn-outline-secondary btn-fw">Edit</button></th>
                                    <th style="width: 40px"><button type="button" class="btn btn-outline-secondary btn-fw">Delete</button></th>
                                    <th style="width: 40px"><button type="button" class="btn btn-outline-secondary btn-fw">Show</button></th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->question}}</td>
                                    <td>{!!$rs->answer!!}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}"><button type="button" class="btn btn-success btn-fw">Edit</button> </a> </td>
                                    <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}"><button type="button" class="btn btn-danger btn-fw" onclick="return confirm('Are you sure to delete this FAQ?')">Delete</button> </a></td>
                                    <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}"><button type="button" class="btn btn-primary btn-fw">Show</button></a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="{{route('admin.faq.create')}}"><button type="button" class="btn btn-inverse-success btn-fw">Add Question</button></a>
                </div>

            </div>
        </div>
    </div>
@endsection
