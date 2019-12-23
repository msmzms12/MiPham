<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1 ,maximum-scale=1, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$result['name']?></title>
  <base href="" />



<!--  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>  -->
  <script src="public/catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
  <script src="public/catalog/view/javascript/jquery/jquery-ui.js" type="text/javascript"></script> 
  <link href="public/catalog/view/javascript/jquery/css/jquery-ui.css" rel="stylesheet" media="screen" />
  <link href="public/catalog/view/theme/tt_valeri2/stylesheet/opentheme/oclayerednavigation/css/oclayerednavigation.css" rel="stylesheet"> 
  <script src="public/catalog/view/javascript/opentheme/oclayerednavigation/oclayerednavigation.js" type="text/javascript"></script>
  <link href="public/catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
  <script src="public/catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <link href="public/catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="public/catalog/view/theme/tt_valeri2/stylesheet/stylesheet.css" rel="stylesheet">
  <link href="public/catalog/view/theme/tt_valeri2/stylesheet/opentheme/ocslideshow/ocslideshow.css" rel="stylesheet" />
  <script src="public/catalog/view/javascript/opentheme/ocslideshow/jquery.nivo.slider.js" type="text/javascript"></script>
  <link href="public/catalog/view/theme/tt_valeri2/stylesheet/opentheme/hozmegamenu/css/custommenu.css" rel="stylesheet" />
  <!-- <script src="catalog/view/javascript/opentheme/hozmegamenu/mobile_menu.js" type="text/javascript"></script> -->
  <script src="public/catalog/view/javascript/opentheme/hozmegamenu/custommenu.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="public/catalog/view/theme/tt_valeri2/stylesheet/opentheme/ocquickview/css/ocquickview.css">
  <script src="public/catalog/view/javascript/opentheme/ocquickview/ocquickview.js" type="text/javascript"></script>
  <script src="public/catalog/view/javascript/opentheme/owl-carousel/owl.carousel.js" type="text/javascript"></script>
  <link href="public/catalog/view/theme/tt_valeri2/stylesheet/opentheme/css/owl.carousel.css" rel="stylesheet" />
  <script src="public/catalog/view/javascript/jquery/elevatezoom/jquery.elevatezoom.js" type="text/javascript"></script>
  <link href="public/catalog/view/theme/tt_valeri2//stylesheet/opentheme/css/animate.css" rel="stylesheet" />
  <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->
  <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQR6Szd2sBV2-1MQXmdAKRHWHa3tNnuH8" type="text/javascript"></script> -->

  <link href="public/catalog/view/javascript/jquery/magnific/magnific-popup.css" type="text/css" rel="stylesheet" media="screen" />
  <link href="public/catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
  <script src="public/catalog/view/javascript/common.js" type="text/javascript"></script>
  <link href="index.php?route=product/product&amp;product_id=44" rel="canonical" />
  <link href="public/image/catalog/hoa.png" rel="icon" />
  <script src="public/catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js" type="text/javascript"></script>
  <script src="public/catalog/view/javascript/jquery/datetimepicker/moment.js" type="text/javascript"></script>
  <script src="public/catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
