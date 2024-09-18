<?php

require_once('DbConnect.php');
error_reporting(0);

$nm =  $_GET['nm'];
$rn =  $_GET['rn'];
$yr =  $_GET['yr'];
$dp =  $_GET['dp'];
$gn =  $_GET['gn'];
$sc =  $_GET['sc'];
$pc =  $_GET['pc'];
$em =  $_GET['em'];
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
    <form action="edit.php" method="POST">
        <div class="form">
    		<div class="child">
			    <input value="<?php echo $rn ?>" required="required" type="text" name="Registration_No" placeholder="Registration Number" readonly style="background-color: grey"><br>
                <input value="<?php echo $nm ?>" required type="text" name="Name" placeholder="Name"><br>
                <input value="<?php echo $yr ?>" required type="text" name="Year" placeholder="Year"><br>
                <input value="<?php echo $dp ?>" required type="text" name="Department" placeholder="Department"><br>
                <input value="<?php echo $gn ?>" required type="text" name="Gender" placeholder="Gender">
                
    		</div>

    		<div class="child">
                <input value="<?php echo $sc ?>" required type="text" name="Student_Contact_No" placeholder="Student's Contact Number"><br>
                <input value="<?php echo $pc ?>" required type="text" name="Parent_Contact_No" placeholder="Parent's Contact Number"><br>
                <input value="<?php echo $em ?>" required type="text" name="Email" placeholder="Bus Route"><br> 
			    <input value="<?php echo $pp ?>" required type="text" name="Pickup_Point" placeholder="Pick up point"><br>
                <input value="<?php echo $ad ?>" required type="text" name="Address" placeholder="Student Address"> 
    		</div>
        </div>
        <div class="submitDiv">
            <input type="submit" name="" class="submit">
        </div>
    </form>

    <div class="submitDiv">
        <a href="UpdateDelete.php"><button class="submit" style="">View Records</button></a>
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