@extends("backend.admin.app")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>All Tender Applications</h1>
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
        <h3 class="card-title">Applications List Table</h3> <br>

        </div>
        <!-- /.card-header -->
        <table class="table table-hover table-bordered text-nowrap" id="myTable">
            <thead>
                <tr>
                  <th scope="col">S.N</th>
                  <th scope="col">Client Name</th>
                  <th scope="col">Tender ID</th>
                  <th scope="col">Description</th>
                  <th scope="col">Apply</th>
                  <th scope="col">Auction</th>
                </tr>
              </thead>
              <tbody>
                  @php($serial = 1)

                  @foreach ($clientApplyTenders as $tender)
                    <tr>
                        <th scope="row">{{$serial++}}</th>
                        <td>{{$tender->userInfo->name}}</td>
                        <td>{{$tender->tenderInfo->tenderID}}</td>
                        <td>{{ Str::substr($tender->tenderInfo->description, 0, 40)}}...</td>
                        <td>{{ Carbon\Carbon::parse($tender->apply_time)->diffForHumans() }}</td>
                        <td>
                        <a href="#" class="btn btn-primary btn-sm">View</a>
                        <a href="#" class="btn btn-primary btn-sm">Seen</a>
                        <a href="#" class="btn btn-primary btn-sm">Confirm</a>
                        </td>
                    </tr>
                  @endforeach

              </tbody>
        </table>
        </div>
    </div>
</div>
@endsection
