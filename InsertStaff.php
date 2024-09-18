<?php

	//error_reporting(0);
	$Name = $_POST['Name'];
	$Gender = $_POST['Gender'];
	$Staff_Contact_No = $_POST['Staff_Contact_No'];
	$Alternate_Contact_No = $_POST['Alternate_Contact_No'];
	$TNT = $_POST['TNT'];
	$Bus_Route = $_POST['Bus_Route'];
	$Pickup_Point = $_POST['Pickup_Point'];
	$Address = $_POST['Address'];

	$conn = mysqli_connect("localhost", "root", "","sggs_bus") or die("Connection Failed");

	if(!$conn){
			die("Sorry Failed to connect : ". mysqli_connect_error());
		}
		else{
			//	echo "connection successfull <br>";
		}



	$query = "INSERT INTO `staffdata` (`Name`, `Gender`, `Staff_Contact_No`, `Alternate_Contact_No`, `TNT`, `Bus_Route`, `Pickup_Point`, `Address`) VALUES ('$Name', '$Gender', '$Staff_Contact_No', '$Alternate_Contact_No', '$TNT', '$Bus_Route', '$Pickup_Point', '$Address');";


	$result = mysqli_query($conn,$query) or die(mysqli_error());

	if($result) {
					//echo "<br>Form Submitted Successfully<br>";
					echo '<script>alert("Record Inserted Successfully");</script>';
					echo '<script>setTimeout(function() { window.location = "Insert.html"; }, 1000);</script>';	
					exit;
			}
			else{
					echo '<script>alert("Record Not Inserted");</script>';
					echo '<script>setTimeout(function() { window.location = "Insert.html"; }, 1000);</script>';	
					exit;
			}
	
	
?>