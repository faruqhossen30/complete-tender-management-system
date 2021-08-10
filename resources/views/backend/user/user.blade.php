    @extends('backend.user.app')
    @section('body')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Welcome - {{auth()->user()->name}}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>Total : {{DB::table('tenders')->get()->count();}}<sup style="font-size: 20px"></sup></h3>

                <p>Tender Uploaded on site</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('tender.all')}}" class="small-box-footer">Find or Search Tender<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                  @php
                      $applyedTenders = App\Models\Tender\Apply::where('user_id', auth()->user()->id)->get()->count();
                  @endphp
                <h3>Applyed:
                    @if ($applyedTenders)
                    {{$applyedTenders}}
                    @else
                        0
                    @endif

                </h3>

                <p>Applyed tender list</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('application')}}" class="small-box-footer">All applyed tender<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                  @php
                      $applyedTenders = App\Models\Tender\Apply::where('user_id', auth()->user()->id)->where('status', 0)->get()->count();
                  @endphp
              <h3>Pending : {{$applyedTenders}}</h3>

                <p>Pending tender list</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{route('application')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
  </div>
</div>
 @endsection
