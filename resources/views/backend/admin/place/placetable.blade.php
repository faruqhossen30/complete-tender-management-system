@extends("backend.admin.app")
@section('body')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Place Informations</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
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
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <table class="table table-hover table-bordered text-nowrap" id="myTable">

                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>title</th>
                            <th>image</th>
                            <th>location</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($serial = 1)
                        @foreach ($places as $place)
                            <tr>
                                <td>{{ $serial++ }}</td>
                                <td>{{ $place->title }}</td>
                                    <td>
                                    <img src = "{{asset('/public/uploads/place/'.$place->image)}}" width="50px" height="50px" alt="image">
                                </td>
                                <td>{{ $place->location->name }}</td>
                                <td>{{ $place->author->name ?? '' }}</td>


                                <td>
                                    <div class="d-flex justify-content-start">
                                        <a href="{{route('place.show',$place->id)}}" class="btn btn-sm btn-info mr-1">view</a>
                                        <a href="{{route('place.edit',$place->id)}}" class="btn btn-sm btn-info mr-1">Edit</a>
                                        <form action="{{ route('place.destroy', $place->id) }}" method="POST"
                                            style="display: inline-flex">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick=" return confirm('Are you  shure to delete?')"
                                                class="btn btn-danger btn-sm"> Delete </button>
                                        </form>
                                    </div>
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
    <link rel="stylesheet" href="{{ asset('public/css/jquery.dataTables.min.css') }}">
    <style>
        .dataTables_length {
            padding: 10px;
        }

        .dataTables_filter {
            padding: 10px;
        }

        .dataTables_info {
            margin-left: 10px;
        }

    </style>
@endpush
@push('js')
    <script src="{{ asset('public/js/jquery.dataTables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endpush
