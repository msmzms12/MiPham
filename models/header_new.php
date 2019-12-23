<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="public/image/catalog/hoa.png" rel="icon" />
    <!-- Bootstrap core CSS     -->
    <link href="public/BS3/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="public/BS3/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="public/BS3/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="public/BS3/assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="public/BS3/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

            <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="" class="simple-text">
                      ADMIN SHOP
                  </a>
              </div>

              <ul class="nav">
                <li>
                    <a href="http://phamvantai.net/hw.php16.zent/Froject/">
                        <i class="pe-7s-graph"></i>
                        <p>Trang Chủ</p>
                    </a>
                </li>
                <li>
                    <a href="?mod=sale&act=creat_bill">
                        <i class="pe-7s-user"></i>
                        <p>Quản Lý Bán Hàng</p>
                    </a>
                </li>
                <li>
                    <a href="?mod=employee&act=list">
                        <i class="pe-7s-note2"></i>
                        <p>Quản Lý Nhân Viên</p>
                    </a>
                </li>
                <li>
                    <a href="?mod=customer&act=list">
                        <i class="pe-7s-map-marker"></i>
                        <p>quản lý khách hàng</p>
                    </a>
                </li>
                <li>
                    <a href="?mod=product&act=list">
                        <i class="pe-7s-science"></i>
                        <p>quản lý sản phảm</p>
                    </a>
                </li>
                <li>
                    <a href="?mod=saleOnline&act=hoadon">
                       <i class="pe-7s-bell"></i>
                       <!-- <i class="pe-7s-rocket"></i> -->
                       <p>quản lý hóa đơn</p>
                   </a>
               </li>
               <li class="">
                <a href="?mod=sale&act=bestNV">
                    <!-- <i class="pe-7s-news-paper"></i> -->
                    <i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 22px"></i>
                    <p>thống kê doanh thu</p>
                </a>
            </li>
               <!--  <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>

    <div class="main-panel">
      <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                   <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> -->
                    <!--   <a class="navbar-brand" href="#">Maps</a> -->
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                       <!--  <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                          </li> -->
                          <li>
                            <?php 
                            $nv = array();
                            if (isset($_SESSION['nv'])) {
                                $nv = $_SESSION['nv'];

                            }else{
                                echo "";
                            }
                            ?>
                            
                            <a href="">
                            <i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 22px"></i>

                                Nhân Viên: <?php if (isset($nv['name'])) {

                                    echo $nv['name'];
                                }else{
                                    echo "";
                                } ?>
                                <!-- <i class="fa fa-search"></i> -->
                                <!-- <p class="hidden-lg hidden-md">Search</p> -->
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                       <!--  <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li> -->
                      <!--   <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                          </li> -->
                          <li>
                            <a href="?mod=login&act=logout">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>