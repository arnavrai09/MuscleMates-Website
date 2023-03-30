<?php

if(isset($_POST['url']) && $_POST['url'] == ''){

	$youremail = 'ar9avrai@gmail.com';  

	$body = "You have got a new message from the contact form on your website - MuscleMates :
	
	Name:  $_POST[name]
	Email:  $_POST[email]
	Phone:  $_POST[phone]
	Message:  $_POST[message]";

	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	mail($youremail, 'Message from MuscleMates', $body, $headers );

} ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Thanks!</title>
</head>
<body>
<p> Thank you! We will get back to you soon.</p>
</body>
</html>