</head>
<body class="product-product-44">
  <div class="header-content">
    <nav id="top">
      <div class="container">
        <div class="container-ink">
          <div class="row">
            <div class="col-sm-6 col-xs-12">
             <div class="top-contact">
              <ul class="top-links-left">
                <li>
                  <a href="index.php?">Home</a> 
                </li>
                <li>
                  <a href="#">About Us</a>
                </li>
                <li>
                  <a href="">Contact Us</a> 
                </li>
                <li>
                  <a href="">buy theme</a> 
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-xs-12 col-sm-6">
            <div class="top-links-right">
              <div class="pull-left">
                <form action="" method="post" enctype="multipart/form-data" id="form-currency">
                  <div class="btn-group">
                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                      <strong>$</strong>
                      <?php 
                      $kh = array();
                      if (isset($_SESSION['kh'])) {
                        $kh = $_SESSION['kh'];

                      }else{
                        echo "";
                      }
                      ?>
                      <span class="" style="color: black;font-size: 11px; "><?php if (isset($kh['name'])) {

                        echo $kh['name'];
                      }else{
                        echo "";
                      } ?></span> 
                    </button>
                   <!--  <ul class="dropdown-menu">
                      <li><button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ EUR</button></li>
                      <li><button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ GBP</button></li>
                      <li><button class="currency-select btn btn-link btn-block" type="button" name="USD">$ USD</button></li>
                    </ul> -->
                  </div>
                  <input type="hidden" name="code" value="" />
                  <input type="hidden" name="redirect" value="" />
                </form>
              </div>
              <div class="dropdown top-account">
                <a href="" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><span class="">My Account</span><i class="fa fa-angle-down "></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="?mod=login&act=formloginKH">Login</a></li>
                  <li><a href="?mod=login&act=logoutKH">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12 left-content-top">
          <div id="logo">
            <a href=""><img src="public/image/catalog/logo_1.png" title="Valeri 2 - Reposive Opencart Themes" alt="Valeri 2 - Reposive Opencart Themes" class="img-responsive" /></a>
          </div>
        </div>
        <div class="col-md-9 col-sm-12">
          <div class="quick-access">
            <div class="top-cart-content"><div id="cart" class="btn-group btn-block">
              <button type="button" onclick="window.location.href='?mod=saleOnline&act=cart'"  data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><span id="cart-total"><span class="icon_bag_alt"></span><span class="text-top-cart">shopping cart</span><span class="item-top-cart"><?php 
            $cartO = $_SESSION['cartO'];
           
             echo count($cartO);
           
          ?><span> $0.00</span></span></span></button>
              
              </div>
            </div>
            <div class="top-search-content"><div id="search" class="input-group">
              <input type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
              <span class="input-group-btn">
                <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
              </span>
            </div></div>
            <div class="ma-nav-mobile-container visible-sm visible-xs">
             <div class="hozmenu">
              <div class="navbar">
               <div id="navbar-inner" class="navbar-inner navbar-inactive">
                <div class="menu-mobile">
                  <a class="btn btn-navbar navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <span class="brand navbar-brand"></span>
                </div>
                <ul id="ma-mobilemenu" class="mobilemenu nav-collapse collapse"><li><span class=" button-view1 collapse1"><a href="">Women</a></span><ul class="level2"><li><span class="button-view2   collapse1"><a href="">Bottom</a></span><ul class="level3"><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=77">Crochets</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=76">hoodiess</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=78">Slovess</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=75">Strips</a></span></li></ul></li><li><span class="button-view2   collapse1"><a href="index.php?route=product/category&amp;path=74">weater</a></span><ul class="level3"><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=80">Short Slevers</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=82">sleeveess</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=79">Tops &amp; teess</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=81">trousers</a></span></li></ul></li><li><span class="button-view2   collapse1"><a href="index.php?route=product/category&amp;path=26">Jewelrys</a></span><ul class="level3"><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=87"> ring</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=90">ankle bracelet</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=89">bracelet</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=88">eardrop</a></span></li></ul></li><li><span class="button-view2   collapse1"><a href="index.php?route=product/category&amp;path=27">dress</a></span><ul class="level3"><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=83">long dress</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=86">prom dresses</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=85">Short dress</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=84">waist cloth</a></span></li></ul></li></ul></li><li><span class=" button-view1 collapse1"><a href="index.php?route=product/category&amp;path=18">Laptops &amp; Notebooks</a></span><ul class="level2"><li><span class="button-view2   no-close"><a href="index.php?route=product/category&amp;path=46">Macs</a></span><ul class="level3"></ul></li><li><span class="button-view2   no-close"><a href="index.php?route=product/category&amp;path=45">Windows</a></span><ul class="level3"></ul></li></ul></li><li><span class=" button-view1 no-close"><a href="index.php?route=product/category&amp;path=25">Kids</a></span><ul class="level2"></ul></li><li><span class=" button-view1 collapse1"><a href="index.php?route=product/category&amp;path=57">Men</a></span><ul class="level2"><li><span class="button-view2   collapse1"><a href="index.php?route=product/category&amp;path=28">Jackets</a></span><ul class="level3"><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=60">Fashion Jackets</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=59">Graphic T-Shirts</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=36">Polo Short Sleeve</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=35">Tops &amp; Tees</a></span></li></ul></li><li><span class="button-view2   collapse1"><a href="index.php?route=product/category&amp;path=29">Jeans</a></span><ul class="level3"><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=64">Crochet</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=61">Hoodies</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=63">Stripes</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=62">Sweaters</a></span></li></ul></li><li><span class="button-view2   collapse1"><a href="index.php?route=product/category&amp;path=30">Shirts</a></span><ul class="level3"><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=67">Floral</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=65">Shorts</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=66">Stripes</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=68">Vest</a></span></li></ul></li><li><span class="button-view2   collapse1"><a href="index.php?route=product/category&amp;path=31">Tops</a></span><ul class="level3"><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=72">Bag</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=69">Cavat</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=71">Glass</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=70">Hat</a></span></li></ul></li></ul></li><li><span class=" button-view1 no-close"><a href="index.php?route=product/category&amp;path=17">Jewellry</a></span><ul class="level2"></ul></li><li><span class=" button-view1 no-close"><a href="index.php?route=product/category&amp;path=24">Accessories</a></span><ul class="level2"></ul></li></ul>			</div>
              </div>
            </div>
          </div>
          <div class="nav-container visible-lg visible-md">
           <div class="nav1">
            <div class="nav2">
             <div id="pt_custommenu" class="pt_custommenu">
               <div id="pt_menu_home" class="pt_menu"><div class="parentMenu"><a href="index.php?"><span>Home</span></a></div></div><div id="pt_menu57" class="pt_menu nav-1">
                <div class="parentMenu">
                  <a href="">
                    <span>Men</span>
                  </a>
                </div>
                <div id="popup57" class="popup" style="display: none; width: 1228px;">
                  <div class="block1" id="block157">
                    <div class="column first col1"><div class="itemMenu level1"><a class="itemMenuName level0 actParent" href=""><span>Jackets</span></a><div class="itemSubMenu level0"><div class="itemMenu level1"><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=60"><span>Jackets</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=59"><span>Graphic&nbsp;T-Shirts</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=36"><span>Polo&nbsp;Short&nbsp;Sleeve</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=35"><span>Tops&nbsp;&amp;&nbsp;Tees</span></a></div></div></div></div><div class="column col2"><div class="itemMenu level1"><a class="itemMenuName level0 actParent" href="index.php?route=product/category&amp;path=29"><span>Skincare</span></a><div class="itemSubMenu level0"><div class="itemMenu level1"><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=64"><span>Crochet</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=61"><span>Hoodies</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=63"><span>Stripes</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=62"><span>Sweaters</span></a></div></div></div></div><div class="column col3"><div class="itemMenu level1"><a class="itemMenuName level0 actParent" href="index.php?route=product/category&amp;path=30"><span>Shirts</span></a><div class="itemSubMenu level0"><div class="itemMenu level1"><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=67"><span>Floral</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=65"><span>Shorts</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=66"><span>Stripes</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=68"><span>Vest</span></a></div></div></div></div><div class="column last col4"><div class="itemMenu level1"><a class="itemMenuName level0 actParent" href="index.php?route=product/category&amp;path=31"><span>Tops</span></a><div class="itemSubMenu level0"><div class="itemMenu level1"><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=72"><span>Bag</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=69"><span>Cavat</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=71"><span>Glass</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=70"><span>Hat</span></a></div></div></div></div>
                    <div class="clearBoth"></div>
                  </div>
                  <div class="block2" id="block257">
                    <div class="img-hozmegamenu"><a href="#"> <!-- <img src="image/catalog/demo/img-block/block-menu.jpg" alt="#"> --></a></div>										
                  </div>
                </div>
              </div><div id="pt_menu20" class="pt_menu nav-2">
                <div class="parentMenu">
                  <a href="index.php?route=product/category&amp;path=20">
                    <span>Women</span>
                  </a>
                </div>
                <div id="popup20" class="popup" style="display: none; width: 1228px;">
                  <div class="block1" id="block120">
                    <div class="column first col1"><div class="itemMenu level1"><a class="itemMenuName level0 actParent" href="index.php?route=product/category&amp;path=73"><span>Bottom</span></a><div class="itemSubMenu level0"><div class="itemMenu level1"><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=77"><span>Crochets</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=76"><span>hoodiess</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=78"><span>Slovess</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=75"><span>Strips</span></a></div></div></div></div><div class="column col2"><div class="itemMenu level1"><a class="itemMenuName level0 actParent" href="index.php?route=product/category&amp;path=74"><span>weater</span></a><div class="itemSubMenu level0"><div class="itemMenu level1"><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=80"><span>Short&nbsp;Slevers</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=82"><span>sleeveess</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=79"><span>Tops&nbsp;&amp;&nbsp;teess</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=81"><span>trousers</span></a></div></div></div></div><div class="column col3"><div class="itemMenu level1"><a class="itemMenuName level0 actParent" href="index.php?route=product/category&amp;path=26"><span>Jewelrys</span></a><div class="itemSubMenu level0"><div class="itemMenu level1"><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=87"><span>&nbsp;ring</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=90"><span>ankle&nbsp;bracelet</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=89"><span>bracelet</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=88"><span>eardrop</span></a></div></div></div></div><div class="column last col4"><div class="itemMenu level1"><a class="itemMenuName level0 actParent" href="index.php?route=product/category&amp;path=27"><span>dress</span></a><div class="itemSubMenu level0"><div class="itemMenu level1"><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=83"><span>long&nbsp;dress</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=86"><span>prom&nbsp;dresses</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=85"><span>Short&nbsp;dress</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=84"><span>waist&nbsp;cloth</span></a></div></div></div></div>
                    <div class="clearBoth"></div>
                  </div>
                </div>
              </div><div id="pt_menu25" class="pt_menu nav-3 pt_menu_no_child">
                <div class="parentMenu">
                  <a href="">
                    <span>Kids</span>
                  </a>
                </div>
              </div><div id="pt_menu17" class="pt_menu nav-4 pt_menu_no_child">
                <div class="parentMenu">
                  <a href="">
                    <span>Jewellry</span>
                  </a>
                </div>
              </div><div id="pt_menu24" class="pt_menu nav-5 pt_menu_no_child">
                <div class="parentMenu">
                  <a href="?mod=saleOnline&act=contact">
                    <span>Contact</span>
                  </a>
                </div>
              </div>			</div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
