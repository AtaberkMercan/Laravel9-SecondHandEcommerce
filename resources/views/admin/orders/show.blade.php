@extends('layouts.adminwindow')
@section('title','Show Comment & Review:'.$data->title)
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Order Detail</h4>
                        <p class="card-description"><code>Show And Update</code>
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
                                        {{$data->user->name}}
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">User Name</th>
                                    <td>
                                        {{$data->user->name}}
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Address</th>
                                    <td> {{$data->address}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Phone</th>
                                    <td> {{$data->phone }} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">E-mail</th>
                                    <td> {{$data->email}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Total</th>
                                    <td> {{$data->total}} </td>
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
                                <form role="form" action="{{route('admin.order.update',['id'=>$data->id])}}"
                                      method="post">
                                    @csrf
                                    <tr>
                                        <th style="width: 30px">Admin's Note</th>
                                        <td><textarea name="note" rows="3" cols="30"> {{$data->note}} </textarea></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Status</th>
                                        <td>
                                            <select name="status">
                                                <option selected> {{$data->status}} </option>
                                                <option>Accepted</option>
                                                <option>Canceled</option>
                                                <option>Shipping</option>
                                                <option>Completed</option>
                                            </select>
                                            <button type="submit" class="btn btn-primary ">Update Order Status</button>
                                </form>
                                </td>
                                </tr>
                            </table>
                            <table class="table table-bordered">
                                @foreach($datalist as $rs)
                                    <form role="form" action="{{route('admin.order.itemupdate',['id'=>$rs->id])}}"
                                          method="post">
                                        @csrf
                                        <tr>
                                            <th style="width: 30px">Image</th>
                                            <td>
                                                @if($rs->product->img)
                                                    <img src="{{Storage::url($rs->product->img)}}" height="30">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 30px">Product</th>
                                            <td>
                                                <a href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}"
                                                   class="align-middle">{{$rs->product->title}}
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 30px">Price</th>
                                            <td>
                                                {{$rs->product->price}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 30px">Quantity</th>
                                            <td> {{$rs->quantity}} </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 30px">Amount</th>
                                            <td> {{$rs->amount }} </td>
                                        </tr>
                                        <tr>
                                            <th style="width: 30px">Status</th>
                                            <td>
                                                <select name="status">
                                                    <option selected> {{$rs->status}} </option>
                                                    <option>Accepted</option>
                                                    <option>Canceled</option>
                                                    <option>Shipping</option>
                                                    <option>Completed</option>
                                                </select>
                                            </td>
                                            </tr>
                                        <tr>
                                            <th style="width: 30px">Note</th>
                                            <td><textarea name="note" rows="3" cols="30"> {{$rs->note}} </textarea></td>
                                        </tr>
                                        <td>
                                            <button type="submit" class="btn btn-primary ">Update</button>                                        </td>
                                        </td>
                                    </form>
                                @endforeach
                            </table>
                            <div class="card border-secondary mb-5">
                                <div class="card-header bg-secondary border-0">
                                    <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-3 pt-1">
                                        <h6 class="font-weight-medium">Subtotal</h6>
                                        <h6 class="font-weight-medium">{{$rs->order->total}}</h6>
                                    </div>
                                </div>
                                <div class="card-footer border-secondary bg-transparent">
                                    <div class="d-flex justify-content-between mt-2">
                                        <h5 class="font-weight-bold">Total</h5>
                                        <h5 class="font-weight-bold">{{$rs->order->total}}</h5>
                                    </div>
                                </div>
                                <td><a href="{{route('admin.order.destroy',['id'=>$data->id])}}">
                                        <button type="button" class="btn btn-danger btn-fw"
                                                onclick="return confirm('Are you sure to delete this category?')">Delete
                                        </button>
                                    </a></td>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
