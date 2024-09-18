<?php

session_start();

$chktemp = $_SESSION['code'];
$otp = $_POST['otp'];
$birthday = $_SESSION['birthday'];

if ($chktemp == $otp) 
{
   //echo	"<br>Verified succesfully<br>";

	$conn = mysqli_connect("localhost", "root", "","savelife");
			
		$email = $_SESSION['email'];
		$fullname = $_SESSION['fullname'];
		$username = $_SESSION['username'];
		$password = $_SESSION['password'];

			if(!$conn){
				die("Sorry Failed to connect : ". mysqli_connect_error());
			}
			else{
				//echo "<br>connection successfull<br>";
				}
				 
			$sql = "INSERT INTO `usersinfo` (`Sr.no`, `Full Name`, `Email`, `Phone Number`, `Username`, `Password`, `Birthday`) VALUES ('', '$fullname' , '$email' , '', '$username', '$password', '$birthday')";

			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				
			if($result) {
						//echo "<br>Form Submitted Successfully<br>";
                        $label = " Account Created Successfully , Login to Continue.. ";
                        $_SESSION['label']=$label;
						include 'entry.html';
				}
				else{
						echo "<br>Form not Submitted because : ". mysqli_error($conn);
				}
}
else
	{
		//echo "OTP didn't match.. Try again ";
		$labelOtpFail = " OTP didn't match.. Try again ";
        $_SESSION['labelOtpFail']=$labelOtpFail;
		include 'otp.html';
	}
?>