@extends('frontend.layouts.app')
@section('title', 'Welcome Page')
@section('body')
@include('frontend.layouts.slider')
<div class="container-fluid">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="row mt-3">
                    <div class="latest-heading ml-3">
                        <h2>Recommended Tenders</h2>
                        <p class="text-secondary">Select Your Tender, Apply Now.</p>
                    </div>
                    <ul class="nav nav-pills mt-2 ml-5 mb-2">
                        <li class="nav-item">
                            <a class="nav-link btn-sm active" href="#national" data-toggle="tab">National</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-sm" href="#international" data-toggle="tab">International</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    {{-- Tab Content Start --}}
                    <div class="tab-pane active" id="national">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <ul class="list-inline" style="font-size: 13px;">
                                        <li class="list-inline-item">Tender ID: 3434234</li>
                                        <li class="list-inline-item">Start: 12 July 21</li>
                                        <li class="list-inline-item">Last Date:</li>
                                        <li class="list-inline-item" style="font-size: 16px;"> &nbsp; &nbsp; &nbsp; 7 Months ago
                                        </li>
                                    </ul>
                                    <div class="">
                                        <span class=""><i class="fa fa-heart"></i></span>
                                    </div>
                                </div>
                                <div>
                                    <p> <strong>Description:</strong> Bank protective work along the Right bank of Kushiyara river at Manikpur from Km 14.900 to Km 15.200= 300m, at Rarai from Km 13.800 to Km 14.000= 200m, at Senapatirchak from Km 12.950 to Km 13.250= 300m Total 800m in c/w </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <ul class="list-inline ">
                                    <li class="list-inline-item">
                                        <a href="#" class="text-secondary"> <span class=""><i class="fa fa-map-marker"></i></span> Bangladesh | </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="text-secondary"> <span class=""><i class="fa fa-compass"></i></span> Bangladesh</a>
                                    </li>
                                  </ul>
                                  <div class="list-inline">
                                    <a href="#" class="btn btn-secondary btn-sm">View</a>
                                    <a href="#" class="btn btn-secondary btn-sm">Apply</a>
                                  </div>
                            </div>
                        </div>



                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <ul class="list-inline" style="font-size: 13px;">
                                        <li class="list-inline-item">Tender ID: 3434234</li>
                                        <li class="list-inline-item">Start: 12 July 21</li>
                                        <li class="list-inline-item">Last Date:</li>
                                        <li class="list-inline-item" style="font-size: 16px;"> &nbsp; &nbsp; &nbsp; 7 Months ago
                                        </li>
                                    </ul>
                                    <div class="">
                                        <span class=""><i class="fa fa-heart"></i></span>
                                    </div>
                                </div>
                                <div>
                                    <p> <strong>Description:</strong> Bank protective work along the Right bank of Kushiyara river at Manikpur from Km 14.900 to Km 15.200= 300m, at Rarai from Km 13.800 to Km 14.000= 200m, at Senapatirchak from Km 12.950 to Km 13.250= 300m Total 800m in c/w </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <ul class="list-inline ">
                                    <li class="list-inline-item">
                                        <a href="#" class="text-secondary"> <span class=""><i class="fa fa-map-marker"></i></span> Bangladesh | </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="text-secondary"> <span class=""><i class="fa fa-compass"></i></span> Bangladesh</a>
                                    </li>
                                  </ul>
                                  <div class="list-inline">
                                    <a href="#" class="btn btn-secondary btn-sm">View</a>
                                    <a href="#" class="btn btn-secondary btn-sm">Apply</a>
                                  </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <ul class="list-inline" style="font-size: 13px;">
                                        <li class="list-inline-item">Tender ID: 3434234</li>
                                        <li class="list-inline-item">Start: 12 July 21</li>
                                        <li class="list-inline-item">Last Date:</li>
                                        <li class="list-inline-item" style="font-size: 16px;"> &nbsp; &nbsp; &nbsp; 7 Months ago
                                        </li>
                                    </ul>
                                    <div class="">
                                        <span class=""><i class="fa fa-heart"></i></span>
                                    </div>
                                </div>
                                <div>
                                    <p> <strong>Description:</strong> Bank protective work along the Right bank of Kushiyara river at Manikpur from Km 14.900 to Km 15.200= 300m, at Rarai from Km 13.800 to Km 14.000= 200m, at Senapatirchak from Km 12.950 to Km 13.250= 300m Total 800m in c/w </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <ul class="list-inline ">
                                    <li class="list-inline-item">
                                        <a href="#" class="text-secondary"> <span class=""><i class="fa fa-map-marker"></i></span> Bangladesh | </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="text-secondary"> <span class=""><i class="fa fa-compass"></i></span> Bangladesh</a>
                                    </li>
                                  </ul>
                                  <div class="list-inline">
                                    <a href="#" class="btn btn-secondary btn-sm">View</a>
                                    <a href="#" class="btn btn-secondary btn-sm">Apply</a>
                                  </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <ul class="list-inline" style="font-size: 13px;">
                                        <li class="list-inline-item">Tender ID: 3434234</li>
                                        <li class="list-inline-item">Start: 12 July 21</li>
                                        <li class="list-inline-item">Last Date:</li>
                                        <li class="list-inline-item" style="font-size: 16px;"> &nbsp; &nbsp; &nbsp; 7 Months ago
                                        </li>
                                    </ul>
                                    <div class="">
                                        <span class=""><i class="fa fa-heart"></i></span>
                                    </div>
                                </div>
                                <div>
                                    <p> <strong>Description:</strong> Bank protective work along the Right bank of Kushiyara river at Manikpur from Km 14.900 to Km 15.200= 300m, at Rarai from Km 13.800 to Km 14.000= 200m, at Senapatirchak from Km 12.950 to Km 13.250= 300m Total 800m in c/w </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <ul class="list-inline ">
                                    <li class="list-inline-item">
                                        <a href="#" class="text-secondary"> <span class=""><i class="fa fa-map-marker"></i></span> Bangladesh | </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="text-secondary"> <span class=""><i class="fa fa-compass"></i></span> Bangladesh</a>
                                    </li>
                                  </ul>
                                  <div class="list-inline">
                                    <a href="#" class="btn btn-secondary btn-sm">View</a>
                                    <a href="#" class="btn btn-secondary btn-sm">Apply</a>
                                  </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <ul class="list-inline" style="font-size: 13px;">
                                        <li class="list-inline-item">Tender ID: 3434234</li>
                                        <li class="list-inline-item">Start: 12 July 21</li>
                                        <li class="list-inline-item">Last Date:</li>
                                        <li class="list-inline-item" style="font-size: 16px;"> &nbsp; &nbsp; &nbsp; 7 Months ago
                                        </li>
                                    </ul>
                                    <div class="">
                                        <span class=""><i class="fa fa-heart"></i></span>
                                    </div>
                                </div>
                                <div>
                                    <p> <strong>Description:</strong> Bank protective work along the Right bank of Kushiyara river at Manikpur from Km 14.900 to Km 15.200= 300m, at Rarai from Km 13.800 to Km 14.000= 200m, at Senapatirchak from Km 12.950 to Km 13.250= 300m Total 800m in c/w </p>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <ul class="list-inline ">
                                    <li class="list-inline-item">
                                        <a href="#" class="text-secondary"> <span class=""><i class="fa fa-map-marker"></i></span> Bangladesh | </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="text-secondary"> <span class=""><i class="fa fa-compass"></i></span> Bangladesh</a>
                                    </li>
                                  </ul>
                                  <div class="list-inline">
                                    <a href="#" class="btn btn-secondary btn-sm">View</a>
                                    <a href="#" class="btn btn-secondary btn-sm">Apply</a>
                                  </div>
                            </div>
                        </div>



                    </div>
                    {{-- Tab Content End --}}
                    <div class="tab-pane" id="international">
                        <p>International ipsum dolor sit, amet consectetur adipisicing elit. Mollitia consectetur, in tempore voluptatibus aliquid inventore debitis. Amet aut quas optio.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-sm-none d-md-block">
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <h4 class="text-secondary">Tender Catagories</h4>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#" class="text-dark">
                            <span><i class="fa fa-globe" aria-hidden="true"></i></span> Dapibus ac facilisis in
                        </a>
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#" class="text-dark">
                            <span><i class="fa fa-globe" aria-hidden="true"></i></span> Dapibus ac facilisis in
                        </a>
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#" class="text-dark">
                            <span><i class="fa fa-globe" aria-hidden="true"></i></span> Dapibus ac facilisis in
                        </a>
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#" class="text-dark">
                            <span><i class="fa fa-globe" aria-hidden="true"></i></span> Dapibus ac facilisis in
                        </a>
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#" class="text-dark">
                            <span><i class="fa fa-globe" aria-hidden="true"></i></span> Dapibus ac facilisis in
                        </a>
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>


                </ul>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <h4 class="text-secondary">Featured Tenders</h4>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#" class="text-dark">
                            <span><i class="fa fa-globe" aria-hidden="true"></i></span> Dapibus ac facilisis in
                        </a>
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#" class="text-dark">
                            <span><i class="fa fa-globe" aria-hidden="true"></i></span> Dapibus ac facilisis in
                        </a>
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#" class="text-dark">
                            <span><i class="fa fa-globe" aria-hidden="true"></i></span> Dapibus ac facilisis in
                        </a>
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#" class="text-dark">
                            <span><i class="fa fa-globe" aria-hidden="true"></i></span> Dapibus ac facilisis in
                        </a>
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#" class="text-dark">
                            <span><i class="fa fa-globe" aria-hidden="true"></i></span> Dapibus ac facilisis in
                        </a>
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>


                </ul>
            </div>




        </div>
    </div>
</div>


@endsection
