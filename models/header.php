
 <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DashBoard</title>

    <!-- Bootstrap core CSS-->
    <link href="public/image/catalog/hoa.png" rel="icon" />
    <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- Page level plugin CSS-->
    <link href="public/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="public/css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <?php 
                            $nv = array();
                            if (isset($_SESSION['nv'])) {
                                $nv = $_SESSION['nv'];

                            }else{
                                echo "";
                            }
                            ?>
      <a class="navbar-brand mr-1" href="index.php">DASHBOARD</a>
      <a class="navbar-brand mr-1" href="" style="margin-left: 88px;"> <i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 22px"></i>Nhân Viên: <?php if (isset($nv['name'])) {

                                    echo $nv['name'];
                                }else{
                                    echo "";
                                } ?></a>
      
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <!-- <i class="fas fa-bars"></i> -->
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       <!--  <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div> -->
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-bell" aria-hidden="true"></i>
            <!-- <span class="badge badge-danger">9+</span> -->
          </a>
          <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"> -->
            <!-- <a class="dropdown-item" href="#">Action</a> -->
            <!-- <a class="dropdown-item" href="#">Another action</a> -->
            <!-- <div class="dropdown-divider"></div> -->
            <!-- <a class="dropdown-item" href="#">Something else here</a> -->
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <!-- <span class="badge badge-danger">7</span> -->
          </a>
          <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown"> -->
            <!-- <a class="dropdown-item" href="#">Action</a> -->
            <!-- <a class="dropdown-item" href="#">Another action</a> -->
            <!-- <div class="dropdown-divider"></div> -->
            <!-- <a class="dropdown-item" href="#">Something else here</a> -->
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <!-- <a class="dropdown-item" href="#">Settings</a> -->
            <!-- <a class="dropdown-item" href="#">Activity Log</a> -->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="?mod=login&act=logout" >Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php?">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span>Trang Chủ</span>
          </a>
        </li>
       <!--  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="users.php" id="pagesDropdown" >
            <i class="fas fa-fw fa-folder"></i>
            <span href="">Quản lý người dùng</span>
          </a> -->
         <!--  <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div> -->
        <!-- </li> -->
        <li class="nav-item">
          <a class="nav-link" href="?mod=sale&act=creat_bill">
            <i class="fa fa-shopping-cart"></i>
            <span>Quản Lý Bán Hàng</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?mod=employee&act=list">
            <i class="fa fa-user-plus"></i>
            <span>Quản Lý Nhân Viên</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?mod=customer&act=list">
            <i class="fa fa-users"></i>
            <span>Quản Lý Khách Hàng</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?mod=product&act=list">
            <i class="fa fa-list-alt"></i>
            <span>Quản Lý Sản Phẩm</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?mod=saleOnline&act=hoadon">
            <i class="fa fa-credit-card-alt"></i>
            <span>Quản Lý Hóa Đơn</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?mod=sale&act=bestNV">
            <i class="fa fa-usd"></i>
            <span>Thống Kê Doanh Thu</span></a>
        </li>
      </ul>

      <div id="content-wrapper">


