





<?php 

$notic_info = $obj ->latest_notice_display_limited();

if(isset($_POST['subscribe_now'])){
    $sub_notification = $obj-> subscribe_now_email($_POST);
}

?>



<div class="col-12 col-md-4 col-lg-4">
    <div class=" rounded p-3 ms-0 mt-3 bg-dark text-white">


        <div class="p-2 rounded mb-4" style="background-color: #ffffff78!important;">
            <h5 class=" title " style="font-family: 'Courier New', Courier, monospace;">
                Letest Notice
            </h5>
        </div>
        <div class="latestnews">
        <marquee behavior="scroll" align="center" direction="up" scrollamount="1" scrolldelay="30" truespeed="" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 1, 0);" >
        <ul>
            <?php while($notice = mysqli_fetch_assoc($notic_info)){ ?>
            <li class="d-flex align-items-center mt-4">
                <i class="fa-sharp fa-solid fa-circle-check me-2"></i>
                    <div class="menu_link ">
                        <a target="_blank" class="text-white" href="<?php echo $notice['lt_link']; ?>" class="">
                            <?php echo $notice['lt_title']; ?>
                        </a>
                    </div>
                <div class="clear"></div>
            </li>
            <?php } ?>
        </ul>
    </marquee>
    <span class="more"><a href="https://www.dpp.gov.bd/bgpress/index.php/page/news">view all</a></span>
    <p>&nbsp;</p>
</div>
        <form action="" method="post">
            <p>  <?php if(isset($sub_notification)){ echo $sub_notification; } ?> </p>
            <div class="d-grid gap-2">
                <input type="email" class="rounded form-control text-white" name="sub_email" style="background: transparent;" placeholder="Enter Email">
                <input type="submit" class="btn btn-outline-primary btn-block" name="subscribe_now">
            </div>
        </form>

    </div>
</div>