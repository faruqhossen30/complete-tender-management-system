@extends("backend.admin.app")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Client Informations</h1>
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
        <h3 class="card-title">Client Management Table</h3> <br>

        @auth

        <h1>Just for test</h1>
        @endauth

        @guest
            You are guiest
        @endguest

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


        <table class="table table-hover table-bordered text-nowrap" id="myTable">

            <thead>
            <tr>
                <th>S.N</th>
                <th>Company Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Country</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->companyname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->division}}</td>
                <td>
                <a href="{{url('client/'.$user->id)}}" class="btn btn-primary btn-sm">View</a>
                    <a href="{{url('client/'.$user->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{url('client/'.$user->id)}}" method="post" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="confirm('Sure ? Want to delete company ?')" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
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


