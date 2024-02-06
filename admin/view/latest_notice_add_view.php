




































<?php

$obj = new personal();
    if(isset($_POST['latest_notice_add'])){
        if($_POST['latest_notice_add']==''){
            return "Enter Notice Title & Description";
        }
        $msg = $obj-> latest_notce_area($_POST);
    }

?>


<form action="" method="post" enctype="multipart/form-data">
    <h2 class="text-center text-danger" style="font-family: 'Courier New', Courier, monospace;">Latest Notice Board Area 2024 </h2>
    <?php if(isset($msg)){ echo $msg; } ?>
    <div class="form-group">
        <label for="notice">Enter Notice Title:</label>
        <input class="form-control" type="text" name="latest_notice_title" id="latest_notice_title" placeholder="Maximum Letter in 50...">
    </div>
    <div class="form-group">
        <label for="notice">Enter Notice Link:</label>
       <input type="text" name="latest_notice_link" class="form-control" placeholder="Example: https://demo/com/notice.pdf">
    </div>

    
    <input type="submit" name="latest_notice_add" value="Add Protfolio" class="btn btn-primary btn-block" placeholder="Enter Your Notice Description...">
</form