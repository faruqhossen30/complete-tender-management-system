@extends("backend.admin.app")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tender Informations</h1>
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
        <h3 class="card-title">Country Management Table</h3> <br>

        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
                {{-- <form action="{{route('location.store')}}" method="POST" class="form-horizontal "> --}}
                <form action="{{route('country.store')}}" method="POST" class="form-horizontal ">
                        @csrf
                        <div class="row">
                            <div class="card-body col-5">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Country</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="country" class="form-control" id="inputEmail3" placeholder="Enter Location">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body col-3">
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-primary">Add Country</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-footer -->
                    </form>

                    <hr>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Location Name</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($countries as $country)
                        <tr>
                            <th scope="row">{{$country->id}}</th>
                            <td>{{$country->name}}</td>
                            <td>
                                <a href="{{url('/country/'.$country->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{url('country/'.$country->id)}}" method="post" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="confirm('Sure ? Want to delete Tender ?')" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                            </tr>
                        @endforeach

                    </tbody>
                  </table>
        </div>
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
    <style>
        .dataTables_length {
            padding: 10px;
        }
        .dataTables_filter{
            padding: 10px;
        }
        .dataTables_info {
            margin-left: 10px;
        }
    </style>
@endpush
@push('js')
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endpush


