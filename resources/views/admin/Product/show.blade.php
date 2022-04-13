
@extends('layouts.adminbase')
@section('title','Show Product:'.$data->title)
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
                            <td><a href="{{route('admin.Product.edit',['id'=>$data->id])}}"><button type="button" class="btn btn-primary btn-fw">Edit</button></a></td>
                            <td><a href="{{route('admin.Product.destroy',['id'=>$data->id])}}"><button type="button" class="btn btn-danger btn-fw" onclick="return confirm('Are you sure to delete this category?')">Delete</button> </a></td>
                            <table class="table table-bordered">
                                <tr>
                                     <th style="width: 30px">Id</th>
                                     <td> {{$data->id}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Category</th>
                                    <td>
                                        {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title)}}

                                    </td>
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
                                    <th style="width: 30px">Price</th>
                                    <td> {{$data->price}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Quantity</th>
                                    <td> {{$data->quantity}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Minimum Quantity</th>
                                    <td> {{$data->minquantity}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Tax %</th>
                                    <td> {{$data->tax}} </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px">Detail Info</th>
                                    <td>{{$data->detail}}  </td>
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
                            <tr>
                                <th style="width: 30px">Image</th>
                            <td>@if($data->img)
                                    <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel owl-loaded owl-drag" >
                                        <div class="owl-stage-outer"><div class="owl-stage" ><div class="owl-item cloned" ><div class="item">
                                                        <img src="{{\Illuminate\Support\Facades\Storage::url($data->img)}}" alt="">
                                                    </div></div>
                                @endif
                            </td>
                            </tr>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