//<![CDATA[
var body_class = $('body').attr('class'); 
if(body_class == 'common-home') {
  $('#pt_menu_home').addClass('act');
}

var CUSTOMMENU_POPUP_EFFECT = 0;
var CUSTOMMENU_POPUP_TOP_OFFSET = 28

//]]>
</script>
<script type="text/javascript">
	$(function () {
    $(window).scroll(function () {
     if ($(this).scrollTop() > 250) {
      $('.nav-container').addClass("fix-nav");
    } else {
      $('.nav-container').removeClass("fix-nav");
    }
  });
  });
	$(function () {
    $(window).scroll(function () {
     if ($(this).scrollTop() > 250) {
      $('.quick-access').addClass("fix-header");
    } else {
      $('.quick-access').removeClass("fix-header");
    }
  });
  });
</script>
</div>
</div>
</div>
</div>
</header>
</div>
<script type="text/javascript">
  $(document).ready(function() { 
  //top-cart show subnav on hover
  $('#cart').mouseenter(function() {
    $(this).find(".dropdown-menu").stop(true, true).slideDown();
  });
    //hide submenus on exit
    $('#cart').mouseleave(function() {
      $(this).find(".dropdown-menu").stop(true, true).delay(500).slideUp();
    });

  // //top-currency show subnav on hover
  //   $('#currency').mouseenter(function() {
  //     $(this).find(".dropdown-menu").stop(true, true).slideDown();
  //   });
  //   //hide submenus on exit
  //   $('#currency').mouseleave(function() {
  //     $(this).find(".dropdown-menu").stop(true, true).slideUp();
  //   });

  // //top-languge show subnav on hover
  //   $('.top-links .form-language').mouseenter(function() {
  //     $(this).find(".dropdown-menu").stop(true, true).slideDown();
  //   });
  //   //hide submenus on exit
  //   $('.top-links .form-language').mouseleave(function() {
  //     $(this).find(".dropdown-menu").stop(true, true).slideUp();
  //   });

  // //top-account show subnav on hover
  //   $('.top-account').mouseenter(function() {
  //     $(this).find(".dropdown-menu").stop(true, true).slideDown();
  //   });
  //   //hide submenus on exit
  //   $('.top-account').mouseleave(function() {
  //     $(this).find(".dropdown-menu").stop(true, true).slideUp();
  //   });
});




