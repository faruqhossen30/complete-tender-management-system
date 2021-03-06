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
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                    <li class="breadcrumb-item active">Tender</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="col-12" style="margin:0 auto;">
    <div class="card card-secondary">
        <div class="card-header">
        <h3 class="card-title">Tender Management Table</h3> <br>

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
                            <th>Tender ID</th>
                            <th>Description</th>
                            <th>Author</th>
                            <th>Create at</th>
                            <th>Deadline</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $serial = 1;
                            @endphp
                        @foreach ($tenders as $tender)
                        <tr>
                            <td>{{$serial++}}</td>
                            <td>{{$tender->tenderID}}</td>
                            <td>{{Str::words($tender->description,3)}}</td>
                            <td>{{$tender->tenderAuthor->name ?? 'N/A'}}</td>
                            <td>{{ Carbon\Carbon::parse($tender->created_at)->format('d M Y'); }}</td>
                            <td>
                                @if (Carbon\Carbon::parse($tender->lastDate)->format('d M Y')!='30 Nov -0001')
                                {{Carbon\Carbon::parse($tender->lastDate)->format('d M Y')}}
                                @endif
                            </td>
                            <td>
                            <a href="{{url('admin/tender/'.$tender->id)}}" class="btn btn-success btn-sm">View</a>
                                <a href="{{url('admin/tender/'.$tender->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{url('admin/tender/'.$tender->id)}}" method="post" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="confirm('Sure ? Want to delete Tender ?')" class="btn btn-danger btn-sm">Delete</button>
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


