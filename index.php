












<?php
include_once("admin/class/function.php");
$obj = new personal();






?>





<!-- html and font-end page content -->

<?php include_once("include/head.php"); ?>
<?php include_once("include/top_nav.php"); ?>
<div class="container">
    <div class="shadow rounded ">
        <section class="notice_section">
            <h2 class="text-center text-success mt-5" style="font-family: cursive;">NPI POLYTECHNIC NOTICE BOARD</h2>
            <?php include_once("include/anounsment.php");  ?>
            <?php include_once("include/slider.php"); ?>
            <div class="row">
                <?php include_once("include/main_notice.php"); ?>
                <?php include_once("include/latest_notice.php"); ?>
            </div>
        </section>
    </div>
<!-- <div class="subscribe_option">
        <div class="subscribe-section d-flex justfy-content-center email-intput-for-sub mx-auto py-3 py-md-4 ">
            <input type="text" class="form-control bg-dark text-white rounded-pill email-intput-for-sub py-3  ps-3 mt-0" aria-label="Subscribe  Now" aria-describedby="addon-wrapping" placeholder="Email">
            <a href="#" class="subscribe-btn rounded-pill text-white ">Subscribe</a>
        </div>
    </div> -->
</div>

<?php  include_once("include/js.php") ?>















