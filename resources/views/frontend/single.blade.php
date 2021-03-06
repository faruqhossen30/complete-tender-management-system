@extends('frontend.layouts.app')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                    @if(count($sliders)> 0)
                    <div class="row">
                        <div id="wowslider-container1">
                            <div class="ws_images">
                                @php
                                    $serial = 1;
                                @endphp
                                <ul>
                                    @foreach ($sliders as $slider)
                                        <li>
                                            <img src="{{ asset('public/uploads/placeimages/' . $slider->name) }}"
                                                alt="RIZVIE JEAWLARS" title="{{$place->title}}" id="wows1_{{$slider->id}}" class="img-fluid" style="max-height:140vh; " />
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="ws_bullets">
                                <div>
                                    @php
                                        $nuber = 1;
                                    @endphp

                                    @foreach ($sliders as $slider)
                                    <a href="#" title="{{$slider->name}}"><span><img
                                        src="{{ asset('public/uploads/placeimages/'.$slider->name) }}"
                                        alt="{{$slider->name}}" />{{$nuber++}}</span></a>
                                    @endforeach
                                </div>
                            </div>


                        </div>
                    </div>
                    @else

                    @endif


                    <!-- End WOWSlider.com BODY section -->

                    <div class="row card">
                        <div class="card-body">
                            <h5 class="font-weight-semibold mb-1">

                                <h4 class="text-default">{{ $place->title }}</h4>
                            </h5>

                            <ul class="list-inline list-inline-dotted text-muted mb-3">
                                <li class="list-inline-item"><span class=""><i class="fa fa-map-marker"></i></span> <a
                                        href="#" class="text-muted">{{ $place->location->name }}</a></li>
                            </ul>
                            <hr>

                            {!! $place->content !!}
                        </div>
                    </div>
                        <div class="row my-4">
                            <div class="col-md-6" id="youtubevideo">
                                {{-- {{ strip_tags($place->video_link) }} --}}
                            {!! $place->video_link !!}


                            </div>
                            @if($place->google_map)
                            <div class="col-md-6">
                                <div class="card" id="googlemap">
                                    {!!  $place->google_map !!}
                                </div>
                            </div>
                            @endif
                        </div>

                </div>


        </div>
    </div>
@endsection
@push('script')
    <script type="text/javascript" src="{{ asset('public/engine1/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/engine1/wowslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/engine1/script.js') }}"></script>
@endpush
@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/engine1/style.css') }}" />
    <style>
        #googlemap iframe{
            max-width: 100%;
            max-height: 350px;
        }
        #youtubevideo iframe{
            max-width: 100%;
            max-height: 100%;
        }
    </style>
@endpush
