



























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
        <input class="form-control" type="text" name="notice_title" id="notice_title" placeholder="Maximum Letter in 50..." required>
    </div>
    <div class="form-group">
        <label for="notice">Enter Notice Link: (Optional: Plase 1 Item Select in PDF OR URL ) </label>
        <input class="form-control" type="text" name="notice_link" id="notice_link" placeholder="Exmple: https://demo.com">
    </div>
    <div class="form-group">
        <label for="notice">Upload PDF File: (Optional: Plase 1 Item Select in PDF OR URL )</label>
        <input type="file" name="pdf_file_notice" class="form-control" accept=".pdf" title="Upload PDF"/>
    </div>
    
    
    <input type="submit" name="notice_add" value="Add Main Notice" class="btn btn-primary btn-block">
</form