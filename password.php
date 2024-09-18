<?php
	include 'password.html';
	$email = $_POST['email'];
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$birthday = $_POST['birthday'];

	session_start();
	$_SESSION['email']=$email;
	$_SESSION['fullname']=$fullname;
	$_SESSION['username']=$username;
	$_SESSION['birthday']=$birthday; 
?>