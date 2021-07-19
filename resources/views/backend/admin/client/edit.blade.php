@extends("backend.admin.app")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1> Edit Client Details Informations</h1>
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
  <!-- Profile Image -->
  <div class="row">
      <div class="col">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
              src="{{asset('assets/images/default.png')}}"
                     alt="User profile picture">
              </div>

            <h3 class="profile-username text-center">{{$user->companyname}}</h3>

              <p class="text-muted text-center">House 43, Road 4/A, dhanmondi, Dhaka</p>

              <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">Edit Company Information</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                <form action="{{url('client/'.$user->id)}}" method="POST" class="form-horizontal">
                    @csrf
                    @method('PUT')
                      <div class="card-body">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Company Name: </label>
                          <div class="col-sm-10">
                            <input type="text" name="companyname" value="{{$user->companyname}}" class="form-control" id="inputName" placeholder="Name">
                          </div>
                        </div>
                        <fieldset disabled="disabled">
                                <div class="form-group row">
                                        <label for="inputAddress" class="col-sm-2 col-form-label">Address: </label>
                                        <div class="col-sm-10 ">
                                          <input type="text" class="form-control" id="inputAddress" placeholder="No Address Found !!!">
                                        </div>
                                    </div>
                        </fieldset>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email: </label>
                          <div class="col-sm-10 ">
                            <input type="email" name="email" value="{{$user->email}}" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputMobile" class="col-sm-2 col-form-label">Mobile: </label>
                          <div class="col-sm-10 ">
                            <input type="text" name="phone" value="{{$user->phone}}" class="form-control" id="inputMobile" placeholder="Mobile Number">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inpuCountry" class="col-sm-2 col-form-label">Country: </label>
                          <div class="col-sm-10 ">
                                    <select class="form-control" name="division">
                                        <option value="{{$user->division}}"" selected >{{$user->division}}</option>
                                        <option value="India">Bangladesh</option>
                                        <option value="India">India</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Japan">Japan</option>
                                        <option value="USA">USA</option>
                                      </select>
                          </div>
                        </div>


                      <div class="card-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                      <a href="{{url('/client')}}"  class="btn btn-danger float-right">Cancel</a>
                      </div>
                      <!-- /.card-footer -->
                    </form>
                  </div>


            </div>
            <!-- /.card-body -->
          </div>
      </div>
  </div>
@endsection



