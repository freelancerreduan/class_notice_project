



























<?php

$obj = new personal();


$notice_display  = $obj-> notice_display_limited();

// this code for(post Delete) in database
if(isset($_GET['status'])){
    if($_GET['status']='notice_deleted'){
        $id = $_GET['id'];
        $msg = $obj-> notice_deleted($id);
    }
} 
$counter= 0;
?>



<div class="container">
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <?php if(isset($msg)){ echo $msg; } ?>
        <div class="table-responsive">
            <h3 class="text-center text-danger mb-5">Notice Manage  Area</h3> <hr>
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Notice Title </th>
                        <th scope="col">Notice Link</th>

                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($info_display = mysqli_fetch_assoc($notice_display)){ $counter++; ?>
                        <tr style="height: 20px !important; ">
                            <th scope="row" style=""> <?php echo $counter; ?></th>
                            <td class="" style="max-width: 130px !important; overflow:hidden; white-space: normal;"><?php echo $info_display['notice_title']?> </td>
                            <td class="" style="max-width: 130px !important; overflow:hidden; white-space: normal;"><?php echo $info_display['notice_link']?> </td>
                            <td>
                                <a href="post_edite.php?status=post_edite&&id=<?php echo $info_display['notice_id']?>" class="btn btn-primary btn-block">Edite</a>
                                <a href="?status=notice_deleted&&id=<?php echo $info_display['notice_id']; ?>" class="btn btn-danger btn-block">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>