</script>


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>





                <?php if (isset($_COOKIE['addtocart'])) {

                  ?>
                  <script>
                    toastr.success('', 'Add To Cart Success');
                  </script>
                <?php  } ?>


                <?php if (isset($_COOKIE['email'])) {

                  ?>
                  <script>
                    toastr.success('Cảm ơn bạn đã đặt hàng', 'Send mail success');
                  </script>
                <?php  } ?>






<div class="top-breadcrumb">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="index.php?"><i class="fa fa-home"></i></a></li>
      <li><a href=""><?=$result['name']?></a></li>
    </ul>
  </div>
</div>
<div class="container">

  <div class="row">                <div id="content" class="col-sm-12">      <div class="row">
    <div class="col-sm-5">
      <div class="thumbnails-image ">
        <a class="thumbnail" title="Cagtook mailr">
          <img src="<?=$result['thumbnail']?>" data-zoom-image="<?=$result['thumbnail']?>" title="Cagtook mailr" alt="Cagtook mailr" />
        </a>
      </div><!-- thumbnails-image -->
      <div class="row ">
        <div class="wrapper-img-additional">
          <div class="image-additional" id="gallery_01">
            <a class="thumbnail" href="javascript:void(0);" data-image="<?=$result['thumbnail']?>" data-zoom-image="<?=$result['thumbnail']?>" title="Cagtook mailr">
              <img src="<?=$result['thumbnail']?>" title="Cagtook mailr" alt="Cagtook mailr" />
            </a>
            <a class="thumbnail" href="javascript:void(0);" data-image="<?=$result['thumbnail']?>" data-zoom-image="<?=$result['thumbnail']?>" title="Cagtook mailr"> <img  src="<?=$result['thumbnail']?>" title="Cagtook mailr" alt="Cagtook mailr" /></a>
            <a class="thumbnail" href="javascript:void(0);" data-image="<?=$result['thumbnail']?>" data-zoom-image="<?=$result['thumbnail']?>" title="Cagtook mailr"> <img  src="<?=$result['thumbnail']?>" title="Cagtook mailr" alt="Cagtook mailr" /></a>
            <a class="thumbnail" href="javascript:void(0);" data-image="<?=$result['thumbnail']?>" data-zoom-image="<?=$result['thumbnail']?>" title="Cagtook mailr"> <img  src="<?=$result['thumbnail']?>" title="Cagtook mailr" alt="Cagtook mailr" /></a>
          </div>
        </div>
      </div><!-- end wrapper-img-additional -->
    </div>
    <div class="col-sm-7">
      <h1 class="product-name product-name-product"><?=$result['name']?></h1>
      <div class="product-price">
        <h2 class="price-new">$<?=$result['price']?></h2>
        <span class="price-old">$<?=$result['tb']?></span>
      </div>
      <div class="rating rating-product">
        <p>
          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
          |
          <a href="" >reviews</a> | <a href="" >Write a review</a></p>
        </div>
        <!-- end-rating -->

        <div class="short-description-content">
          <p class="availability in-stock">
            Availability: <span style="font-weight:bold;<b>Notice</b>: Undefined variable: quantity in <b>/home/towerthe/public_html/demo/tt_valeri/catalog/view/theme/tt_valeri2/template/product/product.tpl</b> on line <b>88</b>color:#ff0000">In Stock</span>
          </p>
          <p class="short-description">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus iste vel expedita voluptates repudiandae, excepturi reprehenderit illum iusto soluta fugit, explicabo repellat voluptatem cum aperiam enim consequuntur perspiciatis, fuga voluptas.
          </p> 
         <hr>
       </div> <!-- end-description -->



       <div id="product">
        <div class="form-group">
          <div class="form-quantity form-quantity-product">  
            <!-- <label class="control-label" for="input-quantity"></label> -->

            <!-- <div class="box-input-qty">
              <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
              <div class="btn-plus"><input type="button" id="plus" value="+" class="qty"></div>
              <div class="btn-minus"><input type="button" id="minus" value="-" class="qty" /></div>
            </div> -->

            <input type="hidden" name="product_id" value="44" />
          </div>
          <div class="box-button button-group button-group-product actions">

            <a href="?mod=saleOnline&act=add2cartDetail&code=<?=$result['code']?>">
              <button class="button btn-cart" id="button-cart" type="button"  title="Add to Cart">
              <i class="fa fa-shopping-cart"></i><span>Add to Cart</span> 
            </button>
            </a>
            <button class="btn-wishlist" type="button"  title="Like" >
              <i class="fa fa-heart-o"></i>
            </button>
            <button class="btn-compare" type="button" title="Product" >

              <i class="fa fa-compress"></i>

            </button>
          </div><!-- end-button -->
          <!-- <script type="text/javascript">
            $(document).ready(function() {
              var minimum = 1;
              $("#input-quantity").change(function(){
                if ($(this).val() < minimum) {
                  alert("Minimum Quantity: "+minimum);
                  $("#input-quantity").val(minimum);
                }
              });
                  // increase number of product
                  function minus(minimum){
                    var currentval = parseInt($("#input-quantity").val());
                    $("#input-quantity").val(currentval-1);
                    if($("#input-quantity").val() <= 0 || $("#input-quantity").val() < minimum){
                      alert("Minimum Quantity: "+minimum);
                      $("#input-quantity").val(minimum);
                    }
                  };
                  // decrease of product
                  function plus(){
                    var currentval = parseInt($("#input-quantity").val());
                    $("#input-quantity").val(currentval+1);
                  };
                  $('#minus').click(function(){
                    minus(minimum);
                  });
                  $('#plus').click(function(){
                   plus();
                 });
                });
              </script> -->
            </div>
            <!-- AddThis Button BEGIN -->
            <!-- <div class="box-addthis">
              <hr>
              <div class="addthis_toolbox addthis_default_style"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>
              <script type="text/javascript" src="/s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>
            </div> -->
            <!-- AddThis Button END -->
          </div>
        </div>
      </div>
      <ul class="nav nav-tabs nav-tabs-products">
        <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
        <li><a href="#tab-review" data-toggle="tab">Reviews</a></li>
      </ul>
      <div class="tab-content tab-content-product">
        <div class="tab-pane active" id="tab-description"><div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ut quod doloremque, optio recusandae cum rerum, culpa aperiam qui quam tempore tenetur aspernatur amet illo fugit nam deserunt quos aliquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, optio dolores sint vitae dolorum soluta maxime placeat asperiores delectus impedit esse doloremque quae, quo ipsam aspernatur possimus blanditiis nihil, ex.</div>
      </div>
      <div class="tab-pane" id="tab-review">
        <form action="?mod=saleOnline&act=store" class="form-horizontal" id="form-review"  method="POST">
          <div id="review"></div>
          <?php foreach ($comment as $value) {

                 ?>

          <h2><a href="" style="color: blue;"><?=$value['namekh']?></a>:<?=$value['comment']?></h2>

          <?php } ?>
          <hr>
          <div id="review"></div>
          <h3><a href=""><?php if (isset($kh['name'])) {

                        echo $kh['name'];
                      }else{
                        echo "";
                      } ?></a> write a review</h3>
          <div class="form-group required">
            <div class="col-sm-12">
              <input type="text" name="code" value="<?=$result['code']?>" id="input-name" class="form-control" style="display: none;"/>
              <input type="text" name="namekh" value="<?=$kh['name']?>" id="input-name" class="form-control" style="display: none;"/>
              <label class="control-label" for="input-name">Comment Review</label>
              <input type="text" name="comment" value="" id="input-name" class="form-control" />
            </div>
          </div>
          <!-- <div class="form-group required">
            <div class="col-sm-12">
              <label class="control-label" for="input-review">Your Review</label>
              <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
              <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
            </div>
          </div> -->
         <!--  <div class="form-group required">
            <div class="col-sm-12">
              <label class="control-label">Rating</label>
              &nbsp;&nbsp;&nbsp; Bad&nbsp;
              <input type="radio" name="rating" value="1" />
              &nbsp;
              <input type="radio" name="rating" value="2" />
              &nbsp;
              <input type="radio" name="rating" value="3" />
              &nbsp;
              <input type="radio" name="rating" value="4" />
              &nbsp;
              <input type="radio" name="rating" value="5" />
            &nbsp;Good</div>
          </div> -->
          <div class="buttons clearfix">
            <div class="pull-right">
              <button type="submit" id="button-review"  class="btn btn-success">Comment</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    
    
  </div>
