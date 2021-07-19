<style>
    .modal-header {

    padding: .5rem .5rem;
     border-bottom: none;
}
.popup-img img{
    max-width: 750px;
    max-height:314px;
    text-align: center;
    border: 5px solid #000;
    border-radius: 5px;
}
.popupregbtn{
  float: right;
  height: 40px;
  width:140px;
  text-align:center;
  padding-top:5px;
  border-radius:5px;
  background-color:#000080;


  }
.popupregbtn a{
  color:white;

}
</style>

@extends("frontend.index")
@section("fontbody")
<div class="modal fade bd-example-modal-lg"  id="pupUpModal" tabindex="-1" role="dialog" aria-labelledby="pupUpModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="popup-img">
          <img src="{{asset('uploads/popup_1.jpg')}}" class="img-fluid" style="background-size: cover;width:100%;" alt="no image found">
        </div>
        <br>
        {{-- <button class="popupregbtn" type="submit"><a href="{{route('cliendreg.create')}}">Registration Now</a></button> --}}
        <button class="popupregbtn" type="submit"><a href="#">Registration Now</a></button>
      </div>
    </div>
  </div>
</div>




<div class="container" style="padding-top:40px;">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <div class="__tander_search">
        <form action="" class="__tander_search_form">
              <input class="__search_field" placeholder="Search Your Tanders" type="text" required="required" />
              <button class="__search_btn">Search</button>
              <button class="__search_btn __advance_search">Advance Search</button>
        </form>

        <div class="__tander_count_box_list __flex">
          <div class="__tander_count_box __flex __t_active">
          <i class="fa fa-industry" aria-hidden="true"></i>
            <div class="__t_count">
              <span>Foreign vendor</span>
              <span>
                <strong>200</strong>
              </span>
            </div>
          </div>

          <div class="__tander_count_box __flex ">
          <i class="fa fa-industry" aria-hidden="true"></i>
            <div class="__t_count">
              <span>Local vendor</span>
              <span>
                <strong>120</strong>
              </span>
            </div>
          </div>

          <div class="__tander_count_box __flex">
            <i class="fa fa-building"></i>
            <div class="__t_count">
              <span>Manufacturer</span>
              <span>
                <strong>60</strong>
              </span>
            </div>
          </div>
          <div class="__tander_count_box __flex">
            <i class="fa fa-ambulance"></i>
            <div class="__t_count">
              <span>Supplier</span>
              <span>
                <strong>500</strong>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- start slider -->
  <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
    <!-- <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol> -->
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active img-fluid">
        <img src="{{asset('images/slider/img1.jpg')}}" class="img-fluid" style="background-img:cover;width:100%;" alt="">

          <!-- <div class="carousel-caption d-none d-md-block">

              <p class="lead">This is a description for the first slide.</p>
            </div> -->
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item img-fluid">
      <img src="{{asset('images/slider/img2.jpg')}}" class="img-fluid" style="background-img:cover;width:100%;" alt="">
        <!-- <div class="carousel-caption d-none d-md-block">
          <p class="lead">This is a description for the second slide.</p>
        </div> -->
      </div>

      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item img-fluid">
      <img src="{{asset('images/slider/img3.jpg')}}" class="img-fluid" style="background-img:cover;width:100%;" alt="">
        <!-- <div class="carousel-caption d-none d-md-block">
          <p class="lead">This is a description for the third slide.</p>
        </div> -->
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- end slider -->

  <div class="container">
    <div class="__content">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="row">
            <div class="col-lg-9 col-sm-12 col-md-12 col-xs-12">
              <div class="__left_content">
                <div class="__l_c_heading __flex">
                  <h4>
                    <i class="fa fa-bars"></i>
                    <span>Browse Tander</span>
                  </h4>
                  <ul class="__flex">

                    <li>
                      <a href="{{url('fontcatagory')}}">Category</a>
                    </li>
                    <li>
                      <a href="#">Organaization</a>
                    </li>
                    <!-- <li>
                      <a href="#">Category</a>
                    </li> -->
                    <li>
                      <a href="#">Sorces</a>
                    </li>
                  </ul>
                </div>
                <div class="__l_c_tander_search">
                  <form action="">
                    <input type="text" placeholder="search your category" class="__search2" onkeyup="myFunction()" id="myInput">
                    <button class="__search_btn __search_btn_2 ">Go !</button>
                  </form>
                </div>
                <div class="__category">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="__category_content">
                        <div class="row">
                        @foreach($catagorys as $catagory)
                          <div class="col-lg-6 ">
                            <ul id="myUL">
                              <li  class="__category_item" data-value="{{$catagory->name}}">
                                <a href="">{{$catagory->name}}</a>
                                <i class="__c_icon fa fa-angle-down"></i>
                                <ul class="__sub_category">
                                  @foreach($catagory->tendersupload as $tendersupload)
                                    <li class="__sub_category_item">
                                      <a href="#">{{$tendersupload->description}}</a>
                                    </li>
                                  @endforeach
                                </ul>
                              </li>
                            </ul>
                          </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="__right_content">
                <div class="__quick_links">
                  <h4>Quick Links</h4>
                  <li>
                    <i class="fa fa-angle-right"></i>
                    <a href="#">Sign Up</a>
                    {{-- <a href="{{route('cliendreg.create')}}">Sign Up</a> --}}
                  </li>
                  <li>
                    <i class="fa fa-angle-right"></i>
                    <a href="#">New Tander</a>
                  </li>
                  <li>
                    <i class="fa fa-angle-right"></i>
                    <a href="#">Aucations</a>
                  </li>
                  <li>
                    <i class="fa fa-angle-right"></i>
                    <a href="#">Tander Deadline</a>
                  </li>
                  <li>
                    <i class="fa fa-angle-right"></i>
                    <a href="#">Free Tander</a>
                  </li>
                  <li class="__last_item">
                    <i class="fa fa-angle-right"></i>
                    <a href="#">Contact</a>
                  </li>
                </div>
                <div class="__quick_links">
                  <h4>eGP Support</h4>
                  <li>
                    <i class="fa fa-angle-right"></i>
                    <a href="{{url('egptraning')}}">eGP Traning</a>
                  </li>
                  <li class="__last_item">
                    <i class="fa fa-angle-right"></i>
                    <a href="#">eGP Regsitration</a>
                  </li>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
