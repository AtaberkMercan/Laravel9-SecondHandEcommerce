
@extends('layouts.adminwindow')
@section('title','User Detail:'.$data->title)
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$data->title}}</h4>
                        <p class="card-description">  <code>User Detail</code>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                     <th style="width: 30px">Id</th>
                                     <td> {{$data->id}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Name</th>
                                    <td>
                                        {{$data->name}}
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">E-Mail</th>
                                    <td> {{$data->email}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Phone</th>
                                    <td> {{$data->phone}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Address</th>
                                    <td> {{$data->address}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Roles</th>
                                     <td> @foreach($data->roles as $role)
                                                   {{$role->name}}
                                             <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}"><button type="button" class="btn btn-inverse-danger btn-icon " onclick="return confirm('Are you sure to delete this role?')">X</button> </a>
                                          @endforeach
                                     </td>
                                <tr>
                                    <th style="width: 30px">Created Date</th>
                                    <td> {{$data->created_at}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Update Date</th>
                                    <td> {{$data->updated_at}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Add Role </th>
                                    <td>
                                        <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <select name="role_id">
                                                @foreach($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->name}} </option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-primary ">Add Role</button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                            <td><a href="{{route('admin.user.destroy',['id'=>$data->id])}}"><button type="button" class="btn btn-danger btn-fw" onclick="return confirm('Are you sure to delete this User?')">Delete</button> </a></td>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
