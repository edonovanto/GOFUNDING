<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Gogogo Group">

    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon.png">

    <title>{{ config('app.name', 'Gofunding') }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="/css/colors/gofund.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!-- Light Logo icon -->
                            <img src="/images/logo-icon.png" alt="homepage" class="light-logo" style="height: 65px;"/>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- Light Logo text -->    
                         <img src="/images/logo-text.png" class="light-logo" alt="homepage" style="height: 60px;"/></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-navicon"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        <li class="nav-item"><a href="#" class="nav-link dropdown-toggle text-muted waves-effect waves-dark ttl cred"><i class="fa fa-sign-out"></i><span>&nbsp; Logout</span></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="/images/users/profile.png" alt="user" /> 
                             <!-- this is blinking heartbit-->
                            <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text"> 
                            <h5>Markarn Doe</h5>
                            <p class="prodi">Metrologi dan Instrumentasi Komputer Sistem Informasi</p>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                         <li class="nav-devider"></li>
                        <li class="nav-small-cap">PROFIL</li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Edit Profil</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Ganti Password</span></a>
                        </li>
                        
                        <li class="nav-small-cap">PROPOSAL</li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Mengajukan Proposal</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Format Proposal</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Riwayat Pengajuan</span></a>
                        </li>
                        
                        <li class="nav-small-cap">PENGATURAN</li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Ubah Bahasa</span></a>
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
          <div class="row page-titles">
            @yield('title')              
          </div>
          <!-- ============================================================== -->
          <!-- End Bread crumb and right sidebar toggle -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Container fluid  -->
          <!-- ============================================================== -->
          <div class="container-fluid">
              <!-- ============================================================== -->
              <!-- Start Page Content -->
              <!-- ============================================================== -->
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                            @yield('content')
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ============================================================== -->
              <!-- End PAge Content -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Right sidebar -->
              <!-- ============================================================== -->
              <!-- .right-sidebar -->
              <div class="right-sidebar">
                  <div class="slimscrollright">
                      <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                      <div class="r-panel-body">
                          <ul id="themecolors" class="m-t-20">
                              <li><b>With Light sidebar</b></li>
                              <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                              <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                              <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                              <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                              <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                              <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                              <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                              <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                              <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                              <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                              <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                              <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                              <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                          </ul>
                          <ul class="m-t-20 chatonline">
                              <li><b>Chat option</b></li>
                              <li>
                                  <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                              </li>
                              <li>
                                  <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <!-- ============================================================== -->
              <!-- End Right sidebar -->
              <!-- ============================================================== -->
          </div>
          <!-- ============================================================== -->
          <!-- End Container fluid  -->
          <!-- ============================================================== -->
          <footer class="footer">
              © 2019 Gofunding by Gogogo Group. All rights reserved.
          </footer>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/plugins/bootstrap/js/popper.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="/plugins/styleswitcher/jQuery.style.switcher.js"></script>

  </body>
</html>
