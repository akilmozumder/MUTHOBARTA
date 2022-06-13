<?php




// API URL
$url = 'https://sysadmin.muthobarta.com/api/v1/send-sms';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data = array("receiver" => "01842949645","message" => "ইহা একটি টেস্ট  এস এম এস ", "remove_duplicate"=> true);
$postdata = json_encode($data);

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json',
'Authorization:Token ')); //your token

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

// Execute the POST request
$result = curl_exec($ch);

curl_close($ch);

var_dump($result);