<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('home')}}" class="brand-link">
      <img src="{{asset('img/logo2.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>CatalystsWings</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('img/logo3.jpg')}}" class="img-circle elevation-2" alt="User Image">
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
            <i class="fa fa-file" aria-hidden="true"></i>
              <p>
                Tender
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{url('admin/tender')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All tender</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/tender/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Uoload tender</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/tender')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Tender</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tender application</p>
                </a>
              </li>
            </ul>
          </li>
            <!--End Tender management -->

            <!-- Country management -->
            <li class="nav-item has-treeview">
            <a href="{{url('admin/country')}}" class="nav-link">
            <i class="fa fa-file" aria-hidden="true"></i>
              <p>
                Country
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/country')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Country</p>
                </a>
              </li>
            </ul>
          </li>
            <!--End Country management -->

            <!-- Location management -->
            <li class="nav-item has-treeview">
            <a href="{{url('admin/location')}}" class="nav-link">
            <i class="fa fa-file" aria-hidden="true"></i>
              <p>
                Location
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/location')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Location</p>
                </a>
              </li>
            </ul>
          </li>
            <!--End Location management -->

            <!-- Location management -->
            <li class="nav-item has-treeview">
            <a href="{{url('admin/type')}}" class="nav-link">
            <i class="fa fa-file" aria-hidden="true"></i>
              <p>
                Type
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/type')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Type</p>
                </a>
              </li>
            </ul>
          </li>
            <!--End Location management -->

            <!-- Category management -->
            <li class="nav-item has-treeview">
            <a href="{{url('admin/category')}}" class="nav-link">
            <i class="fa fa-file" aria-hidden="true"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/category')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Category</p>
                </a>
              </li>
            </ul>
          </li>
            <!--End Category management -->

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
          <!-- innovative idea management -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="material-icons" style="font-size:16px;">&#xe7fb;</i>
              <p>
                Innovative idea
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
                  <p>Manage idea</p>
                </a>
              </li>
            </ul>
          </li>
          <!--end innovative idea management -->
          <!-- Country management -->
          <li class="nav-item has-treeview">
          <a href="{{url('/location')}}" class="nav-link">
            <i class="material-icons" style="font-size:16px;">&#xe7fb;</i>
              <p>
                Add Location
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <!--end Country management -->
          <!-- Department management -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="material-icons" style="font-size:16px;">&#xe7fb;</i>
              <p>
                Add Department
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Department</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Department</p>
                </a>
              </li>
            </ul>
          </li>
          <!--end Department management -->
          <!-- catagory management -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="material-icons" style="font-size:16px;">&#xe7fb;</i>
              <p>
                Catagory
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Catagory</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Catagory</p>
                </a>
              </li>
            </ul>
          </li>
          <!--end catagory management -->
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
