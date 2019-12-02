<?php

$current_url = $_GET["url"];
$formID = $_GET["formID"];

if(isset( $_POST['fname'])){
    $fname = $_POST['fname'];
}

if(isset( $_POST['lname'])){
    $lname = $_POST['lname'];
}

if(isset( $_POST['companyName'])){
    $companyName = $_POST['companyName'];
}

if(isset( $_POST['email'])){
    $email = $_POST['email'];
}

if(isset( $_POST['phone'])){
    $phone = $_POST['phone'];
}

if(isset( $_POST['message'])){
    $msg = $_POST['message'];
}



if($formID == 'one'){

    if(isset( $_POST['budget'])){
        $budget = $_POST['budget'];
    }

    if((isset( $_POST['strCheckboxesIDs'])) && (isset( $_POST['strCheckboxesLabels']))){
        $strCheckboxesIDs = $_POST['strCheckboxesIDs'];
        $strCheckboxesLabels = $_POST['strCheckboxesLabels'];

        $checkboxesIDs = explode("~", $strCheckboxesIDs);
        $strcheckboxesLabelFixed = str_replace('_', ' ', $strCheckboxesLabels);
        $checkboxesLabels = explode("~", $strcheckboxesLabelFixed);
    }

    if(isset( $_POST['strFormOneEmailRecipients'])){
        $recipients = $_POST['strFormOneEmailRecipients'];
    }
}

if($formID == 'two'){
    $recipients = $_POST['strFormTwoEmailRecipients'];
}


if($formID == 'one'){
    $subject = 'Website Contact Form Submission';
}

if($formID == 'two'){
    $subject = 'Website Contact Form Submission';
}

$mailheader .= "From: postmaster@southerntechfusion.com \r\n";
$mailheader .= "MIME-Version: 1.0\r\n";
$mailheader .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


if($formID == 'one'){
    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong></td><td > $fname $lname </td></tr>";
    $message .= "<tr><td><strong>Company Name:</strong></td><td > $companyName </td></tr>";
    $message .= "<tr><td><strong>Email:</strong></td><td > $email </td></tr>";
    $message .= "<tr><td><strong>Phone Number:</strong></td><td > $phone </td></tr>";
    $message .= "<tr><td><strong>Budget:</strong></td><td > $budget </td></tr>";
    $message .= "<tr><td><strong>Tell us about your project...</strong></td><td > $msg </td></tr>";
    if((isset( $_POST['strCheckboxesIDs'])) && (isset( $_POST['strCheckboxesLabels']))) {
        $message .= "<tr><td><strong>Project Type:</strong></td><td>";
        $count = 0;
        foreach ($checkboxesIDs as $checkID) {
            if (isset($_POST[$checkID])) {
                $checkboxeSelection = str_replace('on', 'interested', $_POST[$checkID]);
                $message .= "<p><strong>$checkboxesLabels[$count]:</strong> $checkboxeSelection</p>";
            }
            $count++;
        }
        $message .= "</td></tr>";
    }
    $message .= "</table>";
    $message .= "</body></html>";
}

if($formID == 'two'){
    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong></td><td > $fname $lname </td></tr>";
    $message .= "<tr><td><strong>Company Name:</strong></td><td > $companyName </td></tr>";
    $message .= "<tr><td><strong>Email:</strong></td><td > $email </td></tr>";
    $message .= "<tr><td><strong>Phone Number:</strong></td><td > $phone </td></tr>";
    $message .= "<tr><td><strong>I would like more information on...:</strong></td><td > $msg </td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";
}


mail($recipients, $subject, $message, $mailheader) or die("Error!");

header('Location: ' . $current_url);

?>

