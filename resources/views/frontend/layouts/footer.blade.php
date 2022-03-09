<div class="container-fluid bg-light border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <article class="p-4 footer-img">
                    <img src="{{asset('public/img/cwl.png')}}" alt="Logo" class="img-fluid">
                    <p class="text-justify">Catalysts Wings Limited was established in 2020. Our main objective is to build a good
                        relationship between domestic and foreign contractors for the</p>
                </article>
            </div>
            <div class="col-md-3 col-sm-12 pt-4">
                <article class="p-2">
                    <h3>Contact</h3>
                    <p> <i class="fa fa-map-marker" aria-hidden="true"></i> House 43, Road 4/A, dhanmondi, Dhaka
                    </p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> info@catalystswings.com </p>
                    <p> <i class="fa fa-phone" aria-hidden="true"></i> 01788950905</p>
                </article>
            </div>

            <div class="col-md-3 col-sm-12 pt-4">
                <article class="p-2">
                    <h3>Social Links</h3>
                    <ul class="list-inline">
                        <li class="list-inline-item bg-social-icon"><a href="https://www.facebook.com/catalystswingslimited" class="text-white" target="_blank"><i
                                    class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item bg-social-icon"><a href="#" class="text-white"><i
                                    class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item bg-social-icon"><a href="#" class="text-white"><i
                                    class="fa fa-linkedin"></i></a>
                        </li>
                        <li class="list-inline-item bg-social-icon"><a href="#" class="text-white"><i
                                    class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                </article>
            </div>
            <div class="col-md-3 col-sm-12 pt-4 footer-menu">
                <article class="p-2">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="{{route('homepage')}}">Home </a></li>
                        <li><a href="{{route('tender.all')}}">All Tender </a></li>
                        <li><a href="{{route('about')}}">About Us </a></li>
                        <li><a href="{{route('place')}}">Tourism</a></li>
                        <li><a href="{{route('contact')}}">Contact Us </a></li>
                    </ul>
                </article>
            </div>


        </div>
    </div>
</div>

@include('frontend.layouts.footerbar')
