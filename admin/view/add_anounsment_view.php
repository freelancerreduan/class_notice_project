









<?php

$obj = new personal();
if (isset($_POST['an_notice_add'])) {
    $msg = $obj->an_notice_add($_POST);
}

?>


<form action="" method="post" enctype="multipart/form-data">
    <h2 class="text-center text-danger" style="font-family: 'Courier New', Courier, monospace;"> Notice Board Anounsment 2024 </h2>
    <?php if (isset($msg)) {
        echo $msg;
    } ?>
    <div class="form-group">
        <label for="notice">Enter Notice Anounsment:</label>
        <input class="form-control" type="text" name="notice_anounsement" id="notice_anounsement" placeholder="Enter Any Text..">
    </div>


    <input type="submit" name="an_notice_add" value="Add Protfolio" class="btn btn-primary btn-block">
</form>