









<?php 
    include_once('admin/class/function.php'); 
    $obj =new personal();
    $pdf_file = $obj-> latest_notice_download();
?>




<?php
// File to be downloaded
$filename =  $pdf_file['lt_pdf'];

// Path to the file
$file_path = 'admin/pdf_upload/' . $filename;

// Check if the file exists
if (file_exists($file_path)) {
    // Set headers
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Content-Length: ' . filesize($file_path));

    // Read the file and output it to the browser
    readfile($file_path);
    exit;
} else {
    // File not found
    die('File not found.');
}



?>
