<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      {{-- <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">ZODF Project</span>
    </a>
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ ucfirst(Auth()->user()->name) }}</a>
      </div>
      <div class="image">
        <a class="small btn btn-primary" href="{{ route('logout') }}">Logout</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{ route('admin.dashboard') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Administrator
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Admin</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>View All Admin</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Projects
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('addproject') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Project</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('allprojects') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All Projects</p>
                  </a>
                </li>
              </ul>

            </li>
            <li class="nav-item has-treeview">
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Project Material
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('addmaterial') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Project Materials</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Set Up
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>User Role</p>
                  </a>
                </li>
              </ul>
            </li>
            {{-- @php
              use \App\Model\User\Contact;
                $countmessage = Contact::all();
                $countmessages = count($countmessage);
            @endphp --}}
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-envelope nav-icon"></i>
                <p>Message
                  {{-- @if ($countmessages>0) --}}
                  <span class="right badge badge-danger">New</span>
                  {{-- @else --}}
                  {{-- <span class="right badge badge-danger"></span> --}}
                  {{-- @endif --}}
                  
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-envelope nav-icon"></i>
                <p>Subscriber</p>
              </a>
            </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>