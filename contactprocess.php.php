<?php
	$name = $_POST['name'];
	$user_email = $_POST['email'];
	$mobileno =$_POST['mobileno'];
	$message = $_POST['msg'];
	
	$from = "sakshijagtap2016@gmail.com"
	$to = "sakshi.jagtap19@vit.edu";
	$subject = "MyDoctor Bot Response from user";
	$body = "User Name: $name. \n User Email: $user_email \n Mobile No: $mobileno \n Message: $message ";

	$headers = "From: $from \r\n";
	$headers = "Reply-To: $user_email \r\n";
	mail($to, $subject, $body, $headers);
	
?>
