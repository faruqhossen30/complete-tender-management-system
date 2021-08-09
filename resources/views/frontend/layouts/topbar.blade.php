<div class="container-fluid cwl-bg">
    <div class="container ">
        <div class="row">
            <div class="col-md-6 cwl-info">
                <p class="mt-1 mb-1"
                    <span> <i class="fa fa-envelope" aria-hidden="true"></i></span> info@catalystswings.com                    |
                    <span><i class="fa fa-phone" aria-hidden="true"></i></span> 01788950905
                </p>
            </div>
            <div class="col-md-6 cwl-social">
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
                    <li class="nav-item">
                        <div class="btn-group navbar_account">
                            <button class="btn btn-secondary cwl-bg btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Account
                            </button>
                            <div class="dropdown-menu cwl-bg">
                                @if (auth()->user()->is_admin == 1)
                                <a class="dropdown-item" href="{{url('/admin')}}">Admin</a>
                                <a class="dropdown-item" href="{{url('/admin')}}">Dashboard</a>
                                @elseif (auth()->user()->is_admin == 0)
                                <a class="dropdown-item" href="{{url('/user')}}">My Account</a>
                                <a class="dropdown-item" href="{{url('/user')}}">Dashboard</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                            </div>
                        </div>
                    </li>
                    @endauth

                </ul>
            </div>
        </div>
    </div>
</div>
