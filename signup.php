<?php

	$code = rand(100000,999999);
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	session_start();

	$_SESSION['code'] = $code;
	$email = $_SESSION['email'];
	$fullname = $_SESSION['fullname'];
	$username = $_SESSION['username'];
	$password = $_SESSION['birthday'];

	if ($_POST['password'] == $_POST['cpassword'])
	{
		$headers = "From: savelifes07@gmail.com";
		$subject = "verify otp";
		$message = " Hey $fullname here is your OTP for save life foundation, $code ";
		if(mail($email, $subject, $message, $headers, "-f" . $headers))
		{
			include 'otp.html';
		}
		else
		{
			echo '<script>alert("Unknown Error Ocuured while Sending Email.. Please Try Again");</script>';
			echo '<script>window.location.href = "password.html";</script>';
		}
	}
	else
	{
		 echo '<script>window.location.href = "password.html";</script>';	
	}

?>