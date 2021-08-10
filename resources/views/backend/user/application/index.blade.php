@extends('backend.user.app')
@section('body')
<div class="col-12" style="margin:0 auto;">
    <div class="card card-secondary">
        <div class="card-header">
        <h3 class="card-title">Tender Management Table</h3> <br>

        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
                <table class="table table-hover table-bordered text-nowrap mt-3" id="myTable">
                    <thead>
                        <tr>
                          <th scope="col">S.N</th>
                          <th scope="col">Tender ID</th>
                          <th scope="col">Description</th>
                          <th scope="col">Status</th>
                          <th scope="col">Apply Date</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                            @php($serial = 1)
                          @foreach ($applyedTenders as $application)

                            <tr>
                                <th scope="row">{{$serial++}}</th>
                                <td>{{$application->tenderInfo->tenderID}}</td>
                                <td>{{substr($application->tenderInfo->description,0,50)}}....</td>
                                <td>
                                    @if ("0"==$application->seen)
                                        <button class="btn btn-sm btn-warning">Not Seen</button>
                                    @elseif("1"==$application->seen)
                                        <button class="btn btn-sm btn-success">Seen</button>
                                    @endif
                                    @if ("0"==$application->status)
                                        <button class="btn btn-sm btn-warning">Pending</button>
                                    @elseif("1"==$application->status)
                                        <button class="btn btn-sm btn-success">Confirmed</button>
                                    @endif
                                </td>
                                {{-- <td>{{$application->apply_time->diffForHumans}}</td> --}}
                                <td>{{ Carbon\Carbon::parse($application->apply_time)->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('show.tender.details',$application->id) }}" class="btn btn-info btn-sm">View</a>
                                </td>
                            </tr>
                          @endforeach

                      </tbody>
                </table>
        </div>
    </div>
</div>
@endsection
