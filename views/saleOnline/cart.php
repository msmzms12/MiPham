
<?php 
error_reporting(0);
      // $cartO = array();
$cartO = $_SESSION['cartO'];




?>

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
  <title>Shopping Cart</title>
  <base href="" />
  <script src="public/cart/catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
  <script src="public/cart/catalog/view/javascript/jquery/jquery-ui.js" type="text/javascript"></script> 
  <link href="public/cart/catalog/view/javascript/jquery/css/jquery-ui.css" rel="stylesheet" media="screen" />
  <link href="public/cart/catalog/view/theme/tt_valeri2/stylesheet/opentheme/oclayerednavigation/css/oclayerednavigation.css" rel="stylesheet"> 
  <script src="public/cart/catalog/view/javascript/opentheme/oclayerednavigation/oclayerednavigation.js" type="text/javascript"></script>
  <link href="public/cart/catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
  <script src="public/cart/catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <link href="public/cart/catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="public/cart/catalog/view/theme/tt_valeri2/stylesheet/stylesheet.css" rel="stylesheet">
  <link href="public/cart/catalog/view/theme/tt_valeri2/stylesheet/opentheme/ocslideshow/ocslideshow.css" rel="stylesheet" />
  <script src="public/cart/catalog/view/javascript/opentheme/ocslideshow/jquery.nivo.slider.js" type="text/javascript"></script>
  <link href="public/cart/catalog/view/theme/tt_valeri2/stylesheet/opentheme/hozmegamenu/css/custommenu.css" rel="stylesheet" />
  <!-- <script src="catalog/view/javascript/opentheme/hozmegamenu/mobile_menu.js" type="text/javascript"></script> -->
  <script src="public/cart/catalog/view/javascript/opentheme/hozmegamenu/custommenu.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="public/cart/catalog/view/theme/tt_valeri2/stylesheet/opentheme/ocquickview/css/ocquickview.css">
  <script src="public/cart/catalog/view/javascript/opentheme/ocquickview/ocquickview.js" type="text/javascript"></script>
  <script src="public/cart/catalog/view/javascript/opentheme/owl-carousel/owl.carousel.js" type="text/javascript"></script>
  <link href="public/cart/catalog/view/theme/tt_valeri2/stylesheet/opentheme/css/owl.carousel.css" rel="stylesheet" />
  <script src="public/cart/catalog/view/javascript/jquery/elevatezoom/jquery.elevatezoom.js" type="text/javascript"></script>
  <link href="public/cart/catalog/view/theme/tt_valeri2//stylesheet/opentheme/css/animate.css" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQR6Szd2sBV2-1MQXmdAKRHWHa3tNnuH8" type="text/javascript"></script>

  <script src="public/cart/catalog/view/javascript/common.js" type="text/javascript"></script>
  <link href="public/image/catalog/hoa.png" rel="icon" />
