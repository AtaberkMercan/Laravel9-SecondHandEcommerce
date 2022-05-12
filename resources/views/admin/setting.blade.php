
@extends('layouts.adminbase')
@section('title','Settings')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Settings</h4>
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <ul class="nav nav-pills nav-pills-custom" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" href="#pills-health" role="tab" aria-controls="pills-home" aria-selected="true"> General </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-career" role="tab" aria-controls="pills-profile" aria-selected="false"> Smpt-Server </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-music" role="tab" aria-controls="pills-contact" aria-selected="false"> Social Media</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-vibes" role="tab" aria-controls="pills-contact" aria-selected="false"> About us </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-energy" role="tab" aria-controls="pills-contact" aria-selected="false"> Contact Page  </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-references" role="tab" aria-controls="pills-contact" aria-selected="false"> References </a>
                                    </li>
                                </ul>
                                <div class="col-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data" class="forms-sample">
                                                @csrf
                                                <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                <div class="tab-content tab-content-custom-pill" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-health" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input type="text" class="form-control" name="title" id="title" placeholder="title" value="{{$data->title}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2">Keywords</label>
                                            <input type="text" class="form-control" id="keys" value="{{$data->keys}}" name="keys" placeholder="keywords">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Description</label>
                                            <input type="text" class="form-control" value="{{$data->desc}}" name="desc" id="desc" placeholder="Description">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail4">Company</label>
                                            <input type="text" class="form-control" value="{{$data->company}}" name="company" id="company" placeholder="Company">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail5">Adress</label>
                                            <input type="text" class="form-control" value="{{$data->adress}}" name="adress" id="adress" placeholder="Adress">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail6">Phone Number</label>
                                            <input type="text" class="form-control" value="{{$data->phone}}" name="phone" id="phone" placeholder="Phone Number">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail7">E-mail</label>
                                            <input type="text" class="form-control" value="{{$data->email}}" name="email" id="email" placeholder="E-mail">
                                        </div>
                                        <div class="form-group">
                                            <label>Icon</label>
                                            <div class="input-group col-xs-12">
                                                <input type="file" value="{{$data->icon}}" class="form-control file-upload-info" name="icon" placeholder="Upload Icon">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Status</label>
                                            <select class="form-control" name="status" id="status" value="{{$data->status}}" >
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-career" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Smtp-Server</label>
                                            <input type="text" class="form-control" name="smtpserver" id="smtpserver" placeholder="smtpserver" value="{{$data->smtpserver}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2">Smtp-Email</label>
                                            <input type="text" class="form-control" id="smtpemail" value="{{$data->smtpemail}}" name="smtpemail" placeholder="Smtp-Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="ExampleInputPassword4">Smtp-Password</label>
                                            <input type="password" class="form-control" value="{{$data->smtppassword}}" name="smtppassword" id="smtppassword" placeholder="Smtp-Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail4">Smtp-Port</label>
                                            <input type="number" class="form-control" value="{{$data->smtpport}}" name="smtpport" id="smtpport" placeholder="Smtp-Port">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-music" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Fax</label>
                                            <input type="text" class="form-control" name="fax" id="fax" placeholder="Fax" value="{{$data->fax}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail2">Facebook</label>
                                            <input type="text" class="form-control" id="facebook" value="{{$data->smtpemail}}" name="facebook" placeholder="Facebook">
                                        </div>
                                        <div class="form-group">
                                            <label for="ExampleInputPassword4">Twitter</label>
                                            <input type="text" class="form-control" value="{{$data->twitter}}" name="twitter" id="twitter" placeholder="Twitter">
                                        </div>
                                        <div class="form-group">
                                            <label for="ExampleInputPassword4">Instagram</label>
                                            <input type="text" class="form-control" value="{{$data->instagram}}" name="instagram" id="instagram" placeholder="Instagram">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail4">Youtube</label>
                                            <input type="text" class="form-control" value="{{$data->youtube}}" name="youtube" id="youtube" placeholder="Youtube">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-vibes" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">About Us</label>
                                            <textarea class="form-control" id="aboutus" name="aboutus">
                                            {{$data->aboutus}}
                                            </textarea>
                                            <script>
                                                ClassicEditor
                                                    .create(document.querySelector('#aboutus'))
                                                    .then(editor=>{console.log(editor);})
                                                    .catch(error=>{console.error(error);})
                                            </script>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-energy" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Contact Us</label>
                                            <textarea class="form-control" id="contact" name="contact">
                                                {{$data->contact}}
                                           </textarea>
                                            <script>
                                                ClassicEditor
                                                        .create(document.querySelector('#contact'))
                                                    .then(editor=>{console.log(editor);})
                                                    .catch(error=>{console.error(error);})
                                            </script>
                                        </div>
                                   </div>
                                    <div class="tab-pane fade " id="pills-references" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">References</label>
                                            <textarea class="form-control" id="references" name="references">
                                                {{$data->references}}
                                            </textarea>
                                            <script>
                                                ClassicEditor
                                                    .create(document.querySelector('#references'))
                                                    .then(editor=>{console.log(editor);})
                                                    .catch(error=>{console.error(error);})
                                            </script>
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Update Setting</button>
                                        <button class="btn btn-dark">Cancel</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>

</script>


