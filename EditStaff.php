<?php

require_once('DbConnect.php');
error_reporting(0);

$nm =  $_GET['nm'];
$gn =  $_GET['gn'];
$sc =  $_GET['sc'];
$ac =  $_GET['ac'];
$TNT =  $_GET['TNT'];
$br =  $_GET['br'];
$pp =  $_GET['pp'];
$ad =  $_GET['ad'];


?>


<!DOCTYPE html>
<html>
<head>
	<title>Where is My Bus</title>
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="Insert.css">
	<script src="https://kit.fontawesome.com/070428bd88.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body onload="myFunction()">

<!--
    <div id="loading">
       <div class="loader">
                <div class="loader loader-inner">   
                </div>
        </div>
    </div>
-->

<div class="FullPage">
<!--- //////////////////////////////////////////////Navbar////////////////////////////////////////////////////////////// -->
    <div class="mcontainer">
          <!---Navigation Bar -->

                <div class="togglearea">
                  <label for="toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                  </label>
                </div>
         		 <input type="checkbox" id="toggle" title="toggle">
		            <div class="navbar">
		              
		                     <div class="logo"><label id="lg">SGGS BUS</label></div>
		                      <ul>
		                         <li><a href="index.html"> Home</a></li>
		                         <li><a href="contact.html"> Contact</a></li>
		                         <li><a href="about.html"> About</a></li> 
		                         <button style="background-color: dodgerblue; border: none;" class="button"><li><a class="img1" href="Profile.html"><img src="images/profile-line.png" alt="account" width="25" height="23" ></a></li></button>
		                      </ul>
		            </div>
    </div>

    
<div class="Operations">
    <center style="margin-top: 0px;"><h1>Insert Record</h1></center>
    <form action="EditStaffDB.php" method="POST">
        <div class="form">
    		<div class="child"> 
                        <input required type="text" value="<?php echo $nm ?>" name="Name" placeholder="Name" readonly><br>
                        <input required type="text" value="<?php echo $gn ?>" name="Gender" placeholder="Gender"><br>
                        <input required type="text" value="<?php echo $sc ?>" name="Staff_Contact_No" placeholder="Staff Contact Number"><br> 
                        <input required type="text" value="<?php echo $ac ?>" name="Alternate_Contact_No" placeholder="Alternate Contact Number"><br>
                    </div>

                    <div class="child">
                        <input required type="text" value="<?php echo $TNT ?>" name="TNT" placeholder="Teaching / Non Teaching"><br>
                        <input required type="text" value="<?php echo $br ?>" name="Bus_Route" placeholder="Bus Route"><br>
                        <input required type="text" value="<?php echo $pp ?>" name="Pickup_Point" placeholder="Pick up point"><br>
                        <input required type="text" value="<?php echo $ad ?>" name="Address" placeholder="Student Address"> 
                    </div>
        </div>
        <div class="submitDiv">
            <input type="submit" name="" class="submit">
        </div>
    </form>

    <div class="submitDiv">
        <a href="ViewStaff.php"><button class="submit" style="">View Records</button></a>
    </div>
</div>

   
	<footer class="footer">
		  <div class="copyright">
		  	  <h3> All rights reserved. ©SGGSIE&T </h3>
		  </div>
	</footer>

</div>
</body>

	<script>
      var preloader = document.getElementById('loading');
		      function myFunction() 
		      {
		        preloader.style.display = 'none';
		      }
    </script>
    <script src="main.js"></script>
</html>