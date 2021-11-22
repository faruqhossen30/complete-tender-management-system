@extends('frontend.layouts.app')
@section('body')
<div class="container my-4">

<div class="col-md-12" style="display:flex">

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-img-actions mb-3">
                    <img class="card-img img-fluid" src="{{asset('/public/img/LogoPresentation.jpg')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="blog_single.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                            <i class="icon-link"></i>
                        </a>
                    </div>
                </div>

                <h5 class="font-weight-semibold mb-1">
                    <a href="#" class="text-default">Blog post layout #3 with image</a>
                </h5>

                <ul class="list-inline list-inline-dotted text-muted mb-3">
                    <li class="list-inline-item"> <a href="#" class="text-muted">Location</a></li>
                </ul>

                When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.
            </div>

            <div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">
                <ul class="list-inline list-inline-condensed mb-3 mb-sm-0">
                    {{-- <li class="list-inline-item"><a href="#"><span class="badge bg-teal-300">Image</span></a></li>
                    <li class="list-inline-item"><a href="#"><span class="badge bg-teal-300">Blog</span></a></li>
                    <li class="list-inline-item"><a href="#"><span class="badge bg-teal-300">Post</span></a></li> --}}
                </ul>

                <a href="{{route('single')}}" class="btn cwl-active text-white">Read more <i class="icon-arrow-right14 ml-2"></i></a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-img-actions mb-3">
                    <img class="card-img img-fluid" src="{{asset('/public/img/LogoPresentation.jpg')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="blog_single.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                            <i class="icon-link"></i>
                        </a>
                    </div>
                </div>

                <h5 class="font-weight-semibold mb-1">
                    <a href="#" class="text-default">Blog post layout #3 with image</a>
                </h5>

                <ul class="list-inline list-inline-dotted text-muted mb-3">
                    <li class="list-inline-item"> <a href="#" class="text-muted">Location</a></li>
                </ul>

                When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.
            </div>

            <div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">
                <ul class="list-inline list-inline-condensed mb-3 mb-sm-0">
                    {{-- <li class="list-inline-item"><a href="#"><span class="badge bg-teal-300">Image</span></a></li>
                    <li class="list-inline-item"><a href="#"><span class="badge bg-teal-300">Blog</span></a></li>
                    <li class="list-inline-item"><a href="#"><span class="badge bg-teal-300">Post</span></a></li> --}}
                </ul>

                <a href="{{route('single')}}" class="btn cwl-active text-white">Read more <i class="icon-arrow-right14 ml-2"></i></a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="card-img-actions mb-3">
                    <img class="card-img img-fluid" src="{{asset('/public/img/LogoPresentation.jpg')}}" alt="">
                    <div class="card-img-actions-overlay card-img">
                        <a href="blog_single.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                            <i class="icon-link"></i>
                        </a>
                    </div>
                </div>

                <h5 class="font-weight-semibold mb-1">
                    <a href="#" class="text-default">Blog post layout #3 with image</a>
                </h5>

                <ul class="list-inline list-inline-dotted text-muted mb-3">
                    <li class="list-inline-item"> <a href="#" class="text-muted">Location</a></li>
                </ul>

                When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.
            </div>

            <div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">
                <ul class="list-inline list-inline-condensed mb-3 mb-sm-0">
                    {{-- <li class="list-inline-item"><a href="#"><span class="badge bg-teal-300">Image</span></a></li>
                    <li class="list-inline-item"><a href="#"><span class="badge bg-teal-300">Blog</span></a></li>
                    <li class="list-inline-item"><a href="#"><span class="badge bg-teal-300">Post</span></a></li> --}}
                </ul>

                <a href="{{route('single')}}" class="btn cwl-active text-white">Read more <i class="icon-arrow-right14 ml-2"></i></a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
