@extends('frontend.layouts.app')
@section('title', 'Welcome Page')
@section('body')
{{-- Search section start  --}}
    @include('frontend.layouts.search')
{{-- Search section End  --}}
<div class="container pt-3">
    <div class="row">
        {{-- Tender Section Start --}}
        <div class="col-md-8 col-sm-12">
                @foreach ($tenders as $tender)
                <div class="">
                    @php
                        $is_apply = DB::table('applies')->where('tender_id', $tender->id)->first();
                    @endphp
                    <!-- Start Modal View Tender -->
                    <div class="modal fade" id="viewTender{{$tender->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tender Details Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <ul class="list-inline" style="font-size: 13px;">
                                            <li class="list-inline-item">Tender ID: {{$tender->tenderID}} </li>
                                            {{-- <li class="list-inline-item">Start:{{$tender->created_at}}</li> --}}
                                            <li class="list-inline-item">Deadline :{{$tender->lastDate}}</li>
                                            <li class="list-inline-item" style="font-size: 16px;"> &nbsp; &nbsp; &nbsp;
                                                    3 Days 6 Hours
                                            </li>
                                        </ul>
                                        <div class="">
                                            <span class=""><i class="fa fa-heart"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p> <strong>Catagory : </strong>{{$tender->tenderCategory->name}}</p>
                                    </div>
                                    <div>
                                        <p> <strong>Description: </strong>{{$tender->description}}</p>
                                    </div>
                                    <div class="list-inline">
                                        <span><strong>Security:</strong> {{$tender->tenderSecurity}} | </span>
                                        <span><strong>Budget:</strong> {{$tender->tenderBudget}}</span>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-between align-items-center">
                                    <ul class="list-inline ">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-secondary"> <span class=""><i class="fa fa-map-marker"></i></span> {{ $tender->tenderCountry->name ?? "N/A"}} </a>
                                        </li>
                                        @if (isset($tender->tenderLocation->name))
                                        <li class="list-inline-item">
                                            <a href="#" class="text-secondary"> <span class=""><i class="fa fa-compass"></i></span> |
                                                {{$tender->tenderLocation->name ?? "N/a"}} </a>
                                        </li>
                                        @endif
                                    </ul>

                                    <div class="list-inline">
                                        @auth
                                            @php
                                            $user_is_applyed = DB::table('applies')->where('user_id', auth()->user()->id)->first();
                                            $tender_is_apply = DB::table('applies')->where('tender_id', $tender->id)->where('user_id', auth()->user()->id)->first();
                                            @endphp
                                            <button class="btn btn-secondary btn-sm" data-toggle="modal" data-dismiss="modal">Close</button>
                                            @if ($tender_is_apply)
                                            <button class="btn btn-success btn-sm" data-toggle="modal" disabled>Already Apply</button>
                                            @else
                                                <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#applyTender{{$tender->id}}" data-dismiss="modal">Apply</button>
                                            @endif
                                        @endauth

                                        @guest
                                        <button class="btn btn-secondary btn-sm" data-toggle="modal" data-dismiss="modal">Close</button>
                                        <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#applyTender{{$tender->id}}" data-dismiss="modal">Apply</button>
                                        @endguest

                                        </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    {{-- End  Modal View Tender --}}
                    <!-- Start Modal Apply Tender -->
                    <form action="{{route('apply.confirm')}}" method="post">
                        @csrf
                    <div class="modal fade" id="applyTender{{$tender->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Apply Tender</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <ul class="list-inline" style="font-size: 13px;">
                                            <li class="list-inline-item">Tender ID: {{$tender->tenderID}} </li>
                                            {{-- <li class="list-inline-item">Start:{{$tender->created_at }}</li> --}}
                                            <li class="list-inline-item">Deadline :{{$tender->lastDate}}</li>
                                            <li class="list-inline-item" style="font-size: 16px;"> &nbsp; &nbsp; &nbsp;
                                                3 Days 6 Hours
                                            </li>
                                        </ul>
                                        <div class="">
                                            <span class=""><i class="fa fa-heart"></i></span>
                                        </div>
                                    </div>
                                    <div>
                                        <p> <strong>Catagory : </strong>{{$tender->tenderCategory->name}}</p>
                                    </div>
                                    <div>
                                        <p> <strong>Description: </strong>{{$tender->description}}</p>
                                    </div>
                                    <div class="list-inline">
                                        <span><strong>Security:</strong> {{$tender->tenderSecurity}} | </span>
                                        <span><strong>Budget:</strong> {{$tender->tenderBudget}}</span>
                                    </div>
                                    <hr>
                                    <div class="form-group form-check">
                                        <input type="checkbox" name="agree" value="1" checked class="form-check-input @error('agree') is-invalid @enderror" id="exampleCheck1">
                                        <label class="form-check-label " for="exampleCheck1">I Agree (Trerms & Conditions) </label>
                                        @error('agree')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                        </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-between align-items-center">
                                    <ul class="list-inline ">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-secondary"> <span class=""><i class="fa fa-map-marker"></i></span> {{ $tender->tenderCountry->name ?? "N/A"}} </a>
                                        </li>
                                        @if (isset($tender->tenderLocation->name))
                                        <li class="list-inline-item">
                                            <a href="#" class="text-secondary"> <span class=""><i class="fa fa-compass"></i></span> |
                                                {{$tender->tenderLocation->name ?? "N/a"}} </a>
                                        </li>
                                        @endif
                                    </ul>
                                    <input type="hidden" name="tender_id" value="{{$tender->id}}">
                                    <div class="list-inline">
                                        <a href="#" class="btn btn-secondary btn-sm" data-toggle="modal" data-dismiss="modal">Close</a>
                                        <button type="submit" class="btn btn-secondary btn-sm">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </form>
                    {{-- End  Modal Apply Tender --}}

                    <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <ul class="list-inline" style="font-size: 13px;">
                                        <li class="list-inline-item">Tender ID : {{$tender->tenderID}} </li>
                                        {{-- <li class="list-inline-item">Start : {{ \Carbon\Carbon::parse( $tender->created_at )->format('d-M-y') }}</li> --}}
                                        <li class="list-inline-item">Deadline : {{ \Carbon\Carbon::parse( $tender->lastDate )->format('d-M-y') }}</li>
                                        <li class="list-inline-item" style="font-size: 16px;"> &nbsp; &nbsp; &nbsp;
                                                3 Days 6 Hours
                                        </li>
                                    </ul>
                                    <div class="">
                                        <span class=""><i class="fa fa-heart"></i></span>
                                    </div>
                                </div>
                                <div>
                                    <p> <strong>Description: </strong>{{$tender->description}}</p>
                                </div>
                                <div class="list-inline">
                                    <span><strong>Security:</strong> {{$tender->tenderSecurity}} | </span>
                                    <span><strong>Budget:</strong> {{$tender->tenderBudget}}</span>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <ul class="list-inline ">
                                    <li class="list-inline-item">
                                        <a href="#" class="text-secondary"> <span class=""><i class="fa fa-map-marker"></i></span> {{ $tender->tenderCountry->name ?? "N/A"}} </a>
                                    </li>
                                    @if (isset($tender->tenderLocation->name))
                                    <li class="list-inline-item">
                                        <a href="#" class="text-secondary"> <span class=""><i class="fa fa-compass"></i></span> |
                                            {{$tender->tenderLocation->name ?? "N/a"}} </a>
                                    </li>
                                    @endif
                                </ul>
                                    <div class="list-inline">
                                    @auth
                                        @php
                                        $user_is_applyed = DB::table('applies')->where('user_id', auth()->user()->id)->first();
                                        $tender_is_apply = DB::table('applies')->where('tender_id', $tender->id)->where('user_id', auth()->user()->id)->first();
                                        @endphp
                                        <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#viewTender{{$tender->id}}">View</button>
                                        @if ($tender_is_apply)
                                        <button class="btn btn-success btn-sm" data-toggle="modal" disabled>Already Apply</button>
                                        @else
                                            <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#applyTender{{$tender->id}}">Apply</button>
                                        @endif
                                    @endauth

                                    @guest
                                    <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#viewTender{{$tender->id}}">View</button>
                                    <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#applyTender{{$tender->id}}">Apply</button>
                                    @endguest

                                    </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{$tenders->links()}}


                {{-- Tab Content End --}}
        </div>
        {{-- Tender Section End --}}

        {{-- Sidebar section Start --}}
        @include('frontend.layouts.sidebar')
        {{-- Sidebar section End --}}

        </div>
    </div>


@endsection
