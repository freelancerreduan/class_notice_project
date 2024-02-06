



























<?php

$obj = new personal();
    if(isset($_POST['notice_add'])){
        $msg = $obj-> notce_area($_POST);
    }

?>


<form action="" method="post" enctype="multipart/form-data">
    <h2 class="text-center text-danger" style="font-family: 'Courier New', Courier, monospace;"> Notice Board Area 2024 </h2>
    <?php if(isset($msg)){ echo $msg; } ?>
    <div class="form-group">
        <label for="notice">Enter Notice Title:</label>
        <input class="form-control" type="text" name="notice_title" id="notice_title" placeholder="Maximum Letter in 50...">
    </div>
    <div class="form-group">
        <label for="notice">Enter Notice Link:</label>
        <input class="form-control" type="text" name="notice_link" id="notice_link" placeholder="Exmple: https://demo.com">
    </div>
    
    
    <input type="submit" name="notice_add" value="Add Protfolio" class="btn btn-primary btn-block" placeholder="Enter Your Notice Description...">
</form