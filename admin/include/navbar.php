





<?php 
    if(isset($_GET['admin_logout'])){
        if($_GET['admin_logout']=='logout'){
            $obj-> admin_logout();
        }
    }

?>

<style>
  .dropdown-item:hover{
    color: aliceblue;
    background-color: #282f3a ;
  }
</style>
<!--  Top nave Completed koresi.... -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row " style="border :none;">
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end bg-dark shadow" style="background-color:  #ffffff !important; border: none; width:100% !important; ">
    <p class="h4 d-inline">National Clg </p>
        <ul class="navbar-nav mr-lg-2 ml-5">
          <li class="nav-item nav-user-status dropdown">
              <a href="../index.php" style="text-decoration: none;" class="mb-0 h5 " target="_blank"> View Site</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <!-- logout korar jonne  -->
          <li class="nav-item dropdown bg-dark">
            <a class="dropdown-item preview-item text-white" href="?admin_logout=logout"> logout </a>
          </li>
        </ul>

        <!-- this btn use for  responsive -->
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="typcn typcn-th-menu"></span>
        </button>
      </div>
    </nav>