</div>
</div>
<!-- <script type="text/javascript">
  $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
    $.ajax({
      url: 'index.php?route=product/product/getRecurringDescription',
      type: 'post',
      data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
      dataType: 'json',
      beforeSend: function() {
        $('#recurring-description').html('');
      },
      success: function(json) {
        $('.alert, .text-danger').remove();

        if (json['success']) {
          $('#recurring-description').html(json['success']);
        }
      }
    });
  });
  </script> -->
 <!--  <script type="text/javascript">
    $('#button-cart').on('click', function() {
      $.ajax({
        url: 'index.php?route=checkout/cart/add',
        type: 'post',
        data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
        dataType: 'json',
        beforeSend: function() {
          $('#button-cart').button('loading');
        },
        complete: function() {
          $('#button-cart').button('reset');
        },
        success: function(json) {
          $('.alert, .text-danger').remove();
          $('.form-group').removeClass('has-error');

          if (json['error']) {
            if (json['error']['option']) {
              for (i in json['error']['option']) {
                var element = $('#input-option' + i.replace('_', '-'));

                if (element.parent().hasClass('input-group')) {
                  element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                } else {
                  element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                }
              }
            }

            if (json['error']['recurring']) {
              $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
            }

        // Highlight any found errors
        $('.text-danger').parent().addClass('has-error');
      }

      if (json['success']) {
        $('.breadcrumb').after('<div class="alert alert-success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

        $('#cart > button').html('<span id="cart-total"><span class="icon_bag_alt"></span>' + json['total'] + '</span>');

        $('html, body').animate({ scrollTop: 0 }, 'slow');

        $('#cart > ul').load('index.php?route=common/cart/info ul li');
      }
    },
    error: function(xhr, ajaxOptions, thrownError) {
      alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
    }
  });
    });
    </script> -->
    <!-- <script type="text/javascript">
      $('.date').datetimepicker({
        pickTime: false
      });

      $('.datetime').datetimepicker({
        pickDate: true,
        pickTime: true
      });

      $('.time').datetimepicker({
        pickDate: false
      });

      $('button[id^=\'button-upload\']').on('click', function() {
        var node = this;

        $('#form-upload').remove();

        $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

        $('#form-upload input[name=\'file\']').trigger('click');

        if (typeof timer != 'undefined') {
          clearInterval(timer);
        }

        timer = setInterval(function() {
          if ($('#form-upload input[name=\'file\']').val() != '') {
            clearInterval(timer);

            $.ajax({
              url: 'index.php?route=tool/upload',
              type: 'post',
              dataType: 'json',
              data: new FormData($('#form-upload')[0]),
              cache: false,
              contentType: false,
              processData: false,
              beforeSend: function() {
                $(node).button('loading');
              },
              complete: function() {
                $(node).button('reset');
              },
              success: function(json) {
                $('.text-danger').remove();

                if (json['error']) {
                  $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
                }

                if (json['success']) {
                  alert(json['success']);

                  $(node).parent().find('input').attr('value', json['code']);
                }
              },
              error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
              }
            });
          }
        }, 500);
      });
      </script>
      <script type="text/javascript"><!--
        // $('#review').delegate('.pagination a', 'click', function(e) {
        //   e.preventDefault();

        //   $('#review').fadeOut('slow');

        //   $('#review').load(this.href);

        //   $('#review').fadeIn('slow');
        // });

        // $('#review').load('index.php?route=product/product/review&product_id=44');

        // $('#button-review').on('click', function() {
        //   $.ajax({
        //     url: 'index.php?route=product/product/write&product_id=44',
        //     type: 'post',
        //     dataType: 'json',
        //     data: $("#form-review").serialize(),
        //     beforeSend: function() {
        //       $('#button-review').button('loading');
        //     },
        //     complete: function() {
        //       $('#button-review').button('reset');
        //     },
        //     success: function(json) {
        //       $('.alert-success, .alert-danger').remove();

        //       if (json['error']) {
        //         $('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
        //       }

        //       if (json['success']) {
        //         $('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

        //         $('input[name=\'name\']').val('');
        //         $('textarea[name=\'text\']').val('');
        //         $('input[name=\'rating\']:checked').prop('checked', false);
        //       }
        //     }
        //   });
        // });

        $(document).ready(function() {
          $('.thumbnails').magnificPopup({
            type:'image',
            delegate: 'a',
            gallery: {
              enabled:true
            }
          });
        });

