@extends('layouts.app')

@section('content')

<!--<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Admin - Dashboard</title>-->

  <!-- Custom fonts for this template-->
  <!--<link href="../assest/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">-->

  <!-- Custom styles for this template-->
  <!--<link href="../assest/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">-->

<div class="container">
    <div class="row justify-content-center">
        <!--<div class="col-md-8">-->

            <div class="card">
              <!-- Page Wrapper -->
  <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3 ">Admin Dashboard</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="dashboard">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>

  <!-- Nav Item - admin Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Profile </span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <!--<h6 class="collapse-header">Custom Components:</h6>-->
        <a class="collapse-item" href="dashboard/role-register">User profile</a>
        <!--<a class="collapse-item" href="dashboard/cards">Cards</a>
      </div>-->
    </div>
  </li>

  <!-- Nav Item - doctors Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDoctors" aria-expanded="true" aria-controls="collapseDoctors">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Doctors</span>
    </a>
    <div id="collapseDoctors" class="collapse" aria-labelledby="headingDoctors" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Components:</h6>
        <a class="collapse-item" href="dashboard/utilities-color">Doctor Management</a>
        <!--<a class="collapse-item" href="dashboard/utilities-border">Borders</a>
        <a class="collapse-item" href="dashboard/utilities-animation">Animations</a>
        <a class="collapse-item" href="dashboard/utilities-other">Other</a>-->
      </div>
    </div>
  </li>

  <!-- Divider -->
  <!--<hr class="sidebar-divider">-->

  <!-- Heading -->
  <!--<div class="sidebar-heading">
    Addons
  </div>-->

  <!-- Nav Item - patient Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePatient" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-folder"></i>
      <span>Patient</span>
    </a>
    <div id="collapsePatient" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <!--<h6 class="collapse-header">Custom Components:</h6>-->
        <a class="collapse-item" href="dashboard/utilities-other">Patient Management</a>
        <!--<a class="collapse-item" href="dashboard/register">Register</a>
        <a class="collapse-item" href="dashboard/forgot-password">Forgot Password</a>
        <div class="collapse-divider"></div>-->
        <!--<h6 class="collapse-header">Other Pages:</h6>
        <a class="collapse-item" href="dashboard/404">404 Page</a>
        <a class="collapse-item" href="dashboard/blank">Blank Page</a>-->
      </div>
    </div>
  </li>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-folder"></i>
      <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Login Screens:</h6>
        <a class="collapse-item" href="dashboard/login">Login</a>
        <a class="collapse-item" href="dashboard/register">Register</a>
        <a class="collapse-item" href="dashboard/forgot-password">Forgot Password</a>
        <div class="collapse-divider"></div>
        <!--<h6 class="collapse-header">Other Pages:</h6>
        <a class="collapse-item" href="dashboard/404">404 Page</a>
        <a class="collapse-item" href="dashboard/blank">Blank Page</a>-->
      </div>
    </div>
  </li>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="dashboard/charts">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Charts</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="dashboard/tables">
      <i class="fas fa-fw fa-table"></i>
      <span>Tables</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<!--<div id="content-wrapper" class="d-flex flex-column">-->

  <!-- Main Content -->
  <!--<div id="content">-->

    <!-- Topbar -->
    <!--<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">-->

      <!-- Sidebar Toggle (Topbar) -->
      <!--<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>-->

      <!-- Topbar Search -->
      <!--<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form>-->

      <!-- Topbar Navbar -->
      <!--<ul class="navbar-nav ml-auto">-->

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <!--<li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
          
          </a>-->
          
          <!-- Dropdown - Messages -->
          <!--<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>-->

        <!-- Nav Item - Alerts -->
        

        <!-- Nav Item - Messages -->
        
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
      </div>

      <!-- Content Row -->
      <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Years of Experiences</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Qualified Dentist</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Happy Smilling Customers</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">40 per day</div>
                    </div>
                    <div class="col">
                      <div class="progress progress-sm mr-2">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Patients per Year</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">14,600</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Content Row -->
<div class="container">
      <div class="row">
      <div class="col-md-12">
      <div class="card border-primary">
      <div class="card-header bg-primary text-white md-3">
      <h3>Edit Role For Registered User</h3>
      </div>
      
      <div class="card-body ">
      <div class="row">
      <div class="col-md-6">

      <form action="/role-register-update/{{$users->id }}" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}

      <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="username" value="{{$users->name}}">
  </div>

  <div class="form-group">
  <label >Give Role</label>
  <select name="usertype" class="form-control" >
  <option value="admin">Admin</option>
  <option value="doctor">Doctor</option>

  </select>
  </div>
  <button type="submit" class="btn btn-success">Update</button>
  <a href="/dashboard/role-register" class="btn btn-danger">Cancel</a>

      </form>
      </div>
      
      </div>
      
      </div>

      <div class="card-footer">
      
      </div>


      </div>
      </div></div></div>
        

        <div class="col-lg-6 mb-4">

          <!-- Illustrations -->
         

  </div>
  <!-- End of Main Content -->

  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <!--<span>Copyright &copy; Your Website 2019</span>-->
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      <a class="btn btn-primary" href="dashboard/login">Logout</a>
    </div>
  </div>
</div>
</div>
                <!--<div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>-->
            </div>
        </div>
    </div>
</div>


<!--<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Admin - Dashboard</title>-->

  <!-- Custom fonts for this template-->
  <!--<link href="../assest/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">-->

  <!-- Custom styles for this template-->
  <!--<link href="../assest/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">-->

  

  <!-- Bootstrap core JavaScript-->
  <!--<script src="../assest/vendor/jquery/jquery.min.js"></script>
  <script src="../assest/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->

  <!-- Core plugin JavaScript-->
  <script src="../assest/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assest/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../assest//chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../assest/js/demo/chart-area-demo.js"></script>
  <script src="../assest/js/demo/chart-pie-demo.js"></script>

</body>

</html>


@endsection
