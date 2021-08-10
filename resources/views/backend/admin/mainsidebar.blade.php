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
          <a href="#" class="d-block">admin</a>
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
          <!-- End Dashbord  -->
          {{-- Tender application Start --}}
          <li class="nav-item has-treeview">
            <a href="{{route('admin.application')}}" class="nav-link">
                <i class="fas fa-file-import"></i>
              <p>
                Tender Applicatios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.application')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Applications</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- Tender application End --}}
          <!-- tourism manage  -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fas fa-users"></i>
              <p>
                Tourism manage
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create place</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('travelback')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage place</p>
                </a>
              </li>
            </ul>
          </li>
          <!--End tourism manage  -->
            <!-- Tender management -->
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="fa fa-tasks" aria-hidden="true"></i>
              <p>
                Tenders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{url('admin/tender')}}" class="nav-link">
                <i class="fas fa-border-all nav-icon"></i>
                  <p >All tender</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/tender/create')}}" class="nav-link">
                    <i class="fas fa-upload nav-icon"></i>
                  <p>Uoload tender</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/tender')}}" class="nav-link">
                    <i class="fas fa-table nav-icon"></i>
                  <p>Manage Tender</p>
                </a>
              </li>
            </ul>
          </li>
            <!--End Tender management -->

            <!-- Country management -->
            <li class="nav-item has-treeview">
            <a href="{{url('admin/country')}}" class="nav-link">
            <i class="fa fa-globe" aria-hidden="true"></i>
              <p>
                Country
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/country')}}" class="nav-link">
                    <i class="fas fa-table nav-icon"></i>
                  <p>Manage Country</p>
                </a>
              </li>
            </ul>
          </li>
            <!--End Country management -->

            <!-- Location management -->
            <li class="nav-item has-treeview">
            <a href="{{url('admin/location')}}" class="nav-link">
            <i class="fa fa-compass" aria-hidden="true"></i>
              <p>
                Location
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/location')}}" class="nav-link">
                    <i class="fas fa-table nav-icon"></i>
                  <p>Manage Location</p>
                </a>
              </li>
            </ul>
          </li>
            <!--End Location management -->

            <!-- Location management -->
            <li class="nav-item has-treeview">
            <a href="{{url('admin/type')}}" class="nav-link">
            <i class="fa fa-certificate" aria-hidden="true"></i>
              <p>
                Type
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/type')}}" class="nav-link">
                    <i class="fas fa-table nav-icon"></i>
                  <p>Manage Type</p>
                </a>
              </li>
            </ul>
          </li>
            <!--End Location management -->

            <!-- Category management -->
            <li class="nav-item has-treeview">
            <a href="{{url('admin/category')}}" class="nav-link">
            <i class="fa fa-ethernet" aria-hidden="true"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/category')}}" class="nav-link">
                    <i class="fas fa-table nav-icon"></i>
                  <p>Manage Category</p>
                </a>
              </li>
            </ul>
          </li>
            <!--End Category management -->
            <!-- Department management -->
            <li class="nav-item has-treeview">
            <a href="{{url('admin/department')}}" class="nav-link">
            <i class="fa fa-building" aria-hidden="true"></i>
              <p>
                Department
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/department')}}" class="nav-link">
                    <i class="fas fa-table nav-icon"></i>
                  <p>Manage Department</p>
                </a>
              </li>
            </ul>
          </li>
            <!--End Department management -->

            <!-----Order ---->
            <!-- manage User -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="material-icons" style="font-size:16px;">&#xe7fb;</i>
              <p>
                EGP Training
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create user</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Training</p>
                </a>
              </li>
            </ul>
          </li>
            <!--End manage User -->
            <!-- cliend management -->
            <li class="nav-item has-treeview">
            <a href="{{url('admin/client')}}" class="nav-link">
            <i class="material-icons" style="font-size:16px;">&#xe7fb;</i>
              <p>
                Client Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create user</p>
                </a>
              </li> -->
              <li class="nav-item">
              <a href="{{url('admin/client')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Client</p>
                </a>
              </li>
            </ul>
          </li>
          <!--end cliend management -->

            <!----Logout---->
                <li class="nav-item ">

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
