












































<?php

$obj = new personal();
    if(isset($_POST['latest_notice_add'])){
        $msg = $obj-> slider_add($_POST);
    }

?>


<form action="" method="post" enctype="multipart/form-data">
    <h2 class="text-center text-danger" style="font-family: 'Courier New', Courier, monospace;">Slider Area 2024 </h2>
    <?php if(isset($msg)){ echo $msg; } ?>
    <div class="form-group">
        <label for="notice">Select Slider Image:</label>
        <input class="form-control" type="file" name="slider_img" id="slider_img">
    </div>
    <div class="form-group">
        <label for="notice">Slider Redirect Link:</label>
        <input class="form-control" type="text" name="slider_link" id="slider_link">
    </div>
    
    <input type="submit" name="latest_notice_add" value="Add Protfolio" class="btn btn-primary btn-block" placeholder="Enter Your Notice Description...">
</form