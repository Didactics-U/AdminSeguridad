<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('titulo')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Data table -->
  <link rel="stylesheet" href='{{url("/plantilla")}}/plugins/datatables/dataTables.bootstrap.css'>
  <!-- Font Awesome -->
  <link rel="stylesheet" href='{{url("/plantilla")}}/plugins/fontawesome-free/css/all.min.css'>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href='{{url("/plantilla")}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'>
  <!-- iCheck -->
  <link rel="stylesheet" href='{{url("/plantilla")}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css'>
  <!-- JQVMap -->
  <link rel="stylesheet" href='{{url("/plantilla")}}/plugins/jqvmap/jqvmap.min.css'>
  <!-- Theme style -->
  <link rel="stylesheet" href='{{url("/plantilla")}}/dist/css/adminlte.min.css'>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href='{{url("/plantilla")}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'>
  <!-- Daterange picker -->
  <link rel="stylesheet" href='{{url("/plantilla")}}/plugins/daterangepicker/daterangepicker.css'>
  <!-- summernote -->
  <link rel="stylesheet" href='{{url("/plantilla")}}/plugins/summernote/summernote-bs4.css'>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src='{{url("/plantilla")}}/dist/img/user1-128x128.jpg' alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src='{{url("/plantilla")}}/dist/img/user8-128x128.jpg' alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src='{{url("/plantilla")}}/dist/img/user3-128x128.jpg' alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @yield('menu')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark"></h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>CUN &COPY; 2019-B</a></strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Corporaci??n Unificada Nacional de Educaci??n Superior</b>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src='{{url("/plantilla")}}/plugins/jquery/jquery.min.js'></script>
<!-- jQuery UI 1.11.4 -->
<script src='{{url("/plantilla")}}/plugins/jquery-ui/jquery-ui.min.js'></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src='{{url("/plantilla")}}/plugins/bootstrap/js/bootstrap.bundle.min.js'></script>
<!-- ChartJS -->
<script src='{{url("/plantilla")}}/plugins/chart.js/Chart.min.js'></script>
<!-- Sparkline -->
<script src='{{url("/plantilla")}}/plugins/sparklines/sparkline.js'></script>
<!-- JQVMap -->
<script src='{{url("/plantilla")}}/plugins/jqvmap/jquery.vmap.min.js'></script>
<script src='{{url("/plantilla")}}/plugins/jqvmap/maps/jquery.vmap.world.js'></script>
<!-- jQuery Knob Chart -->
<script src='{{url("/plantilla")}}/plugins/jquery-knob/jquery.knob.min.js'></script>
<!-- daterangepicker -->
<script src='{{url("/plantilla")}}/plugins/moment/moment.min.js'></script>
<script src='{{url("/plantilla")}}/plugins/daterangepicker/daterangepicker.js'></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src='{{url("/plantilla")}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'></script>
<!-- Summernote -->
<script src='{{url("/plantilla")}}/plugins/summernote/summernote-bs4.min.js'></script>
<!-- overlayScrollbars -->
<script src='{{url("/plantilla")}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'></script>
<!-- AdminLTE App -->
<script src='{{url("/plantilla")}}/dist/js/adminlte.js'></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src='{{url("/plantilla")}}/dist/js/pages/dashboard.js'></script>
<!-- AdminLTE for demo purposes -->
<script src='{{url("/plantilla")}}/dist/js/demo.js'></script>
<!-- Data Table -->
<script src='{{url("/plantilla")}}/plugins/datatables/jquery.dataTables.min.js'></script>
<script src='{{url("/plantilla")}}/plugins/datatables/dataTables.bootstrap.min.js'></script>
@yield('script')
</body>
</html>
