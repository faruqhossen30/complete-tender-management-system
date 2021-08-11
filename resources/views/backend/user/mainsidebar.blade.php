<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('homepage')}}" class="brand-link">
      <img src="{{asset('public/img/2.png')}}" style="height: 50px; background: white;" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>CatalystsWings</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('public/img/user.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Dashbord  -->
          <li class="nav-item has-treeview">
            <a href="{{url('home')}}" class="nav-link">
            <i class="fas fa-home"></i>
              <p>
                DashBoard Pages
                <!-- <i class="right fas fa-angle-left  menu-open"></i> -->
              </p>
            </a>
          </li>

          {{-- Tender application start --}}
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="material-icons" style="font-size:16px;">&#xe7fb;</i>
                <p>
                Tender Application
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('application')}}" class="nav-link">
                        <i class="fas fa-border-all nav-icon"></i>
                        <p>My Applications</p>
                    </a>
                </li>

            </ul>
            </li>
          {{-- Tender application End --}}
          <!-- End Dashbord  -->

          <!-- manage User -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fas fa-user-circle"></i>
                <p>
                My Profile
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{route('profile')}}" class="nav-link">
                    <i class="fas fa-table nav-icon"></i>
                    <p>Al Information</p>
                </a>
                </li>
                @php
                    $profile = DB::table('user_profiles')->where('user_id', auth()->user()->id)->first();
                @endphp
                @if ($profile)
                <li class="nav-item">
                    <a href="{{route('profile.edit', $profile->user_id)}}" class="nav-link">
                        <i class="fas fa-edit nav-icon"></i>
                        <p>Update Documents</p>
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a href="{{route('profile.upload')}}" class="nav-link">
                        <i class="fas fa-upload  nav-icon"></i>
                        <p>Upload Documents</p>
                    </a>
                </li>
                @endif
            </ul>
            </li>
                <!--End manage User -->


            <!----Logout---->
              <li class="nav-item">

                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                    <p>{{ __('Logout') }}</p>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

              </li>
        </ul>
    </nav>
      <!-- /.sidebar-menu -->
  </div>
    <!-- /.sidebar -->
</aside>