//view-related
$(".view-related").owlCarousel({
  autoPlay : false,
  slideSpeed : 3000,
  paginationSpeed : 3000,
  rewindSpeed : 3000,
  navigation : true,
  stopOnHover : true,
  pagination : false,
  scrollPerPage:false,
  items : 4,
  itemsDesktop : [1199,4],
  itemsDesktopSmall : [991,3],
  itemsTablet: [768,2],
  itemsMobile : [400,1],
});

//image-additional
$(".image-additional").owlCarousel({
  navigation:true,
  pagination: false,
  slideSpeed : 1000,
  goToFirstSpeed : 1500,
  autoHeight : true,
    items :4, //10 items above 1000px browser width
    itemsDesktop : [1199,4], //5 items between 1000px and 901px
    itemsDesktopSmall : [991,3], //4.3 betweem 900px and 601px
    itemsTablet: [767,3], //2 items between 600 and 0
    itemsMobile : [479,2] // itemsMobile disabled - inherit from itemsTablet option
  }); 

  //--></script>
<!-- <div class="google-map-content">
      <script>
        function initialize() {
              var myLatlng = new google.maps.LatLng(-33.89685085784883, 151.22689247131348);
              var mapOptions = {
                zoom: 8,
                center: myLatlng
              }
              var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            
              var marker = new google.maps.Marker({
                  position: myLatlng,
                  map: map,
                  title: 'Primave store!'
              });
            }
            
            google.maps.event.addDomListener(window, 'load', initialize);
        
    </script>
    <div id="map-canvas"></div>
  
  </div> -->
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
           <h5>Address</h5>
            <p class="sub_aboutus" >Trường Đại Học Kinh Tế Kĩ Thuật Công Nghiệp</p>
            <p class="sub_aboutus"  style="color: red">Số 218 Lĩnh Nam - Hai Bà Trưng - Hà Nội</p>
            <ul class="list-unstyled social">
              <li><a href="#"><em class="fa fa-twitter"></em></a></li>
              <li><a href="#"><em class="fa fa-facebook"></em></a></li>
              <li><a href="#"><em class="fa fa-instagram"></em></a></li>
              <li><a href="#"><em class="fa fa-linkedin"></em></a></li>
              <li><a href="#"><em class="fa fa-pinterest-p"></em></a></li>
            </ul>
          </div>
         <div class="col-md-3 col-sm-4 col-xs-12">
           <h5>Full name</h5>
          <ul class="list-unstyled">
            <li><a href="">Phạm Văn Tài</a></li>
            <li><a href="">Phạm Thị Hương Lan</a></li>
            <li><a href="">Vũ Thị Dần</a></li>
            <li><a href="">Nguyễn Thị Mai Anh</a></li>
          </ul>
        </div>
        
        <div class="col-md-2 col-sm-4 col-xs-12">
          <h5>Date of birth</h5>
          <ul class="list-unstyled">
            <li><a href="">09-04-1998</a></li>
            <li><a href="">28-12-1998</a></li>
            <li><a href="">14-04-1998</a></li>
            <li><a href="">12-08-1998</a></li>
          </ul>
        </div>

        <div class="col-md-3 col-sm-4 col-xs-12">
         <h5>Team Work</h5>
          <ul class="list-unstyled">
            <li><a href="">Xử lý php,luồng dữ liệu</a></li>
            <li><a href="">Thiết kế giao diện Footer,Báo Cáo</a></li>
            <li><a href="">Thiết kế database</a></li>
            <li><a href="">Phân tích thiết kế hệ thống</a></li>
          </ul>
        </div>

        </div>

      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <!-- <p>Copyright © <a href="http://www.plazathemes.com/">PlazaThemes.com .</a> All rights reserved.</p> -->
        <a href="#" class="payment"><img src="public/image/catalog/demo/icon/payment.png" alt="#"></a>
      </div>
    </div>
  </footer>

<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->

<!-- Theme created by Welford Media for OpenCart 2.0 www.welfordmedia.co.uk -->

<div id="back-top" class="hidden-xs"></div>
<script type="text/javascript">
  $(document).ready(function(){
     // hide #back-top first
     $("#back-top").hide();
     // fade in #back-top
     $(function () {
      $(window).scroll(function () {
       if ($(this).scrollTop() > 300) {
        $('#back-top').fadeIn();
        $('#back-top').addClass("show");
      } else {
        $('#back-top').fadeOut();
        $('#back-top').removeClass("show");
      }
    });
      // scroll body to 0px on click
      $('#back-top').click(function () {
       $('body,html').animate({
        scrollTop: 0
      }, 800);
       return false;
     });
    });
   });
 </script>
</body></html>