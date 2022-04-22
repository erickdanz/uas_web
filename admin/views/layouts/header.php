<?php
    $link = $_SERVER['PHP_SELF'];
    $link_array = explode('/',$link);
    $page = end($link_array);
    $base_url=$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'; 
    $arr_url = explode('/',$base_url);
    $base_url_config = "http://".implode('/',[$arr_url[0],$arr_url[1]]);
    $base_file = implode('/',[$arr_url[0],$arr_url[1]]);
    session_start();
    if(!(isset($_SESSION['logged_in']))){
        return header('Location: '.$base_url_config.'/admin/views/auth/login.php');
    }
    else if($_SESSION['role'] != 'admin'){
        return header('Location: '.$base_url_config.'/admin/views/auth/login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN PAGE</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="../dist/css/custom.css">
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script src="../plugins/jquery/jquery.min.js"></script>
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN MITIX</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" data-toggle="modal" data-target="#logout" class="d-block"><?php echo $_SESSION['username']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item <?php if(strpos($page,"lc") != "") echo "menu-open"; ?>">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-map"></i>
                  <p>
                    Location
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="addlc.php" class="nav-link <?php if($page == "addlc.php") echo "active";?>">
                        <i class="fa fa-plus nav-icon"></i>
                            <p>
                                Add New Location
                            </p>
                        </a>
                    </li>
                  <li class="nav-item">
                    <a href="managelc.php" class="nav-link">
                      <i class="fa fa-info nav-icon"></i>
                      <p>Manage Location</p>
                    </a>
                  </li>
                </ul>
            </li>  
          <li class="nav-item <?php if(strpos($page,"std") != "") echo "menu-open"; ?>">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Studio
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="addstd.php" class="nav-link <?php if($page == "addstd.php") echo "active";?>">
                      <i class="fa fa-plus nav-icon"></i>
                          <p>
                              Add New Studio
                          </p>
                      </a>
                  </li>
                <li class="nav-item">
                  <a href="deletestd.php" class="nav-link <?php if($page == "deletestd.php") echo "active";?>">
                    <i class="fa fa-info nav-icon"></i>
                    <p>Manage Studio</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item <?php if(strpos($page,"film") != "") echo "menu-open"; ?>">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-film"></i>
                <p>
                  Film
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="addfilm.php" class="nav-link <?php if($page == "addfilm.php") echo "active";?>">
                      <i class="fa fa-plus nav-icon"></i>
                          <p>
                              Add Film
                          </p>
                      </a>
                  </li>
                <li class="nav-item">
                  <a href="deletefilm.php" class="nav-link <?php if($page == "deletefilm.php") echo "active";?>">
                    <i class="fa fa-edit nav-icon"></i>
                    <p>Manage Film</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item <?php if(strpos($page,"shows") != "") echo "menu-open"; ?>">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-film"></i>
                <p>
                  Shows
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a type="button" data-toggle="modal" data-target="#add_shows" class="nav-link">
                      <i class="fa fa-plus nav-icon"></i>
                          <p>
                              Add Shows
                          </p>
                      </a>
                  </li>
                <li class="nav-item">
                  <a href="manageshows.php" class="nav-link <?php if($page == "manageshows.php") echo "active";?>">
                    <i class="fa fa-edit nav-icon"></i>
                    <p>Manage Shows</p>
                  </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
              <a href="invoice.php" class="nav-link <?php if($page == "invoice.php") echo "active";?>">
                <i class="nav-icon fas fa-file-invoice"></i>
                <p>
                  Invoice
                </p>
              </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="logoutLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="logoutLabel">Konfirmasi Keluar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="auth/logout.php" method="POST">
                <div class="alert alert-danger">
                    Apakah anda yakin ingin keluar ? 
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success">Yes</button>
              </div>
          </form>
      </div>
    </div>
</div>
  <?php 
    include ('modals/add_shows.php');
  ?>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </symbol>
      <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
      </symbol>
      <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </symbol>
  </svg>
  <!-- <?php 
    if(isset($_SESSION['success'])){
        ?>
        <div class="alert alert-success d-flex alert-dismissible align-items-center text-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div>
                <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>                        
            </div>
        </div>
        <?php
    }
    else if (isset($_SESSION['error'])){
        ?>
        <div class="alert alert-danger d-flex alert-dismissible align-items-center text-center" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
                <?php 
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
            </div>
        </div>
        <?php
    }
?> -->