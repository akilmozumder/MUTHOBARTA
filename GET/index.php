<?php
 

	   $token = ""; //your token
	   $remove_duplicate = true;
	   $receiver = '01730586226';
	   $message = 'বাংলাদেশ একটি সুন্দর দেশ';
	
	$data=sendSMS($token, $receiver, $message, $remove_duplicate);
	

    print_r($data);

	
	function sendSMS($token, $receiver, $message, $remove_duplicate)
	{	
		// make sure passed string is url encoded
		$message = rawurlencode($message);
		
		$url = "https://sysadmin.muthobarta.com/api/v1/send-sms-get?token=$token&receiver=$receiver&message=$message&remove_duplicate=$remove_duplicate";			

		$c = curl_init(); 
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($c, CURLOPT_URL, $url); 
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
		$response = curl_exec($c); 
		return $response;
	}


?>