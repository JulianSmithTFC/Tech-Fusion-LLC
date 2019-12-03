<?php

// API to mailchimp
$list_id = $_POST['apiMailchimpList'];
$authToken = get_field( 'mailchimp_api', 'option' );

// The data to send to the API
$postData = array(
    "email_address" => $email,
    "status" => "subscribed",
    "merge_fields" => array(
        "PHONE" => $phone,
        "FNAME"=> $fname,
        "LNAME"=> $lname)
);

// Setup cURL
$ch = curl_init('https://us3.api.mailchimp.com/3.0/lists/'.$list_id.'/members/');
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array(
        'Authorization: apikey '.$authToken,
        'Content-Type: application/json'
    ),
    CURLOPT_POSTFIELDS => json_encode($postData)
));
// Send the request
$response = curl_exec($ch);
