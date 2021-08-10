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
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                    <li class="breadcrumb-item active">Clients</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="col-12" style="margin:0 auto;">
    <div class="card card-secondary">
        <div class="card-header">
        <h3 class="card-title">Client Management Table</h3> <br>

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
                @php($serial = 1)
            @foreach($clients as $client)
            <tr>
                <td>{{$serial++}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->phone}}</td>
                <td>sdfk</td>
                <td>
                    <a href="{{url('admin/client/'.$client->id)}}" class="btn btn-primary btn-sm">View</a>
                    @if ('1'==$client->active)
                        <a href="{{route('change-status',$client->id)}}" class="btn btn-success btn-sm" title="Click for deactivate">Active</a>
                    @else
                        <a href="{{route('change-status',$client->id)}}" class="btn btn-warning btn-sm" title="Click for activate">Deactive</a>

                    @endif



                    {{-- <a href="{{url('client/'.$user->id)}}" class="btn btn-primary btn-sm">View</a>
                    <a href="{{url('client/'.$user->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{url('client/'.$user->id)}}" method="post" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="confirm('Sure ? Want to delete company ?')" class="btn btn-danger btn-sm">Delete</button>
                    </form> --}}
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


