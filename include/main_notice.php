








<style>
    .notice_title{
        text-align:justify;

    }
    .notice_box{
        padding: 1rem!important;
    }

    /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            .notice_title{
                text-align:left;
            }
            .notice_date{
                display: none;
            }
            .notice_box{
                padding: 0rem!important;
            }

        }

</style>


<?php
$notic_info = $obj->notice_display_limited();
$serial_no = 0;
?>


<div class="col-md-8">
    <div class=" rounded p-3 mr-0 notice_box">
        <div class="static_notice ">
            <h3 class="text-center" style="font-family: 'Courier New', Courier, monospace;">National Polytechnic Office Notice</h3>
            

            <table class="table table-responsive">
                <thead class="text-white">
                    <tr>
                        <th scope="col" style="width: 5%;">N0</th>
                        <th scope="col" > Notice Subject </th>
                        <th scope="col" style="width: 14%;" class="notice_date">Date</th>

                    </tr>
                </thead>
                <tbody class="text-white">
                <?php while ($main_notice = mysqli_fetch_assoc($notic_info)) {
                $serial_no++; ?>
                    <tr>
                        <th scope="row"><?php echo $serial_no; ?></th>
                        <td>
                            <a href="<?php echo $main_notice['notice_link']; ?> " target="_blank" class="text-white m-0 p-0 notice_title"><?php echo $main_notice['notice_title']; ?> </a>
                        </td>
                        <td class="notice_date">10/10/2024</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

            
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class=" btn btn-outline-primary ">See All Notice</button>
            </div>
        </div>
    </div>

</div>