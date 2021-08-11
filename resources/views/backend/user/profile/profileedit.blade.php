@extends('backend.user.app')
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User Profile Informations</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User Profile</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="col-12" style="margin:0 auto;">
    <div class="card card-secondary">
        <div class="card-header">
        <h3 class="card-title">Profile Management Table</h3> <br>
            @if (session('profileUpdate'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{session('profileUpdate')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form action="{{route('profile.update', $document->user_id)}}" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                @csrf
                <div class="card-body">

                    <div class="form-group row">
                    <label for="logiFile" class="col-sm-2 col-form-label">Company Logo </label>
                    <div class="col-sm-10">
                        <input type="file" name="logo" class="form-control-file @error('logo') is-invalid @enderror" id="logiFile" value="{{ $document->logo }}" required>
                        <img src="{{asset($document->logo)}}" alt="" style="width: 150px; height:150px" class="img-thumbnail">
                        @error('logo')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                  </div>


                  <div class="form-group row">
                    <label for="tradeLicence" class="col-sm-2 col-form-label">Trade Licence No:</label>
                    <div class="col-sm-10">
                      <input type="text" name="trade_licence_no" class="form-control @error('trade_licence_no') is-invalid @enderror" id="tradeLicence" placeholder="Licence No"   value="{{ $document->trade_licence_no }}">

                        @error('trade_licence_no')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                  </div>


                  <div class="form-group row">
                    <label for="pinID" class="col-sm-2 col-form-label">PIN No:</label>
                    <div class="col-sm-10">
                      <input type="text" name="pin_no" class="form-control @error('pin_no') is-invalid @enderror" id="pinID" placeholder="PIN No"
                      value="{{ $document->pin_no }}">
                        @error('pin_no')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="binID" class="col-sm-2 col-form-label">BIN No:</label>
                    <div class="col-sm-10">
                      <input type="text" name="bin_no" class="form-control @error('bin_no') is-invalid @enderror" id="binID" placeholder="BIN No"
                      value="{{ $document->bin_no }}">
                        @error('bin_no')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="nidID" class="col-sm-2 col-form-label">NID No:</label>
                    <div class="col-sm-10">
                      <input type="text" name="nid_no" class="form-control  @error('nid_no') is-invalid @enderror" id="nidID" placeholder="NID No"
                      value="{{ $document->nid_no }}">
                        @error('nid_no')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="exampleFormControlFile1" class="col-sm-2 col-form-label">Trade Licence </label>
                    <div class="col-sm-10">
                        <input type="file" name="trade_licence_img" class="form-control-file @error('trade_licence_img') is-invalid @enderror" id="exampleFormControlFile1">

                        <img src="{{asset($document->trade_licence_img)}}" alt="" style="width: 150px; height:150px" class="img-thumbnail">
                        @error('trade_licence_img')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                  </div>


                  <div class="form-group row">
                    <label for="pinImg" class="col-sm-2 col-form-label">PIN Certificate </label>
                    <div class="col-sm-10">
                        <input type="file" name="pin_img" class="form-control-file @error('pin_img') is-invalid @enderror" id="pinImg">
                        <img src="{{asset($document->pin_img)}}" alt="" style="width: 150px; height:150px" class="img-thumbnail">
                        @error('pin_img')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                  </div>


                  <div class="form-group row">
                    <label for="tradeImg" class="col-sm-2 col-form-label">BIN Certificate </label>
                    <div class="col-sm-10">
                        <input type="file" name="bin_img" class="form-control-file @error('bin_img') is-invalid @enderror" id="tradeImg">
                        <img src="{{asset($document->bin_img)}}" alt="" style="width: 150px; height:150px" class="img-thumbnail">

                        @error('bin_img')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                  </div>


                  <div class="form-group row">
                    <label for="tradeImg" class="col-sm-2 col-form-label">NID Card</label>
                    <div class="col-sm-10">
                        <input type="file" name="nid_img" class="form-control-file @error('nid_img') is-invalid @enderror" id="tradeImg">
                        <img src="{{asset($document->nid_img)}}" alt="" style="width: 150px; height:150px" class="img-thumbnail">
                        @error('nid_img')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                  </div>


                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Update Document</button>
                  <button class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>

        </div>
    </div>
</div>
@endsection
