<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('tender/assets/images/logo.jpg')}}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/theme.css')}}">
  <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- datatable cnd -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
  <title>Catalysts Wings Ltd</title>
</head>

<body style="background-image: url('{{asset('images/900204.jpg')}}');background-repeat: no-repeat;background-size: cover;">

  <div class="loader" id="pre-loader">
    <img src="{{asset('images/loader.gif')}}" alt="">
  </div>
  <!-- start header -->
  <div class="__header">
    <!-- startd header top -->
    <div class="__header_top">
      <div class="container __flex">
        <h4 class="__menu_icon" id="__menu_icon">
          <i class="fa fa-bars"></i>
        </h4>
        <ul class="__header_top_left __flex">
          <li class="__header_top_left_item">
            <a href="{{url('alltender')}}" class="__header_top_left_item_link">Tander</a>
          </li>
          <li class="__header_top_left_item">
            <a href="{{url('cliend')}}" class="__header_top_left_item_link">My Tander</a>
          </li>
          <li class="__header_top_left_item">
            <a href="#" class="__header_top_left_item_link">Private Tander</a>
          </li>
          <li class="__header_top_left_item">
            <a href="#" class="__header_top_left_item_link">Service</a>
          </li>
          <li class="__header_top_left_item">
            <a href="#" class="__header_top_left_item_link">Price</a>
          </li>
          <li class="__header_top_left_item">
            <a href="#" class="__header_top_left_item_link">Why CW Tander</a>
          </li>
          <li class="__header_top_left_item">
            <a href="{{url('about')}}" class="__header_top_left_item_link">About us</a>
          </li>
          <li class="__header_top_left_item">
            <a href="{{url('contact')}}" class="__header_top_left_item_link">Our Location</a>
          </li>
        </ul>

        <div class="__header_top_right __flex">
          <ul class="__header_top_s_link_list __flex">
            <li>
              <a href="https://www.facebook.com/catalystswingsltd">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://www.youtube.com/channel/UCrW6x-04p-o_UD7Lkhr4WhQ">
                <i class="fa fa-youtube"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-google"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
          </ul>

          <ul>
            <li class="__language_drop_down">
              <a href="#">Bangla</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- end header top -->

    <!-- startd header middle part -->
    <div class="__header_middle">
      <div class="container __flex">

        <a href="{{url('/')}}">
          <img src="{{asset('images/logo1.png')}}" class="__site_logo" alt="">
        </a>


        {{-- <ul class="__header_middle_right __flex">
          <li>
            <i class="fa fa-envelope"></i>
            <span>info@catalystswings.com</span>
          </li>
          <li>
            <i class="fa fa-phone"></i>
            <span>01788950905</span>
          </li>
          <li>
            <a href="{{route('cliendreg.create')}}">
              <span>Register</span>
            </a>
            <a href="{{route('cliendreg.create')}}">
              <span>Register</span>
            </a>
          </li>
          <li>
            <a href="{{route('pay.create')}}">
              <span>Get Pay</span>
            </a>
          </li>
          <li>
            <a href="{{url('/login')}}" class="__signupbtn">
              <span class="text-uppercase">Login Now</span>
            </a>
          </li>
        </ul> --}}
        <ul class="__header_middle_right __flex">
          <li>
            <i class="fa fa-envelope"></i>
            <span>info@catalystswings.com</span>
          </li>
          <li>
            <i class="fa fa-phone"></i>
            <span>01788950905</span>
          </li>
          <li>
            <a href="#">
              <span>Register</span>
            </a>
            <a href="#">
              <span>Register</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span>Get Pay</span>
            </a>
          </li>
          <li>
            @guest
            <a href="{{url('/login')}}" class="__signupbtn">
                <span class="text-uppercase">Login Now</span>
              </a>
            @endguest
            @auth
                @if (auth()->user()->is_admin == 1)
            <a href="{{url('/admin')}}" class="__signupbtn">
                    <span class="text-uppercase">Admin</span>
                  </a>
                @elseif (auth()->user()->is_admin == 0)
                <a href="{{url('/user')}}" class="__signupbtn">
                    <span class="text-uppercase">My Account</span>
                  </a>
                @endif
            @endauth
          </li>
        </ul>
      </div>
    </div>

    <!-- end header middle part -->

    <!-- start the header nav -->

    <div class="__header_nav">
      <div class="container __flex">
        <ul class="__flex" id="__nav_ele">
          <div class="_nav-heading">
            <li id="exit-menu">
              <i class="fa fa-window-close"></i>
            </li>
          </div>
          <li class="__active_nav">
            <a href="{{url('alltender')}}">All Tanders</a>
          </li>
          <li>
            <a href="{{url('international')}}">International Tanders</a>
          </li>
          <li>
            <a href="{{url('national')}}">National Tanders</a>
          </li>
          <li>
            <a href="{{url('private')}}">Private Tander (NGO)</a>
          </li>
          <li>
            <a href="#">Tourism in Bangladesh</a>
          </li>
          <li>
            {{-- <a href="{{route('dropidea.create')}}">Drop your Innovative idea</a> --}}
            <a href="#">Drop your Innovative idea</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- end the header nav -->


  </div>
  <!-- end header -->
  @yield('fontbody')

  <div class="__footer">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="row">
            <div class="col-lg-3 __footer_f_section col-sm-6">
              <img src="{{asset('images/logo1.png')}}" class="__site_logo" alt="">
              <p>Catalysts Wings Limited was established in 2020. Our main objective is to build a good relationship between domestic and foreign contractors for the development of the country and the nation. We have various local and foreign contractors associated with us</p>

            </div>


            <div class="col-lg-3 width-50-percent">
              <h4 class="__footer_section_heading">Navigation</h4>
              <div class="__section_highlight"></div>
              <ul>
                <li class="__footer_secttion_item">
                  <a href="#">Help</a>
                </li>
                <li class="__footer_secttion_item">
                  <a href="#">FAQ</a>
                </li>
                <li class="__footer_secttion_item">
                  <a href="#">Testiminilal</a>
                </li>
                <li class="__footer_secttion_item">
                  <a href="#">Newspaper</a>
                </li>
                <li class="__footer_secttion_item">
                  <a href="#">e-GP Tanders</a>
                </li>
              </ul>

            </div>


            <div class="col-lg-3 width-50-percent">
              <h4 class="__footer_section_heading">Contact</h4>
              <div class="__section_highlight"></div>

              <ul>
                <li class="__footer_secttion_item">
                  <i class="fa fa-map-marker"></i>
                  House 43, Road 4/A, dhanmondi, Dhaka
                </li>
                <li class="__footer_secttion_item">
                  <i class="fa fa-envelope"></i>
                  info@catalystswings.com
                </li>
                <li class="__footer_secttion_item">
                  <i class="fa fa-phone"></i>
                  01788950905
                </li>
              </ul>

            </div>

            <div class="col-lg-3 col-sm-6 col-xs-6">
              <div class="row">
                <div class="col-lg-12 width-50-percent">
                  <h4 class="__footer_section_heading">Get a message</h4>
                  <div class="__section_highlight"></div>

                  <ul>
                    <li class="__footer_secttion_item">
                      <form action="" class="__flex">
                        <input type="text" class="__footer_search" placeholder="Email">
                        <button class="__footer_search_btn">Send</button>
                      </form>
                    </li>

                  </ul>
                </div>
                <br />
                <div class="col-lg-12 width-50-percent">
                  <ul class="__footer_end_section">
                    <h4 class="__footer_section_heading">Follow Us</h4>
                    <div class="__section_highlight"></div>

                    <ul class="__flex">
                        <li>
                          <a href="https://www.facebook.com/catalystswingsltd">
                            <i class="fa fa-facebook"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-twitter"></i>
                          </a>
                        </li>
                        <li>
                          <a href="https://www.youtube.com/channel/UCrW6x-04p-o_UD7Lkhr4WhQ">
                            <i class="fa fa-youtube"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-google"></i>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-instagram"></i>
                          </a>
                        </li>
                    </ul>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="__footer_end">
    <div class="row">
      <div class="col-lg-12">
        <div class="__copy_right_text">
          <p><strong>catalysts wings</strong> <i class="fa fa-copyright"></i> 2021 Developed by <a href="https://stkitbd.com/"><strong>Stk IT Solution Ltd.</strong></a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- search box java script! -->
  <script>
    function myFunction() {
    let serach_value=document.getElementById('myInput').value;
    serach_value=serach_value.toUpperCase();
    let list=document.getElementsByClassName('__category_item')

    for (let index = 0; index < list.length; index++) {
      let value=list[index].getAttribute('data-value');
      value=value.toUpperCase();
      if(value.indexOf(serach_value)===-1){

        list[index].parentElement.parentElement.style.display="none";
      }else{
        list[index].parentElement.parentElement.style.display="block";
      }
       // console.log()
    }
}
</script>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>

  <script type="text/javascript" src="{{asset('js/theme.js')}}"></script>

    <!-- data table script -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

  <script>
  $(document).ready(function() {
    $('#datatable').DataTable();
} );
  </script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>
