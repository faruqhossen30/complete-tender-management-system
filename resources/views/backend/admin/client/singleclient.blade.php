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
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                    <li class="breadcrumb-item active">Client</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
  <!-- Profile Image -->
  <div class="row">
      <div class="col-10 offset-1">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
              src="{{asset('public/images/logo.png')}}"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{$client->name}}</h3>

              <p class="text-muted text-center">{{$client->address}}</p>

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
                  <td><strong>{{$client->name}}</strong></td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>Address</td>
                    <td>No Address Found</td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Email</td>
                    <td><strong>{{$client->email}}</strong></td>
                  </tr>
                  <tr>
                    <td>5.</td>
                    <td>Mobile</td>
                    <td><strong>{{$client->mobile}}</strong></td>
                  </tr>
                  <tr>
                    <td>6.</td>
                    <td>Vendor Type</td>
                    <td><strong>{{$client->vendor}}</strong></td>
                  </tr>
                  <tr>
                  <tr>
                    <td>7.</td>
                    <td>All Document</td>
                    <td><strong><a href="" class="btn btn-success btn-sm">Check Documents</a></strong></td>
                  </tr>
                  <tr>
                    <td>8.</td>
                    <td>Join Date</td>
                    <td><strong>{{$client->created_at}}</strong></td>
                  </tr>

                </tbody>
              </table>

              <a href="{{route('client.index')}}" class="btn btn-success">Client List</a>

            </div>
            <!-- /.card-body -->
          </div>
      </div>
  </div>
@endsection



