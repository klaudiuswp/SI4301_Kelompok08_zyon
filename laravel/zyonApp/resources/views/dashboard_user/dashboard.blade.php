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

    <!-- Custom CSS -->
    <link href="dashboard_assets/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="dashboard_assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" />
    <!-- Custom CSS -->
    <link href="dashboard_assets/css/style.min.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md" style="color: #233e99">
          <div class="navbar-header" data-logobg="skin6">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="/">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!-- Dark Logo icon -->
                <img src="dashboard_assets/img/Logo.png" alt="homepage" style="width: 200px" />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5" style="padding-right: 2%">
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <div class="navbar-nav ms-auto d-flex align-items-center">
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->

                <!-- Settings Dropdown -->
                @auth
                    <x-jet-dropdown id="settingsDropdown">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <img class="rounded-circle" width="32" height="32" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            @else
                                {{ Auth::user()->name }}

                                <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
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

                            <hr class="dropdown-divider">

                            <!-- Authentication -->

                            
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
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <!-- User Profile-->
              <li class="sidebar-item pt-2">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.html" aria-expanded="false">
                  <i class="far fa-clock text-white" aria-hidden="true"></i>
                  <span class="hide-menu text-white">Dashboard</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="blank.html" aria-expanded="false">
                  <i class="fa fa-columns text-white" aria-hidden="true"></i>
                  <span class="hide-menu text-white">Post</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="riwayat_kosultasi.html" aria-expanded="false">
                  <i class="fa fa-columns text-white" aria-hidden="true"></i>
                  <span class="hide-menu text-white">Riwayat Konsultasi</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black"
                  ><i class="fas fa-users text-white" aria-hidden="true"></i> Users
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item-text text-white" href="admin_user.html" style="padding-left: 30px">Customer</a></li>
                  <li><a class="dropdown-item-text text-white" href="admin_psikolog.html" style="padding-left: 30px">Psikolog</a></li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Three charts -->
          <!-- ============================================================== -->
          <form class="d-flex">
            <input class="form-control me-2" type="text" placeholder="Search" />
            <button class="btn btn-primary" type="button">Search</button>
          </form>
          <br />
          <!-- ============================================================== -->
          <!-- PRODUCTS YEARLY SALES -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
              <div class="white-box">
                <div class="d-md-flex">
                  <ul class="list-inline d-flex ms-auto">
                    <li class="ps-3">
                      <h5><i class="fa fa-circle me-1 text-info"></i>Mac</h5>
                    </li>
                    <li class="ps-3">
                      <h5><i class="fa fa-circle me-1 text-inverse"></i>Windows</h5>
                    </li>
                  </ul>
                </div>
                <div id="ct-visits" style="height: 405px">
                  <div class="chartist-tooltip" style="top: -17px; left: -12px"><span class="chartist-tooltip-value">6</span></div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- RECENT SALES -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
              <div class="white-box">
                <div class="d-md-flex mb-3">
                  <h3 class="box-title mb-0">Recent sales</h3>
                  <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                    <select class="form-select shadow-none row border-top">
                      <option>March 2021</option>
                      <option>April 2021</option>
                      <option>May 2021</option>
                      <option>June 2021</option>
                      <option>July 2021</option>
                    </select>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table no-wrap">
                    <thead>
                      <tr>
                        <th class="border-top-0">#</th>
                        <th class="border-top-0">Name</th>
                        <th class="border-top-0">Status</th>
                        <th class="border-top-0">Date</th>
                        <th class="border-top-0">Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td class="txt-oflo">Elite admin</td>
                        <td>SALE</td>
                        <td class="txt-oflo">April 18, 2021</td>
                        <td><span class="text-success">$24</span></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td class="txt-oflo">Real Homes WP Theme</td>
                        <td>EXTENDED</td>
                        <td class="txt-oflo">April 19, 2021</td>
                        <td><span class="text-info">$1250</span></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td class="txt-oflo">Ample Admin</td>
                        <td>EXTENDED</td>
                        <td class="txt-oflo">April 19, 2021</td>
                        <td><span class="text-info">$1250</span></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td class="txt-oflo">Medical Pro WP Theme</td>
                        <td>TAX</td>
                        <td class="txt-oflo">April 20, 2021</td>
                        <td><span class="text-danger">-$24</span></td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td class="txt-oflo">Hosting press html</td>
                        <td>SALE</td>
                        <td class="txt-oflo">April 21, 2021</td>
                        <td><span class="text-success">$24</span></td>
                      </tr>
                      <tr>
                        <td>6</td>
                        <td class="txt-oflo">Digital Agency PSD</td>
                        <td>SALE</td>
                        <td class="txt-oflo">April 23, 2021</td>
                        <td><span class="text-danger">-$14</span></td>
                      </tr>
                      <tr>
                        <td>7</td>
                        <td class="txt-oflo">Helping Hands WP Theme</td>
                        <td>MEMBER</td>
                        <td class="txt-oflo">April 22, 2021</td>
                        <td><span class="text-success">$64</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- Recent Comments -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- .col -->
            <div class="col-md-12 col-lg-8 col-sm-12">
              <div class="card white-box p-0">
                <div class="card-body">
                  <h3 class="box-title mb-0">Recent Comments</h3>
                </div>
                <div class="comment-widgets">
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row p-3 mt-0">
                    <div class="p-2"><img src="plugins/images/users/varun.jpg" alt="user" width="50" class="rounded-circle" /></div>
                    <div class="comment-text ps-2 ps-md-3 w-100">
                      <h5 class="font-medium">James Anderson</h5>
                      <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                      <div class="comment-footer d-md-flex align-items-center">
                        <span class="badge bg-primary rounded">Pending</span>

                        <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">April 14, 2021</div>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row p-3">
                    <div class="p-2"><img src="plugins/images/users/genu.jpg" alt="user" width="50" class="rounded-circle" /></div>
                    <div class="comment-text ps-2 ps-md-3 active w-100">
                      <h5 class="font-medium">Michael Jorden</h5>
                      <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                      <div class="comment-footer d-md-flex align-items-center">
                        <span class="badge bg-success rounded">Approved</span>

                        <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">April 14, 2021</div>
                      </div>
                    </div>
                  </div>
                  <!-- Comment Row -->
                  <div class="d-flex flex-row comment-row p-3">
                    <div class="p-2"><img src="plugins/images/users/ritesh.jpg" alt="user" width="50" class="rounded-circle" /></div>
                    <div class="comment-text ps-2 ps-md-3 w-100">
                      <h5 class="font-medium">Johnathan Doeting</h5>
                      <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry.It has survived not only five centuries. </span>
                      <div class="comment-footer d-md-flex align-items-center">
                        <span class="badge rounded bg-danger">Rejected</span>

                        <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">April 14, 2021</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="card white-box p-0">
                <div class="card-heading">
                  <h3 class="box-title mb-0">Chat Listing</h3>
                </div>
                <div class="card-body">
                  <ul class="chatonline">
                    <li>
                      <div class="call-chat">
                        <button class="btn btn-success text-white btn-circle btn" type="button">
                          <i class="fas fa-phone"></i>
                        </button>
                        <button class="btn btn-info btn-circle btn" type="button">
                          <i class="far fa-comments text-white"></i>
                        </button>
                      </div>
                      <a href="javascript:void(0)" class="d-flex align-items-center"
                        ><img src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle" />
                        <div class="ms-2">
                          <span class="text-dark">Varun Dhavan <small class="d-block text-success d-block">online</small></span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="call-chat">
                        <button class="btn btn-success text-white btn-circle btn" type="button">
                          <i class="fas fa-phone"></i>
                        </button>
                        <button class="btn btn-info btn-circle btn" type="button">
                          <i class="far fa-comments text-white"></i>
                        </button>
                      </div>
                      <a href="javascript:void(0)" class="d-flex align-items-center"
                        ><img src="plugins/images/users/genu.jpg" alt="user-img" class="img-circle" />
                        <div class="ms-2">
                          <span class="text-dark">Genelia Deshmukh <small class="d-block text-warning">Away</small></span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="call-chat">
                        <button class="btn btn-success text-white btn-circle btn" type="button">
                          <i class="fas fa-phone"></i>
                        </button>
                        <button class="btn btn-info btn-circle btn" type="button">
                          <i class="far fa-comments text-white"></i>
                        </button>
                      </div>
                      <a href="javascript:void(0)" class="d-flex align-items-center"
                        ><img src="plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle" />
                        <div class="ms-2">
                          <span class="text-dark">Ritesh Deshmukh <small class="d-block text-danger">Busy</small></span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="call-chat">
                        <button class="btn btn-success text-white btn-circle btn" type="button">
                          <i class="fas fa-phone"></i>
                        </button>
                        <button class="btn btn-info btn-circle btn" type="button">
                          <i class="far fa-comments text-white"></i>
                        </button>
                      </div>
                      <a href="javascript:void(0)" class="d-flex align-items-center"
                        ><img src="plugins/images/users/arijit.jpg" alt="user-img" class="img-circle" />
                        <div class="ms-2">
                          <span class="text-dark">Arijit Sinh <small class="d-block text-muted">Offline</small></span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="call-chat">
                        <button class="btn btn-success text-white btn-circle btn" type="button">
                          <i class="fas fa-phone"></i>
                        </button>
                        <button class="btn btn-info btn-circle btn" type="button">
                          <i class="far fa-comments text-white"></i>
                        </button>
                      </div>
                      <a href="javascript:void(0)" class="d-flex align-items-center"
                        ><img src="plugins/images/users/govinda.jpg" alt="user-img" class="img-circle" />
                        <div class="ms-2">
                          <span class="text-dark">Govinda Star <small class="d-block text-success">online</small></span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="call-chat">
                        <button class="btn btn-success text-white btn-circle btn" type="button">
                          <i class="fas fa-phone"></i>
                        </button>
                        <button class="btn btn-info btn-circle btn" type="button">
                          <i class="far fa-comments text-white"></i>
                        </button>
                      </div>
                      <a href="javascript:void(0)" class="d-flex align-items-center"
                        ><img src="plugins/images/users/hritik.jpg" alt="user-img" class="img-circle" />
                        <div class="ms-2">
                          <span class="text-dark">John Abraham<small class="d-block text-success">online</small></span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /.col -->
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">2021 © Zyon</footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
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