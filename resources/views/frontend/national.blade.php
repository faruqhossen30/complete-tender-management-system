@extends("frontend.index")
@section("fontbody")
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="__t_f_heading">
        <h4 class="font-18">E-Tander/Proposal Search Result</h4>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 table-responsive">
      <table class="table table-striped mt-5 table-border table-hover" id="datatable">
        <thead>
          <tr class="text-white" style="background-color:#164438">
            <th scope="col">Tender_id</th>
            <th scope="col">Description</th>
            <th scope="col">Location</th>
            <th scope="col">Security</th>
            <th scope="col">Tender_Budget</th>
            <th scope="col">Last date & time</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($alltenders as $alltender)
          <tr>
            <th scope="row">{{$alltender->Tender_id}}</th>
            <td>{{$alltender->description}}</td>
            <td>{{$alltender->location}}</td>
            <td>{{$alltender->security_price}}</td>
            <td>{{$alltender->budget_price}}</td>
            <td>{{$alltender->date_time}}</td>
            <td><a style="float:left;margin-right:5px;background-color:#164438;color:white;" href="{{url('cliend')}}" class="btn"> Apply </a></td>
          </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection