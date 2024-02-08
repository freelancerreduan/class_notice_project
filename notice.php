






<?php 
    include_once("admin/class/function.php");
    $obj = new personal();
    $notice_info = $obj->all_notice();

    $number_count = 0;
?>

<?php include_once('include/head.php');  ?>
<?php include_once('include/top_nav.php');  ?>








<div class="container">
    <div class="shadow-lg p-3 mb-5 mt-5 bg-body rounded">
        <h1 class="text-center" style="font-family: 'Courier New', Courier, monospace;">All Notice Area</h1>
        <div class="table-responsive">
            <table id="example1" class=" table-ras table-striped bordered table-hover dataTable no-footer table" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="example1_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 38px;">ক্রমিক</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 640px;">শিরোনাম</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 70px;">প্রকাশের তারিখ</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 62px;">ডাউনলোড</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($notice = mysqli_fetch_assoc($notice_info)){  $number_count++; ?>
                    <tr role="row" class="even">
                        <td> <?php echo $number_count; ?> </td>
                        <td><?php echo $notice['notice_title']; ?></td>
                        <td><?php echo $notice['notice_date']; ?></td>
                        <td><a target="_blank" href="download.php"><img src="upload/pdf.png" alt="pdf" class="file-icon"></a></td>

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>





<!--  --> </br>
</br></br></br></br></br></br></br></br>
