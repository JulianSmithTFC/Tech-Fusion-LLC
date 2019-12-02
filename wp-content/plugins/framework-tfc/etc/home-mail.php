<?php

require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

$current_url = $_GET["url"];

if(isset( $_POST['fname'])){
    $fname = $_POST['fname'];
}

if(isset( $_POST['lname'])){
    $lname = $_POST['lname'];
}

if(isset( $_POST['bizname'])){
    $bizname = $_POST['bizname'];
}

if(isset( $_POST['bizphone'])){
    $bizphone = $_POST['bizphone'];
}

if(isset( $_POST['bizzip'])){
    $bizzip = $_POST['bizzip'];
}

if(isset( $_POST['phone'])){
    $phone = $_POST['phone'];
}

if(isset( $_POST['email'])){
    $email = $_POST['email'];
}



$subject = 'Website Contact Form Submission';

$mailheader .= "From: postmaster@southerntechfusion.com \r\n";
$mailheader .= "MIME-Version: 1.0\r\n";
$mailheader .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong></td><td > $fname $lname </td></tr>";
$message .= "<tr><td><strong>Business Name:</strong></td><td > $bizname </td></tr>";
$message .= "<tr><td><strong>Business Phone:</strong></td><td > $bizphone </td></tr>";
$message .= "<tr><td><strong>Business Zip Code:</strong></td><td > $bizzip </td></tr>";
$message .= "<tr><td><strong>Phone Number:</strong></td><td > $phone </td></tr>";
$message .= "<tr><td><strong>Email:</strong></td><td > $email </td></tr>";
$message .= "</table>";
$message .= "</body></html>";

$recipients = $_POST['strFormEmailRecipients'];

mail($recipients, $subject, $message, $mailheader) or die("Error!");

if ((get_field('turn_on_mailchimp_integration', 'option') == 1) && ( $_POST['apiMailchimp'] == 1 ) ){
    include 'api-mailchimp-addMember.php';
}

header('Location: ' . $current_url);

?>