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
  <title>Dashboard V.2 | Nalika - Material Admin Template</title>
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
      <!-- <div class="profile-social-dtl">
        <ul class="dtl-social">
          <li><a href="#"><i class="icon nalika-facebook"></i></a></li>
          <li><a href="#"><i class="icon nalika-twitter"></i></a></li>
          <li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
        </ul>
      </div> -->
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
                <!-- <ul class="submenu-angle collapse" aria-expanded="false">
                                <li><a title="Inbox" href="mailbox.html"><span class="mini-sub-pro">Inbox</span></a></li>
                                <li><a title="View Mail" href="mailbox-view.html"><span class="mini-sub-pro">View Mail</span></a></li>
                                <li><a title="Compose Mail" href="mailbox-compose.html"><span class="mini-sub-pro">Compose Mail</span></a></li>
                            </ul> -->
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
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                          class="nav-link dropdown-toggle"><i class="icon nalika-mail" aria-hidden="true"></i><span
                            class="indicator-ms"></span></a>
                        <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                          <div class="message-single-top">
                            <h1>Message</h1>
                          </div>
                          <ul class="message-menu mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar"
                            style="position: relative; overflow: visible;">
                            <div id="mCSB_2" class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_outside"
                              tabindex="0" style="max-height: 325px;">
                              <div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                style="position:relative; top:0; left:0;" dir="ltr">
                                <li>
                                  <a href="#">
                                    <div class="message-img">
                                      <img src="img/contact/1.jpg" alt="" class="mCS_img_loaded">
                                    </div>
                                    <div class="message-content">
                                      <span class="message-date">16 Sept</span>
                                      <h2>Advanda Cro</h2>
                                      <p>Please done this project as soon possible.</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <div class="message-img">
                                      <img src="img/contact/4.jpg" alt="" class="mCS_img_loaded">
                                    </div>
                                    <div class="message-content">
                                      <span class="message-date">16 Sept</span>
                                      <h2>Sulaiman din</h2>
                                      <p>Please done this project as soon possible.</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <div class="message-img">
                                      <img src="img/contact/3.jpg" alt="" class="mCS_img_loaded">
                                    </div>
                                    <div class="message-content">
                                      <span class="message-date">16 Sept</span>
                                      <h2>Victor Jara</h2>
                                      <p>Please done this project as soon possible.</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <div class="message-img">
                                      <img src="img/contact/2.jpg" alt="" class="mCS_img_loaded">
                                    </div>
                                    <div class="message-content">
                                      <span class="message-date">16 Sept</span>
                                      <h2>Victor Jara</h2>
                                      <p>Please done this project as soon possible.</p>
                                    </div>
                                  </a>
                                </li>
                              </div>
                            </div>
                            <div id="mCSB_2_scrollbar_vertical"
                              class="mCSB_scrollTools mCSB_2_scrollbar mCS-light-1 mCSB_scrollTools_vertical"
                              style="display: none;">
                              <div class="mCSB_draggerContainer">
                                <div id="mCSB_2_dragger_vertical" class="mCSB_dragger"
                                  style="position: absolute; min-height: 30px; top: 0px;">
                                  <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                </div>
                                <div class="mCSB_draggerRail"></div>
                              </div>
                            </div>
                          </ul>
                          <div class="message-view">
                            <a href="#">View All Messages</a>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                          class="nav-link dropdown-toggle"><i class="icon nalika-alarm" aria-hidden="true"></i><span
                            class="indicator-nt"></span></a>
                        <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                          <div class="notification-single-top">
                            <h1>Notifications</h1>
                          </div>
                          <ul class="notification-menu mCustomScrollbar _mCS_3 mCS-autoHide mCS_no_scrollbar"
                            style="position: relative; overflow: visible;">
                            <div id="mCSB_3" class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_outside"
                              tabindex="0" style="max-height: 325px;">
                              <div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                style="position:relative; top:0; left:0;" dir="ltr">
                                <li>
                                  <a href="#">
                                    <div class="notification-icon">
                                      <i class="icon nalika-tick" aria-hidden="true"></i>
                                    </div>
                                    <div class="notification-content">
                                      <span class="notification-date">16 Sept</span>
                                      <h2>Advanda Cro</h2>
                                      <p>Please done this project as soon possible.</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <div class="notification-icon">
                                      <i class="icon nalika-cloud" aria-hidden="true"></i>
                                    </div>
                                    <div class="notification-content">
                                      <span class="notification-date">16 Sept</span>
                                      <h2>Sulaiman din</h2>
                                      <p>Please done this project as soon possible.</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <div class="notification-icon">
                                      <i class="icon nalika-folder" aria-hidden="true"></i>
                                    </div>
                                    <div class="notification-content">
                                      <span class="notification-date">16 Sept</span>
                                      <h2>Victor Jara</h2>
                                      <p>Please done this project as soon possible.</p>
                                    </div>
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <div class="notification-icon">
                                      <i class="icon nalika-bar-chart" aria-hidden="true"></i>
                                    </div>
                                    <div class="notification-content">
                                      <span class="notification-date">16 Sept</span>
                                      <h2>Victor Jara</h2>
                                      <p>Please done this project as soon possible.</p>
                                    </div>
                                  </a>
                                </li>
                              </div>
                            </div>
                            <div id="mCSB_3_scrollbar_vertical"
                              class="mCSB_scrollTools mCSB_3_scrollbar mCS-light-1 mCSB_scrollTools_vertical"
                              style="display: none;">
                              <div class="mCSB_draggerContainer">
                                <div id="mCSB_3_dragger_vertical" class="mCSB_dragger"
                                  style="position: absolute; min-height: 30px; top: 0px;">
                                  <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                </div>
                                <div class="mCSB_draggerRail"></div>
                              </div>
                            </div>
                          </ul>
                          <div class="notification-view">
                            <a href="#">View All Notification</a>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                          class="nav-link dropdown-toggle">
                          <i class="icon nalika-user"></i>
                          <span class="admin-name">Advanda Cro</span>
                          <i class="icon nalika-down-arrow nalika-angle-dw"></i>
                        </a>
                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                          <li><a href="register.html"><span class="icon nalika-home author-log-ic"></span> Register</a>
                          </li>
                          <li><a href="#"><span class="icon nalika-user author-log-ic"></span> My Profile</a>
                          </li>
                          <li><a href="lock.html"><span class="icon nalika-diamond author-log-ic"></span> Lock</a>
                          </li>
                          <li><a href="#"><span class="icon nalika-settings author-log-ic"></span> Settings</a>
                          </li>
                          <li><a href="login.html"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button"
                          aria-expanded="false" class="nav-link dropdown-toggle"><i
                            class="icon nalika-menu-task"></i></a>

                        <div role="menu"
                          class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                          <ul class="nav nav-tabs custon-set-tab">
                            <li class="active"><a data-toggle="tab" href="#Notes">News</a>
                            </li>
                            <li><a data-toggle="tab" href="#Projects">Activity</a>
                            </li>
                            <li><a data-toggle="tab" href="#Settings">Settings</a>
                            </li>
                          </ul>

                          <div class="tab-content custom-bdr-nt">
                            <div id="Notes" class="tab-pane fade in active">
                              <div class="notes-area-wrap">
                                <div class="note-heading-indicate">
                                  <h2><i class="icon nalika-chat"></i> Latest News</h2>
                                  <p>You have 10 New News.</p>
                                </div>
                                <div
                                  class="notes-list-area notes-menu-scrollbar mCustomScrollbar _mCS_4 mCS-autoHide mCS_no_scrollbar"
                                  style="position: relative; overflow: visible;">
                                  <div id="mCSB_4" class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_outside"
                                    tabindex="0" style="max-height: 315px;">
                                    <div id="mCSB_4_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                      style="position:relative; top:0; left:0;" dir="ltr">
                                      <ul class="notes-menu-list">
                                        <li>
                                          <a href="#">
                                            <div class="notes-list-flow">
                                              <div class="notes-img">
                                                <img src="img/contact/4.jpg" alt="" class="mCS_img_loaded">
                                              </div>
                                              <div class="notes-content">
                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                                </p>
                                                <span>Yesterday 2:45 pm</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <div class="notes-list-flow">
                                              <div class="notes-img">
                                                <img src="img/contact/1.jpg" alt="" class="mCS_img_loaded">
                                              </div>
                                              <div class="notes-content">
                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                                </p>
                                                <span>Yesterday 2:45 pm</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <div class="notes-list-flow">
                                              <div class="notes-img">
                                                <img src="img/contact/2.jpg" alt="" class="mCS_img_loaded">
                                              </div>
                                              <div class="notes-content">
                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                                </p>
                                                <span>Yesterday 2:45 pm</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <div class="notes-list-flow">
                                              <div class="notes-img">
                                                <img src="img/contact/3.jpg" alt="" class="mCS_img_loaded">
                                              </div>
                                              <div class="notes-content">
                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                                </p>
                                                <span>Yesterday 2:45 pm</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <div class="notes-list-flow">
                                              <div class="notes-img">
                                                <img src="img/contact/4.jpg" alt="" class="mCS_img_loaded">
                                              </div>
                                              <div class="notes-content">
                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                                </p>
                                                <span>Yesterday 2:45 pm</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <div class="notes-list-flow">
                                              <div class="notes-img">
                                                <img src="img/contact/1.jpg" alt="" class="mCS_img_loaded">
                                              </div>
                                              <div class="notes-content">
                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                                </p>
                                                <span>Yesterday 2:45 pm</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <div class="notes-list-flow">
                                              <div class="notes-img">
                                                <img src="img/contact/2.jpg" alt="" class="mCS_img_loaded">
                                              </div>
                                              <div class="notes-content">
                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                                </p>
                                                <span>Yesterday 2:45 pm</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <div class="notes-list-flow">
                                              <div class="notes-img">
                                                <img src="img/contact/1.jpg" alt="" class="mCS_img_loaded">
                                              </div>
                                              <div class="notes-content">
                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                                </p>
                                                <span>Yesterday 2:45 pm</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <div class="notes-list-flow">
                                              <div class="notes-img">
                                                <img src="img/contact/2.jpg" alt="" class="mCS_img_loaded">
                                              </div>
                                              <div class="notes-content">
                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                                </p>
                                                <span>Yesterday 2:45 pm</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <div class="notes-list-flow">
                                              <div class="notes-img">
                                                <img src="img/contact/3.jpg" alt="" class="mCS_img_loaded">
                                              </div>
                                              <div class="notes-content">
                                                <p> The point of using Lorem Ipsum is that it has a more-or-less normal.
                                                </p>
                                                <span>Yesterday 2:45 pm</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div id="mCSB_4_scrollbar_vertical"
                                    class="mCSB_scrollTools mCSB_4_scrollbar mCS-light-1 mCSB_scrollTools_vertical"
                                    style="display: none;">
                                    <div class="mCSB_draggerContainer">
                                      <div id="mCSB_4_dragger_vertical" class="mCSB_dragger"
                                        style="position: absolute; min-height: 30px; top: 0px;">
                                        <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                      </div>
                                      <div class="mCSB_draggerRail"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="Projects" class="tab-pane fade">
                              <div class="projects-settings-wrap">
                                <div class="note-heading-indicate">
                                  <h2><i class="icon nalika-happiness"></i> Recent Activity</h2>
                                  <p> You have 20 Recent Activity.</p>
                                </div>
                                <div
                                  class="project-st-list-area project-st-menu-scrollbar mCustomScrollbar _mCS_5 mCS-autoHide mCS_no_scrollbar"
                                  style="position: relative; overflow: visible;">
                                  <div id="mCSB_5" class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_outside"
                                    tabindex="0" style="max-height: 315px;">
                                    <div id="mCSB_5_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                      style="position:relative; top:0; left:0;" dir="ltr">
                                      <ul class="projects-st-menu-list">
                                        <li>
                                          <a href="#">
                                            <div class="project-list-flow">
                                              <div class="projects-st-heading">
                                                <h2>New User Registered</h2>
                                                <p> The point of using Lorem Ipsum is that it has a more or less normal.
                                                </p>
                                                <span class="project-st-time">1 hours ago</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <div class="project-list-flow">
                                              <div class="projects-st-heading">
                                                <h2>New Order Received</h2>
                                                <p> The point of using Lorem Ipsum is that it has a more or less normal.
                                                </p>
                                                <span class="project-st-time">2 hours ago</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <div class="project-list-flow">
                                              <div class="projects-st-heading">
                                                <h2>New Order Received</h2>
                                                <p> The point of using Lorem Ipsum is that it has a more or less normal.
                                                </p>
                                                <span class="project-st-time">3 hours ago</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <div class="project-list-flow">
                                              <div class="projects-st-heading">
                                                <h2>New Order Received</h2>
                                                <p> The point of using Lorem Ipsum is that it has a more or less normal.
                                                </p>
                                                <span class="project-st-time">4 hours ago</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <div class="project-list-flow">
                                              <div class="projects-st-heading">
                                                <h2>New User Registered</h2>
                                                <p> The point of using Lorem Ipsum is that it has a more or less normal.
                                                </p>
                                                <span class="project-st-time">5 hours ago</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <div class="project-list-flow">
                                              <div class="projects-st-heading">
                                                <h2>New Order</h2>
                                                <p> The point of using Lorem Ipsum is that it has a more or less normal.
                                                </p>
                                                <span class="project-st-time">6 hours ago</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <div class="project-list-flow">
                                              <div class="projects-st-heading">
                                                <h2>New User</h2>
                                                <p> The point of using Lorem Ipsum is that it has a more or less normal.
                                                </p>
                                                <span class="project-st-time">7 hours ago</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#">
                                            <div class="project-list-flow">
                                              <div class="projects-st-heading">
                                                <h2>New Order</h2>
                                                <p> The point of using Lorem Ipsum is that it has a more or less normal.
                                                </p>
                                                <span class="project-st-time">9 hours ago</span>
                                              </div>
                                            </div>
                                          </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div id="mCSB_5_scrollbar_vertical"
                                    class="mCSB_scrollTools mCSB_5_scrollbar mCS-light-1 mCSB_scrollTools_vertical"
                                    style="display: none;">
                                    <div class="mCSB_draggerContainer">
                                      <div id="mCSB_5_dragger_vertical" class="mCSB_dragger"
                                        style="position: absolute; min-height: 30px; top: 0px;">
                                        <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                      </div>
                                      <div class="mCSB_draggerRail"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="Settings" class="tab-pane fade">
                              <div class="setting-panel-area">
                                <div class="note-heading-indicate">
                                  <h2><i class="icon nalika-gear"></i> Settings Panel</h2>
                                  <p> You have 20 Settings. 5 not completed.</p>
                                </div>
                                <ul class="setting-panel-list">
                                  <li>
                                    <div class="checkbox-setting-pro">
                                      <div class="checkbox-title-pro">
                                        <h2>Show notifications</h2>
                                        <div class="ts-custom-check">
                                          <div class="onoffswitch">
                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox"
                                              id="example">
                                            <label class="onoffswitch-label" for="example">
                                              <span class="onoffswitch-inner"></span>
                                              <span class="onoffswitch-switch"></span>
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="checkbox-setting-pro">
                                      <div class="checkbox-title-pro">
                                        <h2>Disable Chat</h2>
                                        <div class="ts-custom-check">
                                          <div class="onoffswitch">
                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox"
                                              id="example3">
                                            <label class="onoffswitch-label" for="example3">
                                              <span class="onoffswitch-inner"></span>
                                              <span class="onoffswitch-switch"></span>
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="checkbox-setting-pro">
                                      <div class="checkbox-title-pro">
                                        <h2>Enable history</h2>
                                        <div class="ts-custom-check">
                                          <div class="onoffswitch">
                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox"
                                              id="example4">
                                            <label class="onoffswitch-label" for="example4">
                                              <span class="onoffswitch-inner"></span>
                                              <span class="onoffswitch-switch"></span>
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="checkbox-setting-pro">
                                      <div class="checkbox-title-pro">
                                        <h2>Show charts</h2>
                                        <div class="ts-custom-check">
                                          <div class="onoffswitch">
                                            <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox"
                                              id="example7">
                                            <label class="onoffswitch-label" for="example7">
                                              <span class="onoffswitch-inner"></span>
                                              <span class="onoffswitch-switch"></span>
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="checkbox-setting-pro">
                                      <div class="checkbox-title-pro">
                                        <h2>Update everyday</h2>
                                        <div class="ts-custom-check">
                                          <div class="onoffswitch">
                                            <input type="checkbox" name="collapsemenu" checked=""
                                              class="onoffswitch-checkbox" id="example2">
                                            <label class="onoffswitch-label" for="example2">
                                              <span class="onoffswitch-inner"></span>
                                              <span class="onoffswitch-switch"></span>
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="checkbox-setting-pro">
                                      <div class="checkbox-title-pro">
                                        <h2>Global search</h2>
                                        <div class="ts-custom-check">
                                          <div class="onoffswitch">
                                            <input type="checkbox" name="collapsemenu" checked=""
                                              class="onoffswitch-checkbox" id="example6">
                                            <label class="onoffswitch-label" for="example6">
                                              <span class="onoffswitch-inner"></span>
                                              <span class="onoffswitch-switch"></span>
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="checkbox-setting-pro">
                                      <div class="checkbox-title-pro">
                                        <h2>Offline users</h2>
                                        <div class="ts-custom-check">
                                          <div class="onoffswitch">
                                            <input type="checkbox" name="collapsemenu" checked=""
                                              class="onoffswitch-checkbox" id="example5">
                                            <label class="onoffswitch-label" for="example5">
                                              <span class="onoffswitch-inner"></span>
                                              <span class="onoffswitch-switch"></span>
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </li>
                                </ul>

                              </div>
                            </div>
                          </div>
                        </div>
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