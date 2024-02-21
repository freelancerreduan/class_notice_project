





<?php 

$notic_info = $obj ->latest_notice_display_limited();

if(isset($_POST['subscribe_now'])){
    $sub_notification = $obj-> subscribe_now_email($_POST);
}

?>



<div class="col-12 col-md-4 col-lg-4">
    <div class=" rounded p-3 ms-0 mt-3 shadow" style="box-shadow:9px 15px 86px #888888 !important;">


        <div class="p-2 rounded mb-4" style="background-color: #ffffff78!important;">
            <h5 class=" title " style="font-family: 'Courier New', Courier, monospace;">
                Letest Notice
            </h5>
        </div>
        <div class="latestnews">
        <marquee behavior="scroll" align="center" direction="up" scrollamount="1" scrolldelay="30" truespeed="" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 1, 0);" >
        <ul style="height: 29vh;">
            <?php while($notice = mysqli_fetch_assoc($notic_info)){ ?>
            <li class="d-flex align-items-center mt-4">
                <i class="fa-sharp fa-solid fa-circle-check me-2"></i>
                    <div class="menu_link ">
                        <a class="text-dark" href="download.php?id=<?php echo $notice['latest_notice_id']; ?>" class="">
                            <?php echo substr($notice['lt_title'],0,55); ?>
                        </a>
                        
                    </div>
                <div class="clear"></div>
            </li>
            <?php } ?>
        </ul>
    </marquee>
    <span class="more"><a href="notice.php">view all</a></span>
</div>
        <form action="" method="post">
            <p>  <?php if(isset($sub_notification)){ echo $sub_notification; } ?> </p>
            <div class="d-grid gap-2">
                <input type="email" class="rounded form-control text-white" name="sub_email" style="background: transparent;" placeholder="Enter Email">
                <input type="submit" class="btn btn-outline-primary btn-block" name="subscribe_now" value="Subscribe Now">
            </div>
        </form>

    </div>
</div>