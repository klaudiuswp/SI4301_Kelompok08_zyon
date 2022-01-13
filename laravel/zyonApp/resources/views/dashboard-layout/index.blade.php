<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>

    <!-- Favicons -->
    <link href="home_assets/img/favicon.png" rel="icon" />
    <link href="home_assets/img/favicon.png" rel="apple-touch-icon" />

    <!-- Custom CSS -->
    <link href="dashboard_assets/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="dashboard_assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" />
    <!-- Custom CSS -->
    <link href="dashboard_assets/css/style.min.css" rel="stylesheet" />
  </head>

  <body>
    
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md" style="color: #233e99">
          <div class="navbar-header" data-logobg="skin6">
      
            <a class="navbar-brand" href="/">
              
              <b class="logo-icon">
                
                <img src="dashboard_assets/img/Logo.png" alt="homepage" style="width: 200px" />
              </b>
              
            </a>
      
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="fa fa-tasks text-white" aria-hidden="true"></i></a>
          </div>
    
          <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5" style="padding-right: 2%">
      
            <div class="navbar-nav ms-auto d-flex align-items-center">
              @role('admin')
                <h4 class="dropdown-header small text-muted">
                  Admin
                </h4>
              @endrole
                @auth
                    <x-jet-dropdown id="settingsDropdown">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <div class="d-inline p-2 text-muted">{{ Auth::user()->name }}</div>
                            <div class="d-inline p-2 "><img class="rounded-circle" width="32" height="32" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /></div>
                            @else
                              
                              {{ Auth::user()->name }}

                              <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                              </svg>
                            @endif
                        </x-slot>

                        <x-slot name="content">

                            <h6 class="dropdown-header small text-muted">
                                {{ __('Manage Account') }}
                            </h6>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            @role('user')
                            <x-jet-dropdown-link href="/event">
                                {{ __('Event') }}
                            </x-jet-dropdown-link>
                            @endrole

                            <hr class="dropdown-divider">

                            <div>
                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Log out') }}
                            </x-jet-dropdown-link>
                            </div>
                            <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                @csrf
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                @endauth
                </div>
          </div>
        </nav>
      </header>

      <aside class="left-sidebar" data-sidebarbg="skin6">
        
        <div class="scroll-sidebar">
          
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              
              <li class="sidebar-item pt-2">
                
                @role('user')
                <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false" href="/dashboard">
                @endrole

                @role('admin')
                <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false" href="/admin-dashboard">
                @endrole

                  <i class="far fa-clock text-white" aria-hidden="true"></i>
                  <span class="hide-menu text-white">Dashboard</span>
                </a>
              </li>

              <li class="sidebar-item">
                @role('user')
                <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle text-white" aria-expanded="false" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black">
                  <i class="fa fa-user-md text-white" aria-hidden="true"></i>
                  <span class="hide-menu text-white">Konsultasi</span>
                </a>
                <ul class="dropdown-menu mx-5" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item-text text-white" href="/event" style="padding-left: 30px">Daftar Psikolog</a></li>
                  <li><a class="dropdown-item-text text-white" href="/psikolog" style="padding-left: 30px">Tambah Psikolog</a></li>
                </ul>
                @endrole

                @role('admin')
                <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle text-white" aria-expanded="false" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black">
                  <i class="fa fa-users text-white" aria-hidden="true"></i>
                  Psikolog Zyon
                </a>
                <ul class="dropdown-menu mx-5" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item-text text-white" href="/psikolog" style="padding-left: 30px">Daftar Psikolog</a></li>
                  <li><a class="dropdown-item-text text-white" href="/psikolog-tambah" style="padding-left: 30px">Tambah Psikolog</a></li>
                </ul>
                @endrole
              </li>

              <li class="sidebar-item">
                @role('user')
                <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false" href="psikolog">
                  <i class="fa fa-credit-card text-white" aria-hidden="true"></i>
                  <span class="hide-menu text-white">Transaksi</span>
                </a>
                @endrole

                @role('admin')
                <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false" href="/konsultasi">
                  <i class="fa fa-tasks text-white" aria-hidden="true"></i>
                  <span class="hide-menu text-white">Konsultasi</span>
                </a>
                @endrole
              </li>

              <li class="sidebar-item">
                @role('admin')
                <a class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false" href="/transaksi">
                  <i class="fa fa-credit-card text-white" aria-hidden="true"></i>
                  <span class="hide-menu text-white">Transaksi</span>
                </a>
                @endrole
                
              </li>
            </ul>
          </nav>
          
        </div>
        
      </aside>

      <div class="page-wrapper">

        @yield('container')

        <footer class="footer text-center">2021 © Zyon</footer>
  
      </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="dashboard_assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="dashboard_assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="dashboard_assets/js/app-style-switcher.js"></script>
    <script src="dashboard_assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="dashboard_assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dashboard_assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dashboard_assets/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="dashboard_assets/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="dashboard_assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="dashboard_assets/js/pages/dashboards/dashboard1.js"></script>
  </body>
</html>