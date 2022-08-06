<?php
if(!isset($_SESSION["type_user"]) || $_SESSION["type_user"] != 1){
  header('Location: '.base_url(''));
  exit();
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>IDGS09</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>/public/img/favicon.ico">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/css/bootstrap.min.css">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/css/font-awesome.min.css">
  <!-- nalika Icon CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/css/nalika-icon.css">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/public/css/owl.theme.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/public/css/owl.transitions.css">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/css/animate.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/css/normalize.css">
  <!-- meanmenu icon CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/css/meanmenu.min.css">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/css/main.css">
  <!-- morrisjs CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/css/morrisjs/morris.css">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- metisMenu CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/css/metisMenu/metisMenu.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/public/css/metisMenu/metisMenu-vertical.css">
  <!-- calendar CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/css/calendar/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>/public/css/calendar/fullcalendar.print.min.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url();?>/public/css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="<?php echo base_url();?>/public/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<div class="left-sidebar-pro">
  <nav id="sidebar" class="">
    <div class="sidebar-header">
      <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt=""></a>
      <strong><img src="img/logo/logosn.png" alt=""></strong>
    </div>
    <div class="nalika-profile">
      <div class="profile-dtl">
        <!-- <a href="#"><img src="img/notification/4.jpg" alt=""></a> -->
        <a href="#"><img src="<?php echo $_SESSION['profile_pic']?>" alt=""></a>
        <h2><?php echo $_SESSION['first_name']?></h2>
        <h2><?php echo $_SESSION['last_name']?></h2>
      </div>
    </div>
    <div class="left-custom-menu-adp-wrap comment-scrollbar mCustomScrollbar _mCS_1 mCS-autoHide"
      style="position: relative; overflow: visible;">
      <div id="mCSB_1" class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_outside" style="max-height: none;"
        tabindex="0">
        <div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
          <nav class="sidebar-nav left-sidebar-menu-pro">
            <ul class="metismenu" id="menu1">
              <li>
                <a class="" href="<?php echo base_url('Admin');?>" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span
                    class="mini-click-non">Inicio</span></a>
              </li>
              <li>
                <a class="" href="<?php echo base_url('departamentos');?>" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span
                    class="mini-click-non">Departamentos</span></a>
              </li>

              <li>
                <a class="" href="<?php echo base_url('usuarios');?>" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span
                    class="mini-click-non">Usuarios</span></a>
              </li>


            </ul>
          </nav>
        </div>
      </div>
      <div id="mCSB_1_scrollbar_vertical"
        class="mCSB_scrollTools mCSB_1_scrollbar mCS-light-1 mCSB_scrollTools_vertical" style="display: block;">
        <div class="mCSB_draggerContainer">
          <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
            style="position: absolute; min-height: 30px; display: block; height: 339px; max-height: 570px; top: 0px;">
            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
          </div>
          <div class="mCSB_draggerRail"></div>
        </div>
      </div>
    </div>
  </nav>
</div>
<!-- Start Welcome area -->
<div class="all-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- <div class="logo-pro">
          <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt=""></a>
        </div> -->
      </div>
    </div>
  </div>


  <div class="header-advance-area">
    <div class="header-top-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="header-top-wraper">
              <div class="row">
                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                  <div class="menu-switcher-pro">
                    <button type="button" id="sidebarCollapse"
                      class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                      <i class="icon nalika-menu-task"></i>
                    </button>
                  </div>
                </div>
                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                  <div class="header-top-menu tabl-d-n hd-search-rp">
                    <div class="breadcome-heading">
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                  <div class="header-right-info">
                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                      <li class="nav-item dropdown">
                        <a href="<?php echo base_url("cerrar_session");?>">Cerrar Session</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="mobile-menu">
              <nav id="dropdown" style="display: block;">
                <ul class="mobile-menu-nav">
                  <!-- <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span
                        class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                    <ul class="collapse dropdown-header-top">
                      <li><a href="index.html">Dashboard v.1</a></li>
                    </ul>
                  </li> -->
                  <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu end -->
    <div class="breadcome-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="breadcome-list">
              <div class="row" hidden>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="breadcomb-wp">
                    <div class="breadcomb-icon">
                      <i class="icon nalika-home"></i>
                    </div>
                    <div class="breadcomb-ctn">
                      <h2>Dashboard One</h2>
                      <p>Welcome to Nalika <span class="bread-ntd">Admin Template</span></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <div class="breadcomb-report">
                    <button data-toggle="tooltip" data-placement="left" title="" class="btn"
                      data-original-title="Download Report"><i class="icon nalika-download"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>