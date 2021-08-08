<div class="container-fluid cwl-slider p-0">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                  <img src="{{asset('public/img/slider/slider1.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-left">Find Your Tender Now !</h1>
                        <p class="text-left">Our main objective is to build a good relationship between domestic <br> and foreign contractors for the development of the country and the nation.</p>
                        <a href="{{route('tender.all')}}" class="float-left btn btn-primary btn-lg cwl-btn">All Tender</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('public/img/slider/slider3.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h1 class="text-left">Regitratin and Apply Tender !</h1>
                      <p class="text-left">It's a easy way to registration. <br> Just got to our regitration form and confirm with a single step.</p>
                      <a href="{{url('/register')}}" class="float-left btn btn-primary btn-lg cwl-btn">Register Now!</a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('public/img/slider/slider2.jpg')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="text-left">Contact With Us</h1>
                        <p class="text-left">The fast service we got from the support team and <br> the excellent updates on selected preferences deserved to be mentioned.</p>
                        <a href="" class="float-left btn btn-primary btn-lg cwl-btn">Contact Now !</a>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
</div>

