















<?php

include_once('../class/function.php');


$obj = new personal();
if(isset($_POST['notice_add'])){
    $msg = $obj-> notce_area($_POST);
}

$_SERVER['REQUEST_METHOD'];







// ডাটাবেজ সংযোগ করুন
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "npi";

$conn = new mysqli($servername, $username, $password, $dbname);

// যদি সংযোগ সফল হয়
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}







// ডাটাবেজ থেকে ইমেইল ঠিকানা পোস্ট করুন
$sql = "SELECT * FROM subscribe";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // প্রতিটি পদক্ষেপে ইমেইল পাঠানো
    while($row = $result->fetch_assoc()) {
        $email = $row["sub_email"];
        send_email($email);
    }
} else {
    echo "No emails found in the database";
}

// সংযোগ বন্ধ করুন
$conn->close();

function send_email($to_email) {
    // ইমেইল পাঠানোর জন্য PHPMailer লাইব্রেরি ব্যবহার করুন
    require 'vendor/autoload.php'; // আপনার autoload.php ফাইলের পথ অনুযায়ী পরিবর্তন করুন


    $mail = new PHPMailer\PHPMailer\PHPMailer();


    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;
    $mail->Username = 'freelancerreduan100@gmail.com';
    $mail->Password = 'ygdenlpfsjdqgcsj'; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Port = 587; 

    // ইমেইল পাঠানোর মাধ্যমে সেটাপ
    $mail->setFrom('demo@gmail.com', 'Smart Collage'); // প্রেরকের ইমেইল এবং নাম
    $mail->addAddress($to_email); // প্রাপকের ইমেইল

    // ইমেইল সামগ্রী
    $mail->isHTML(true); // HTML ফরম্যাটে ইমেইল
    $mail->Subject = 'I Love Nadiya'; // ইমেইল বিষয়
    $mail->Body    = 'This is a Love Massege for Testing'; // ইমেইল বডি

    // ইমেইল পাঠানো
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        return header('location: ../notice_add.php');
    }
}







?>


