<?php

	//error_reporting(0);
	$Name = $_POST['Name'];
	$Registration_No = $_POST['Registration_No'];
	$Year = $_POST['Year'];
	$Department = $_POST['Department'];
	$Gender = $_POST['Gender'];
	$Student_Contact_No = $_POST['Student_Contact_No'];
	$Parent_Contact_No = $_POST['Parent_Contact_No'];
	$Email = $_POST['Email'];
	$Pickup_Point = $_POST['Pickup_Point'];
	$Address = $_POST['Address'];

	$conn = mysqli_connect("localhost", "root", "","sggs_bus") or die("Connection Failed");

	if(!$conn){
			die("Sorry Failed to connect : ". mysqli_connect_error());
		}
		else{
			//	echo "connection successfull <br>";
		}


	if($Registration_No === "")
	{
		echo '<script>alert("Registration Number Can not be NULL");</script>';
		echo '<script>setTimeout(function() { window.location = "Insert.html"; }, 1000);</script>';	
		exit;
	}
	else
	{
		$checkUser = "SELECT * FROM `userdata` WHERE Registration_No = '$Registration_No'"; 
		$checkUserOutput = mysqli_query($conn,$checkUser);
		$countUser = mysqli_num_rows($checkUserOutput);

		if($countUser>0)
		{ 
			echo '<script>alert("Record for Input Registration Number Allready Exist");</script>';
			echo '<script>setTimeout(function() { window.location = "Insert.html"; }, 1000);</script>';	
			exit;
		}
		else
		{
			$query = "INSERT INTO `userdata` (`Name`, `Registration_No`, `Year`, `Department`, `Gender`, `Student_Contact_No`, `Parent_Contact_No`, `Email`, `Pickup_Point`, `Address`) VALUES ('$Name', '$Registration_No', '$Year', '$Department', '$Gender', '$Student_Contact_No', '$Parent_Contact_No', '$Email', '$Pickup_Point', '$Address');";

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
		}
	
	}
?>