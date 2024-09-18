<?php

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$message = $_POST['message'];

	$conn = mysqli_connect("localhost", "root", "","savelife") or die("Connection Failed");

	if(!$conn){
			die("Sorry Failed to connect : ". mysqli_connect_error());
		}
		else{
			echo "connection successfull <br>";
		}

	$query = "INSERT INTO `feedback` (`Sr.no`, `Name`, `Phone number`, `Email`, `Password`, `Message`) VALUES (NULL, '$name' ,'$phone' ,'$email' ,'$password' ,'$message');";

	$result = mysqli_query($conn,$query) or die(mysqli_error());

	if($result) {
					//echo "<br>Form Submitted Successfully<br>";
					header("Location: contact.html ");
			}
			else{
					echo "<br>Form not Submitted because : ". mysqli_error($conn);
					header("Location: contact.html ");
			}
?>