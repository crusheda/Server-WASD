<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Wasd</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/img/iconwasd.png') }}">
  <!-- Bootstrap Core CSS -->
  <link href="{{ url('/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{ url('/css/style.css') }}" rel="stylesheet">
  <!-- You can change the theme colors from here -->
  <link href="{{ url('/css/colors/blue.css') }}" id="theme" rel="stylesheet">
</head>
<body class="fix-header fix-sidebar card-no-border">
  <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
      </svg>
    </div>
    <div id="main-wrapper">
      <header class="topbar">
        <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <!-- Logo icon -->
              <b>
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img src="{{ url('/img/wasd.png') }}" alt="homepage" class="dark-logo" />
              </b>
            </a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0 ">
              <!-- This is  -->
              <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
              <li class="nav-item hidden-sm-down">
                <form class="app-search p-l-20">
                  <input type="text" class="form-control" placeholder="Search ..."> <a class="srh-btn"><i class="ti-search"></i></a>
                </form>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            {{--  <ul class="navbar-nav my-lg-0">
              <li class="navbar navbar-item dropdown">
                 <a class="nav-link dropdown-toggle text-muted waves-effect white"><img src="{{ url('/img/users/wasd.png') }}" alt="user" class="profile-pic m-r-5" />Admin WASD Clothing</a>
              </li>
            </ul>  --}}
          </div>
        </nav>
      </header>

      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <li>
                <a href="{{ route('dashboard') }}" class="waves-effect"><i class="fa fa-clock-o m-r-10" aria-hidden="true"></i>Dashboard</a>
              </li>
              <li>
                <a href="{{ route('tambahorder') }}" class="waves-effect"><i class="fa fa-cloud-upload m-r-10" aria-hidden="true"></i>Tambah Pesanan</a>
              </li>
              {{-- <li>
                <a href="{{ route('laporan') }}" class="waves-effect"><i class="fa fa-shopping-cart m-r-10" aria-hidden="true"></i>Laporan Pesanan</a>
              </li>
              <li>
                <a href="{{ route('transaksi') }}" class="waves-effect"><i class="fa fa-table m-r-10" aria-hidden="true"></i>Transaksi</a>
              </li>
              <li>
                <a href="{{ route('barang.index') }}" class="waves-effect"><i class="fa fa-cube m-r-10" aria-hidden="true"></i>Barang</a>
              </li>
              <li>
                <a href="{{ route('jenis_barang.index') }}" class="waves-effect"><i class="fa fa-cubes m-r-10" aria-hidden="true"></i>Jenis Barang</a>
              </li> --}}
              <center><button class="btn btn-warning" href="{{ url('/logout') }}" style="bottom:0%;width:150px">Logout</button></center>
            </ul>              
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      
      <div class="page-wrapper">
        <div class="container-fluid">
          <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
              <h3 class="text-themecolor m-b-0 m-t-0">@yield('breadcrump')</h3>
            </div>
            <div class="col-md-6 col-4 align-self-center">
              @yield('action')
            </div>
          </div>
          @yield('content')
        </div>
        <footer class="footer text-center">
          © 2018 WASD Cloth
        </footer>
      </div>
    </div>
     <script src="{{ url('/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ url('/plugins/bootstrap/js/tether.min.js') }}"></script>
    <script src="{{ url('/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ url('/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ url('/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ url('/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ url('/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ url('/js/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ url('/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
    @yield('js')
</body>
</html>
