@extends("backend.admin.app")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tender Details Informations</h1>
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
                    <td>Tender ID</td>
                    <td><strong> {{$tender->tenderID}}</strong></td>
                  </tr>

                    <tr>
                    <td>2.</td>
                    <td>Tender Type</td>
                    {{-- <td><strong> {{$tender->tender_type_id}}</strong></td> --}}
                    <td><strong> {{$tender->tenderType->name ?? "N/A"}}</strong></td>
                  </tr>

                  <tr>
                    <td>3.</td>
                    <td>Tender Catagory</td>
                    <td><strong>{{$tender->tenderCategory->name}}</strong></td>
                  </tr>

                  <tr>
                    <td>5.</td>
                    <td>Deparment</td>
                    <td><strong>{{$tender->tenderDepartment->name}}</strong></td>
                  </tr>

                  <tr>
                    <td>5.</td>
                    <td>Country</td>
                    <td><strong>{{$tender->tenderCountry->name ?? "N/A"}}</strong></td>
                  </tr>

                  <tr>
                    <td>5.</td>
                    <td>Location</td>
                    <td><strong>{{$tender->tenderLocation->name ?? "N/A"}}</strong></td>
                  </tr>
                    <tr>
                    <td>4.</td>
                    <td>Description</td>
                    <td><p>{{$tender->description}}</p></td>
                  </tr>
                  <tr>
                    <td>6.</td>
                    <td>Secyrity Price</td>
                    <td><strong>{{$tender->tenderSecurity}}</strong></td>
                  </tr>

                  <tr>
                    <td>7.</td>
                    <td>Budget Price</td>
                    <td><strong>{{$tender->tenderBudget}}</strong></td>
                  </tr>

                  <tr>
                    <td>8.</td>
                    <td>Last Date</td>
                    <td><strong>{{$tender->lastDate}}</strong></td>
                  </tr>

                </tbody>
              </table>

              <a href="{{url('admin/tender/'.$tender->id.'/edit')}}" class="btn btn-primary"><b>Edit</b></a>
              <form action="{{url('admin/tender/'.$tender->id)}}" method="post" style="display:inline-block">
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



