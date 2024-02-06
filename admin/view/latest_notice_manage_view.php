

















<?php

$obj = new personal();
    if(isset($_POST['ab_skill_add'])){
        $msg = $obj-> ab_skill($_POST);
    }

$lt_notice_display  = $obj-> latest_notice_display();



// this code for(post Delete) in database
if(isset($_GET['status'])){
    if($_GET['status']='letest_notice_delete'){
        $id = $_GET['id'];
        $msg = $obj-> letest_notice_delete($id);
    }
} 

?>



<div class="container">
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <?php if(isset($msg)){ echo $msg; } ?>
        <div class="table-responsive">
            <h3 class="text-center text-danger mb-5">Manage About Area</h3> <hr>
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Latest Title </th>
                        <th scope="col">Latest Description</th>
                        <th scope="col">Latest Img</th>

                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($lt_info_display = mysqli_fetch_assoc($lt_notice_display)){ ?>
                        <tr style="height: 20px !important;">
                            <th scope="" style=""><?php echo $lt_info_display['latest_notice_id']; ?></th>
                            <td class="" style="max-width: 117px !important; overflow:hidden; white-space: normal;"><?php echo $lt_info_display['lt_title']; ?> </td>
                            <td class="" style="max-width: 117px !important; overflow:hidden; white-space: normal;"><?php echo $lt_info_display['lt_link']; ?> </td>

                            <td>
                                <a href="post_edite.php?status=post_edite&&id=<?php echo $lt_info_display['latest_notice_id']; ?>" class="btn btn-primary btn-block">Edite</a>
                                <a href="?status=letest_notice_delete&&id=<?php echo $lt_info_display['latest_notice_id']; ?>" class="btn btn-danger btn-block">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>





