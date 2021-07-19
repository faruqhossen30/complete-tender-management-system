@extends("backend.admin.app")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Client Details Informations</h1>
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

              <table class="table table-bordered mb-3">
                <thead>
                  <tr>
                    <th style="width: 10px">S.N</th>
                    <th>Title</th>
                    <th>Information</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <td>1.</td>
                    <td>Company</td>
                  <td><strong>{{$user->companyname}}</strong></td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Address</td>
                    <td>No Address Found</td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Email</td>
                    <td><strong>{{$user->email}}</strong></td>
                  </tr>
                  <tr>
                    <td>5.</td>
                    <td>Mobile</td>
                    <td><strong>{{$user->phone}}</strong></td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>Country</td>
                    <td><strong>{{$user->division}}</strong></td>
                  </tr>

                </tbody>
              </table>

              <a href="{{url('client/'.$user->id.'/edit')}}" class="btn btn-primary"><b>Edit</b></a>
              <form action="{{url('client/'.$user->id)}}" method="post" style="display:inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="confirm('Sure ? Want to delete company ?')" class="btn btn-danger">Delete</button>
            </form>
            </div>
            <!-- /.card-body -->
          </div>
      </div>
  </div>
@endsection



