    <div class="container-fluid bg-dark border-top border-bottom border-secondary">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
                <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('public/img/cwl.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse cwl-menu" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto text-white nav-pills">
                    <li class="nav-item ">
                      <a class="nav-link cwl-active" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">All Tender</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Private Tender</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">National Tender</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Internation Tender</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('register')}}">Register</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="{{url('login')}}">Login</a>
                      </li>
                    @endguest
                    @auth
                        @if (auth()->user()->is_admin == 1)
                            <li class="nav-item ">
                                <a class="nav-link" href="{{url('/admin')}}">Admin</a>
                            </li>
                        @elseif (auth()->user()->is_admin == 0)
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('/user')}}">Account</a>
                        </li>

                        @endif
                    @endauth

                  </ul>
                </div>
              </nav>
        </div>
    </div>
