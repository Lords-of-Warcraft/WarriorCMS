@php

$accountName    = '{Placeholder}';
$accountEmail   = '{Placeholder}';
$accountID      = '{Placeholder}';

if (session('logged') === TRUE)
{
    $accountName    = session('session_username');
    $accountEmail   = session('session_email');
    $accountID      = session('session_id');
}

@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">{{ Config('warriorcms.website_name') }} Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('/img/profile_icons/'.getProfileImage(getUserDataByID("profile_image", session("session_id"))).'.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ $accountName }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin_dashboard') }}" class="nav-link @if (request()->routeIs('admin_dashboard')) active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @if (request()->routeIs('admin_settings') || request()->routeIs('admin_modules')) active @endif">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                System
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin_settings') }}" class="nav-link @if (request()->routeIs('admin_settings')) active @endif">
                  <i class="fas fa-sliders-h"></i>
                  <p>Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin_modules') }}" class="nav-link @if (request()->routeIs('admin_modules')) active @endif">
                  <i class="fas fa-puzzle-piece"></i>
                  <p>Modules</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link @if (request()->routeIs('admin_users')) active @endif">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin_users') }}" class="nav-link @if (request()->routeIs('admin_users')) active @endif">
                  <i class="fas fa-users-cog"></i>
                  <p>Accounts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Modules</li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>