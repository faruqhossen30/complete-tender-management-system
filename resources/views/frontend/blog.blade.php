@extends('frontend.layouts.app')
@section('body')
    <div class="container">

        <div class="col-md-12">
            <div class="row">
                @foreach ($places as $place)
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-img-actions mb-3">
                                    <img src="{{ asset('/public/uploads/place/' . $place->image) }}"
                                    class="img-thumbnail"  alt="">
                                    <div class="card-img-actions-overlay card-img">
                                        <a href="blog_single.html"
                                            class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                            <i class="icon-link"></i>
                                        </a>
                                    </div>
                                </div>


                                <h5 class="font-weight-semibold mb-1">
                                    <a href="{{route('singleplace', $place->id)}}" class="text-default">{{$place->title}}</a>
                                </h5>

                                <ul class="list-inline list-inline-dotted text-muted mb-3">
                                    <li class="list-inline-item"><span class=""><i class="fa fa-map-marker"></i></span> <a href="#" class="text-muted">{{$place->location->name}}</a></li>
                                </ul>
                                <hr>

                                <p>{!! Str::substr($place->content,0,200)  !!}</p>
                            </div>

                            <div
                                class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">

                                <a href="{{ route('singleplace',$place->id) }}" class="btn cwl-active text-white">Read more <i
                                        class="icon-arrow-right14 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="my-3">
                {{ $places->appends($_GET)->links() }}
            </div>
        </div>
    </div>

@endsection
