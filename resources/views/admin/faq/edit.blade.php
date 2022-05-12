
@extends('layouts.adminbase')
@section('title','Edit FAQ:'.$data->title)
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit FAQ</h4>
                        <p class="card-description"> Edit  {{$data->title}} </p>
                        <form role="form" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group" >
                                <label for="exampleInputEmail1">Edit Question</label>
                                <input type="text" class="form-control" name="question" value="{{$data->question}}" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail3">Edit Answer</label>
                                <textarea class="form-control" id="answer" name="answer">
                                    {{$data->answer}}
                                </textarea>
                                <script>
                                    ClassicEditor
                                        .create(document.querySelector('#answer'))
                                        .then(editor=>{console.log(editor);})
                                        .catch(error=>{console.error(error);})
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Edit Status</label>
                                <select class="form-control" name="status">
                                    <option selected> {{$data->status}} </option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary ">Update Data</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

