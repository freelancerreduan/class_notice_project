<?php






include_once('class/function.php');
$obj = new personal();

// this is code for ( admin login info chack) if admin info not valid! then go to Redirect( Login page );
session_start();
$id = $_SESSION['adminId'];
if ($id == null) {
  header("location:index.php");
}


// this is code for (Admin Logout ) info check and go to Login page
if (isset($_GET['admin_logout'])) {
  if ($_GET['admin_logout'] == 'logout') {
    $obj->admin_logout();
  }
}


?>



<?php include_once("include/head.php"); ?>
<div class="container-scroller">
  <?php include_once("include/navbar.php"); ?>

  <div class="container-fluid page-body-wrapper">

    <?php include_once("include/side_nav.php"); ?>
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="">
          <?php
          if (isset($view)) {
            if ($view == "dashboard") {
              include('view/dashboard_view.php');
            } 
            elseif ($view == "notice_add") {
              include('view/notice_add_view.php');
            }
            elseif ($view == "notice_manage") {
              include('view/notice_manage_view.php');
            }
            elseif ($view == "latest_notice_add") {
              include('view/latest_notice_add_view.php');
            }
            elseif ($view == "latest_notice_manage") {
              include('view/latest_notice_manage_view.php');
            }
            elseif ($view == "add_anounsment") {
              include('view/add_anounsment_view.php');
            }
            elseif ($view == "slider") {
              include('view/slider_area_view.php');
            }
            




          }




          ?>
        </div>
      </div>
      <?php include_once("include/footer.php"); ?>