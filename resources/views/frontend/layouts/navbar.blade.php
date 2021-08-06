    <div class="container-fluid bg-dark border-top border-bottom border-secondary">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                <div>
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('public/img/2.png')}}" class="rounded-circle" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                </div>

                <div class="collapse navbar-collapse cwl-menu " id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto text-white nav-pills">
                    <li class="nav-item ">
                      <a class="nav-link cwl-active" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('tender.all')}}">All Tender</a>
                    </li>
                    {{-- <li class="nav-item">
                      <a class="nav-link" href="#">Private Tender</a>
                    </li> --}}
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('tender.national')}}">National Tender</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('tender.international')}}">Internation Tender</a>
                    </li>

                  </ul>
                </div>
              </nav>
        </div>
    </div>
