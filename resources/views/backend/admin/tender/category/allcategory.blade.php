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
        <h3 class="card-title">Category Management Table</h3> <br>

        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
                @if (session('success'))
                <div class="alert alert-warning alert-dismissible fade show m-3" role="alert">
                <strong>{{session('success')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif


                <form action="{{route('category.store')}}" method="POST" class="form-horizontal ">
                        @csrf
                        <div class="row">
                            <div class="card-body col-5">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Category</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="category" class="form-control" id="inputEmail3" placeholder="Enter Category">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body col-3">
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-primary">Add Category</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-footer -->
                    </form>

                    <hr>
                <table class="table table-bordered" id="myTable">
                    <thead>
                      <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Location Name</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $serial = 1;
                        @endphp
                        @foreach ($categories as $place)
                        <tr>
                            <th scope="row">{{$serial++}}</th>
                            <td>{{$place->name}}</td>
                            <td>
                                <a href="{{route('category.edit', $place->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{route('category.destroy', $place->id)}}" method="post" style="display:inline-block">
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
<link rel="stylesheet" href="{{asset('public/css/jquery.dataTables.min.css')}}">
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
    <script src="{{asset('public/js/jquery.dataTables.min.js')}}"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endpush


