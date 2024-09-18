<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "sggs_bus";

$conn = new mysqli($servername,$username,$password,$database);

$query = "SELECT * FROM `admin`";

$result = mysqli_query($conn,$query) or die(mysqli_error());

$count = mysqli_num_rows($result);

if ($count>0) {
	//echo "Login Successfull";

	
}

else{
	echo '<script>alert("No Records Found..");</script>';
	include 'UpdateDelete.php';
}

?>