</head>
<body class="checkout-cart">
  <div class="header-content">
    <nav id="top">
      <div class="container">
        <div class="container-ink">
          <div class="row">
            <div class="col-sm-6 col-xs-12">
             <div class="top-contact">
              <ul class="top-links-left">
                <li>
                  <a href="index.php?route=common/home">Home</a> 
                </li>
                <li>
                  <a href="#">About Us</a>
                </li>
                <li>
                  <a href="index.php?route=information/contact">Contact Us</a> 
                </li>
                <li>
                  <a href="http://www.plazathemes.com/">buy theme</a> 
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-xs-12 col-sm-6">
            <div class="top-links-right">
              <div class="pull-left">
                <form action="index.php?route=common/currency/currency" method="post" enctype="multipart/form-data" id="form-currency">
                  <div class="btn-group">
                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                      <?php 


                      $kh = array();
                      $nv = array();
                      if (isset($_SESSION['kh'])) {
                        $kh = $_SESSION['kh'];

                      }else if(isset($_SESSION['nv'])){
                       $nv = $_SESSION['nv'];
                     }

                     else{
                      echo "";
                    }
                    ?>



                    <span class="" style="color: black;font-size: 11px; ">
                      <?php if (isset($kh['name'])) {

                        echo $kh['name'];
                      }else if (isset($nv['name'])){
                        echo $nv['name'];
                      }
                      else{
                        echo "";
                      } ?>
                      
                    </span> 
                    </button>
                    
                  </div>
                  <input type="hidden" name="code" value="" />
                  <input type="hidden" name="redirect" value="index.php?route=checkout/cart" />
                </form>
              </div>
              <div class="dropdown top-account">
                <a href="index.php?route=account/account" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><span class="">My Account</span><i class="fa fa-angle-down "></i></a>
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
            <a href="index.php?route=common/home"><img src="public/cart/image/catalog/logo_1.png" title="Valeri 2 - Reposive Opencart Themes" alt="Valeri 2 - Reposive Opencart Themes" class="img-responsive" /></a>
          </div>
        </div>
        <div class="col-md-9 col-sm-12">
          <div class="quick-access">
            <div class="top-cart-content"><div id="cart" class="btn-group btn-block">
              <button type="button" onclick="window.location.href='index.php?route=checkout/cart'" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><span id="cart-total"><span class="icon_bag_alt"></span><span class="text-top-cart">shopping cart</span><span class="item-top-cart"><?php echo count($cartO); ?><span> $0.00</span></span></span></button>

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
              <ul id="ma-mobilemenu" class="mobilemenu nav-collapse collapse"><li><span class=" button-view1 collapse1"><a href="index.php?route=product/category&amp;path=20">Women</a></span><ul class="level2"><li><span class="button-view2   collapse1"><a href="index.php?route=product/category&amp;path=73">Bottom</a></span><ul class="level3"><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=77">Crochets</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=76">hoodiess</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=78">Slovess</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=75">Strips</a></span></li></ul></li><li><span class="button-view2   collapse1"><a href="index.php?route=product/category&amp;path=74">weater</a></span><ul class="level3"><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=80">Short Slevers</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=82">sleeveess</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=79">Tops &amp; teess</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=81">trousers</a></span></li></ul></li><li><span class="button-view2   collapse1"><a href="index.php?route=product/category&amp;path=26">Jewelrys</a></span><ul class="level3"><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=87"> ring</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=90">ankle bracelet</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=89">bracelet</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=88">eardrop</a></span></li></ul></li><li><span class="button-view2   collapse1"><a href="index.php?route=product/category&amp;path=27">dress</a></span><ul class="level3"><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=83">long dress</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=86">prom dresses</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=85">Short dress</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=84">waist cloth</a></span></li></ul></li></ul></li><li><span class=" button-view1 collapse1"><a href="index.php?route=product/category&amp;path=18">Laptops &amp; Notebooks</a></span><ul class="level2"><li><span class="button-view2   no-close"><a href="index.php?route=product/category&amp;path=46">Macs</a></span><ul class="level3"></ul></li><li><span class="button-view2   no-close"><a href="index.php?route=product/category&amp;path=45">Windows</a></span><ul class="level3"></ul></li></ul></li><li><span class=" button-view1 no-close"><a href="index.php?route=product/category&amp;path=25">Kids</a></span><ul class="level2"></ul></li><li><span class=" button-view1 collapse1"><a href="index.php?route=product/category&amp;path=57">Men</a></span><ul class="level2"><li><span class="button-view2   collapse1"><a href="index.php?route=product/category&amp;path=28">Jackets</a></span><ul class="level3"><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=60">Fashion Jackets</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=59">Graphic T-Shirts</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=36">Polo Short Sleeve</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=35">Tops &amp; Tees</a></span></li></ul></li><li><span class="button-view2   collapse1"><a href="index.php?route=product/category&amp;path=29">Jeans</a></span><ul class="level3"><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=64">Crochet</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=61">Hoodies</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=63">Stripes</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=62">Sweaters</a></span></li></ul></li><li><span class="button-view2   collapse1"><a href="index.php?route=product/category&amp;path=30">Shirts</a></span><ul class="level3"><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=67">Floral</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=65">Shorts</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=66">Stripes</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=68">Vest</a></span></li></ul></li><li><span class="button-view2   collapse1"><a href="index.php?route=product/category&amp;path=31">Tops</a></span><ul class="level3"><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=72">Bag</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=69">Cavat</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=71">Glass</a></span></li><li><span class="  no-close"><a href="index.php?route=product/category&amp;path=70">Hat</a></span></li></ul></li></ul></li><li><span class=" button-view1 no-close"><a href="index.php?route=product/category&amp;path=17">Jewellry</a></span><ul class="level2"></ul></li><li><span class=" button-view1 no-close"><a href="index.php?route=product/category&amp;path=24">Accessories</a></span><ul class="level2"></ul></li></ul>			</div>
            </div>
          </div>
        </div>
        <div class="nav-container visible-lg visible-md">
         <div class="nav1">
          <div class="nav2">
           <div id="pt_custommenu" class="pt_custommenu">
             <div id="pt_menu_home" class="pt_menu"><div class="parentMenu"><a href="index.php?route=common/home"><span>Home</span></a></div></div><div id="pt_menu57" class="pt_menu nav-1">
              <div class="parentMenu">
                <a href="index.php?route=product/category&amp;path=57">
                  <span>Men</span>
                </a>
              </div>
              <div id="popup57" class="popup" style="display: none; width: 1228px;">
                <div class="block1" id="block157">
                  <div class="column first col1"><div class="itemMenu level1"><a class="itemMenuName level0 actParent" href="index.php?route=product/category&amp;path=28"><span>Jackets</span></a><div class="itemSubMenu level0"><div class="itemMenu level1"><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=60"><span>Jackets</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=59"><span>Graphic&nbsp;T-Shirts</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=36"><span>Polo&nbsp;Short&nbsp;Sleeve</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=35"><span>Tops&nbsp;&amp;&nbsp;Tees</span></a></div></div></div></div><div class="column col2"><div class="itemMenu level1"><a class="itemMenuName level0 actParent" href="index.php?route=product/category&amp;path=29"><span>Skincare</span></a><div class="itemSubMenu level0"><div class="itemMenu level1"><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=64"><span>Crochet</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=61"><span>Hoodies</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=63"><span>Stripes</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=62"><span>Sweaters</span></a></div></div></div></div><div class="column col3"><div class="itemMenu level1"><a class="itemMenuName level0 actParent" href="index.php?route=product/category&amp;path=30"><span>Shirts</span></a><div class="itemSubMenu level0"><div class="itemMenu level1"><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=67"><span>Floral</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=65"><span>Shorts</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=66"><span>Stripes</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=68"><span>Vest</span></a></div></div></div></div><div class="column last col4"><div class="itemMenu level1"><a class="itemMenuName level0 actParent" href="index.php?route=product/category&amp;path=31"><span>Tops</span></a><div class="itemSubMenu level0"><div class="itemMenu level1"><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=72"><span>Bag</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=69"><span>Cavat</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=71"><span>Glass</span></a><a class="itemMenuName level0 act" href="index.php?route=product/category&amp;path=70"><span>Hat</span></a></div></div></div></div>
                  <div class="clearBoth"></div>
                </div>
                <div class="block2" id="block257">
                  <!-- <div class="img-hozmegamenu"><a href="#"> <img src="image/catalog/demo/img-block/block-menu.jpg" alt="#"></a></div>										 -->
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
                <a href="index.php?route=product/category&amp;path=25">
                  <span>Kids</span>
                </a>
              </div>
            </div><div id="pt_menu17" class="pt_menu nav-4 pt_menu_no_child">
              <div class="parentMenu">
                <a href="index.php?route=product/category&amp;path=17">
                  <span>Jewellry</span>
                </a>
              </div>
            </div><div id="pt_menu24" class="pt_menu nav-5 pt_menu_no_child">
              <div class="parentMenu">
                <a href="?mod=saleOnline&act=contact">
                  <span>Accessories</span>
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
</script><div class="container">
  <ul class="breadcrumb">
    <li><a href="index.php?route=common/home"><i class="fa fa-home"></i></a></li>
    <li><a href="index.php?route=checkout/cart">Shopping Cart</a></li>
  </ul>
  <div class="row">                
    <div id="content" class="col-sm-12">      
      <h1>Shopping Cart</h1>
      <form action="http://valeri2.demo.towerthemes.com/index.php?route=checkout/cart/edit" method="post" enctype="multipart/form-data">
        <div class="table-responsive table-checkout-cart">
          <table class="table table-bordered">
            <thead>
              <tr>

                <td class="text-left">Model</td>
                <td class="text-center">Image</td>
                <td class="text-left">Product Name</td>
                
                <td class="text-center">Quantity</td>
                <td class="text-right">Unit Price</td>
                <td class="text-right">Total</td>
              </tr>
            </thead>
            <tbody>

              <?php 
              $tongtien =0;
              foreach ($cartO as $row) {
                $tongtien += $row['total']*$row['price'];

                ?>



                <tr>

                  <td class="text-center"><?= $row['code'] ?></td>
                  <td class="text-center">                  <a href=""><img src="<?= $row['thumbnail'] ?>" alt="<?= $row['name'] ?>" title="<?= $row['name'] ?>" class="img-thumbnail"></a>
                  </td>
                  <td class="text-left"><a href=""><?= $row['name'] ?></a>
                  </td>

                  <td class="text-center">
                    <div class="input-group btn-block" style="max-width: 80px;min-width: 70px;">
                      <div class="form-quantity">
                        <!-- <div class="btn-minus"><input type="button" value="-" class="qty minus"></div> -->

                        <a href="index.php?mod=saleOnline&act=remove_product&code=<?= $row['code']?>" style="height: 20px;
                        width: 20px;
                        text-align: center;
                        line-height: 18px;
                        background: #fff;
                        border: 1px solid #ccc;
                        box-shadow: none;
                        padding: 0px 6px;
                        font-size: 14px;">-</a>

                        <input type="text" name="quantity[526]" value="<?= $row['total'] ?>" size="1" class="form-control" />
                        <a href="index.php?mod=saleOnline&act=add2cartOcong&code=<?= $row['code']?>" style="height: 20px;
                        width: 20px;
                        text-align: center;
                        line-height: 18px;
                        background: #fff;
                        border: 1px solid #ccc;
                        box-shadow: none;
                        padding: 0px 5px;
                        font-size: 14px;">+</a>
                        <!-- <div class="btn-plus"><input type="button" value="+" data-cartqty="cart-qty-526" class="qty plus"></div> -->
                        <input type="hidden" name="product_id" value="">
                      </div>
                    </div>
                  </td>
                  <td class="text-right"><span class="price-product">$<?= number_format($row['price']) ?></span></td>
                  <td class="text-right"><span class="total-price">$<?= number_format($row['price']*$row['total']) ?> </span></td>
                </tr>




              <?php } ?>





            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="box-show-price">
            <div class="col-sm-4 col-sm-offset-8">
              <table class="table table-bordered">
                <tbody><tr>
                  <td class="text-right"><strong>Sub-Total:</strong></td>
                  <td class="text-right"><span class="total-price">$<?=number_format($tongtien)?></span></td>
                </tr>
                <tr>
                  <td class="text-right"><strong>Total:</strong></td>
                  <td class="text-right"><span class="total-price">$<?=number_format($tongtien)?></span></td>
                </tr>
              </tbody></table>
            </div>
          </div>
        </div>
        <div class="row"> 
          <div class="col-sm-8 col-xs-12">

          </div>

          <div class="col-sm-4 col-xs-12">
            <div class="checkout-cart-buttons">
              <div class="button-checkout-cart"><a href="?mod=saleOnline&act=payment" class="btn btn-primary">Continue Order</a></div>
              <div class="button-shopping"><a href="index.php?" class="btn btn-default">Continue Shopping</a></div>
              <div class="button-shopping"><a href="?mod=saleOnline&act=unset" class="btn btn-default">Unset Shopping Cart</a></div>

            </div>
          </div>
        </div>

      </form>
      <div class="buttons clearfix">

      </div>
    </div>
  </div>
</div>

<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <h5>Address</h5>
          
          <p class="sub_aboutus">Trường Đại Học Kinh Tế Kĩ Thuật Công Nghiệp</p>
            <p class="sub_aboutus">Số 218 Lĩnh Nam - Hai Bà Trưng - Hà Nội</p>
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
      <p><a href="">Phạm Văn Tài</a> Desginer</p>
      <a href="#" class="payment"><img src="public/cart/image/catalog/demo/icon/payment.png" alt="#"></a>
    </div>
  </div>
</footer>


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

