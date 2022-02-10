@extends('frontend.layouts.app')
@section('body')
    <div class="container">
        <div class="col-md-12">
            <div>
                <div id="wowslider-container1">
                    <div class="ws_images">
                        <ul>
                            <li>
                                <img src="{{ asset('public/data1/images/rizvie_jeawlars.jpg') }}" alt="RIZVIE JEAWLARS"
                                    title="RIZVIE JEAWLARS" id="wows1_0" />
                            </li>
                            <li>
                                <img src="{{ asset('public/data1/images/samsung.jpg') }}" alt="SAMSUNG" title="SAMSUNG"
                                    id="wows1_1" />
                            </li>
                            <li>
                                <img src="{{ asset('public/data1/images/screenshot_1.png') }}" alt="Screenshot_1"
                                    title="Screenshot_1" id="wows1_2" />
                            </li>
                            <li>
                                <img src="{{ asset('public/data1/images/screenshot_2.png') }}" alt="Screenshot_2"
                                    title="Screenshot_2" id="wows1_3" />
                            </li>
                            <li>
                                <img src="{{ asset('public/data1/images/screenshot_3.png') }}" alt="Screenshot_3"
                                    title="Screenshot_3" id="wows1_4" />
                            </li>
                            <li>
                                <a href="http://wowslider.net"><img
                                        src="{{ asset('public/data1/images/screenshot_4.png') }}" alt="css slideshow"
                                        title="Screenshot_4" id="wows1_5" /></a>
                            </li>
                            <li>
                                <img src="{{ asset('public/data1/images/screenshot_5.png') }}" alt="Screenshot_5"
                                    title="Screenshot_5" id="wows1_6" />
                            </li>
                        </ul>
                    </div>
                    <div class="ws_bullets">
                        <div>
                            <a href="#" title="RIZVIE JEAWLARS"><span><img
                                        src="{{ asset('public/data1/tooltips/rizvie_jeawlars.jpg') }}"
                                        alt="RIZVIE JEAWLARS" />1</span></a>
                            <a href="#" title="SAMSUNG"><span><img src="{{ asset('public/data1/tooltips/samsung.jpg') }}"
                                        alt="SAMSUNG" />2</span></a>
                            <a href="#" title="Screenshot_1"><span><img
                                        src="{{ asset('public/data1/tooltips/screenshot_1.png') }}"
                                        alt="Screenshot_1" />3</span></a>
                            <a href="#" title="Screenshot_2"><span><img
                                        src="{{ asset('public/data1/tooltips/screenshot_2.png') }}"
                                        alt="Screenshot_2" />4</span></a>
                            <a href="#" title="Screenshot_3"><span><img
                                        src="{{ asset('public/data1/tooltips/screenshot_3.png') }}"
                                        alt="Screenshot_3" />5</span></a>
                            <a href="#" title="Screenshot_4"><span><img
                                        src="{{ asset('public/data1/tooltips/screenshot_4.png') }}"
                                        alt="Screenshot_4" />6</span></a>
                            <a href="#" title="Screenshot_5"><span><img
                                        src="{{ asset('public/data1/tooltips/screenshot_5.png') }}"
                                        alt="Screenshot_5" />7</span></a>
                        </div>
                    </div>
                    <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery
                            carousel</a> by WOWSlider.com v9.0</div>
                    <div class="ws_shadow"></div>
                </div>

                <!-- End WOWSlider.com BODY section -->


                <div class="col">
                    <h5 class="font-weight-semibold mb-1">
                        <a href="#" class="text-default">{{$place->title}}</a>
                    </h5>

                    <ul class="list-inline list-inline-dotted text-muted mb-3">
                        <li class="list-inline-item"><span class=""><i class="fa fa-map-marker"></i></span> <a href="#" class="text-muted">{{$place->location->name}}</a></li>
                    </ul>
                    <hr>

                    <p>{!! Str::substr($place->content,0,200)  !!}</p>
                </div>
               
                <div class="container" style="display: flex">
                    <div class="row">
                        <div class="col">

                            <iframe width="100%" height="560" src="https://www.youtube.com/embed/LfI8_1LwD3Y"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                        </div>
                        <div class="card ml-2 my-2">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58690.22769302754!2d89.15852990207685!3d23.165117979409718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff108d87ea6d65%3A0x627d034ef93261cf!2z4Kav4Ka24KeL4Kaw!5e0!3m2!1sbn!2sbd!4v1637491103591!5m2!1sbn!2sbd"
                                width="1060" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
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
@endpush
