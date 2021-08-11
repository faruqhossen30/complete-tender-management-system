@extends('backend.user.app')
 @section('body')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="{{$profile?asset($profile->logo):asset('img/logo.png')}}"
                         alt="Company Logo">
                  </div>

                <h3 class="profile-username text-center">{{$user->name}}</h3>

                  <p class="text-muted text-center">{{$user->address ?? "No Address found"}}</p>
                </div>

                <div class="card-body">
                    <strong><i class="fas fa-book mr-1"></i> Email</strong>
                    <p class="text-muted">
                            {{$user->email}}
                    </p>
                    <hr>

                    <strong><i class="fas fa-phone-alt mr-1"></i> Mobile</strong>
                    <p class="text-muted">{{$user->address ?? "Mobile No not found !"}} </p>
                    <hr>

                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                    <p class="text-muted">{{$user->mobile ?? "No address found!"}} </p>
                    <hr>

                    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                    <p class="text-muted">
                      <span class="tag tag-danger">UI Design</span>
                      <span class="tag tag-success">Coding</span>
                      <span class="tag tag-info">Javascript</span>
                      <span class="tag tag-warning">PHP</span>
                      <span class="tag tag-primary">Node.js</span>
                    </p>

                    <hr>

                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                  </div>





                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2 bg-primary">
                  <h5>Documents</h5>
                </div><!-- /.card-header -->
                <div class="card-body">

                    @if ($profile)
                    <div class="row">
                            <div class="col-6">
                                <div class="card" >
                                    <img style="height: 250px;" src="{{asset($profile->trade_licence_img)}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Trade Licence No: {{$profile->trade_licence_no}}</h5>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-6">
                                <div class="card" >
                                    <img style="height: 250px;" src="{{asset($profile->pin_img)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">PIN No: {{$profile->pin_no}}</h5>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-6">
                                <div class="card" >
                                    <img style="height: 250px;" src="{{asset($profile->bin_img)}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">BIN No: {{$profile->bin_no}}</h5>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-6">
                                <div class="card" >
                                    <img style="height: 250px;" src="{{asset($profile->nid_img)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">NID No: {{$profile->nid_no}}</h5>
                                    </div>
                                </div>
                            </div>
                    </div>
                    @else
                    <h3>Your Profile is not completed </h3>
                    <p class="text-secondary">Please Update your profile for apply tender </p>
                <a href="{{route('profile.upload')}}" class="btn btn-primary">Update Profile</a>
                    @endif




                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
 @endsection
