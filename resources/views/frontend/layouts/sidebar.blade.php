            {{-- Sidebar section Sart --}}

            <div class="col-md-4 d-sm-none d-md-block">
                <ul class="list-group mb-3">

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <h4 class="text-secondary">Quick Links</h4>
                    </li>

                    @guest
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{url('login')}}" class="text-dark">
                            <span><i class="fa fa-globe" aria-hidden="true"></i></span> Login Now
                        </a>
                        {{-- <span class="badge badge-primary badge-pill">2</span> --}}
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{url('register')}}" class="text-dark">
                            <span><i class="fa fa-globe" aria-hidden="true"></i></span> Register Now
                        </a>
                        {{-- <span class="badge badge-primary badge-pill">2</span> --}}
                    </li>
                    @endguest
                    @auth
                        @if (auth()->user()->is_admin == 1)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{url('/admin')}}" class="text-dark">
                                <span><i class="fa fa-globe" aria-hidden="true"></i></span> Admin
                            </a>
                            {{-- <span class="badge badge-primary badge-pill">2</span> --}}
                        </li>
                        @elseif (auth()->user()->is_admin == 0)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{url('/user')}}" class="text-dark">
                                <span><i class="fa fa-globe" aria-hidden="true"></i></span> My Account
                            </a>
                            {{-- <span class="badge badge-primary badge-pill">2</span> --}}
                        </li>

                        @endif
                    @endauth

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#" class="text-dark">
                            <span><i class="fa fa-globe" aria-hidden="true"></i></span> eGP Registration
                        </a>
                        {{-- <span class="badge badge-primary badge-pill">2</span> --}}
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#" class="text-dark">
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i></span> eGP Trining
                        </a>
                        {{-- <span class="badge badge-primary badge-pill">2</span> --}}
                    </li>


                </ul>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <h4 class="text-secondary">Tender Catagories</h4>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{route('tender.all')}}" class="text-dark">
                            <span><i class="fa fa-globe" aria-hidden="true"></i></span> All Tender
                        </a>
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="#" class="text-dark">
                            <span><i class="fa fa-globe" aria-hidden="true"></i></span> Private Tender
                        </a>
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{route('tender.national')}}" class="text-dark">
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i></span> National Tender
                        </a>
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{route('tender.international')}}" class="text-dark">
                            <span><i class="fa fa-plane" aria-hidden="true"></i></span> Internation Tender
                        </a>
                        <span class="badge badge-primary badge-pill">2</span>
                    </li>


                </ul>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <h4 class="text-secondary">Archive Tenders</h4>
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
            {{-- Sidebar section End --}}
