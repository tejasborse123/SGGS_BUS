<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "sggs_bus";

$conn = new mysqli($servername,$username,$password,$database);

$username = $_POST['Username'];
$password = $_POST['Password'];

$query = "SELECT * FROM `admin` WHERE `Username` = '$username' AND `Password` = '$password'";

$result = mysqli_query($conn,$query) or die(mysqli_error());

$count = mysqli_num_rows($result);

echo $query;

if ($count>0) {
	//echo "Login Successfull";

	if ( isset(  $_POST['rememberPassword']  )  ) {
		setcookie('username', $username , time()+(10*365*24*60*60) , "/");
		setcookie('password', $password , time()+(10*365*24*60*60) , "/");
		//echo "Cookie set Successfully";
	}
	header("location:Controls.html");
}

else{
	echo '<script>alert("Invalid Username or Password.. Try Again");</script>';
	include 'Profile.html';
}

?>
