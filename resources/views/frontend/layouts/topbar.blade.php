<div class="container-fluid cwl-bg">
    <div class="container ">
        <div class="row">
            <div class="col-6 cwl-info">
                <p class="mt-1 mb-1"
                    <span> <i class="fa fa-envelope" aria-hidden="true"></i></span> info@catalystswings.com                    |
                    <span><i class="fa fa-phone" aria-hidden="true"></i></span> 01788950905
                </p>
            </div>
            <div class="col-6 cwl-social">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a target="_blank" class="nav-link " href="https://www.facebook.com/catalystswingslimited"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span><i class="fa fa-linkedin" aria-hidden="true"></i></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span><i class="fa fa-youtube" aria-hidden="true"></i></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ENGLISH |</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('register')}}">REGISTER</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="{{url('login')}}">| LOGIN</a>
                      </li>
                    @endguest
                    @auth
                        @if (auth()->user()->is_admin == 1)
                            <li class="nav-item ">
                                <a class="nav-link" href="{{url('/admin')}}">Admin</a>
                            </li>
                        @elseif (auth()->user()->is_admin == 0)
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('/user')}}">My Account</a>
                        </li>

                        @endif
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</div>
