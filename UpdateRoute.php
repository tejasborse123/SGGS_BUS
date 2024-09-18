<?php

require_once('DbConnect.php');
error_reporting(0);

$AStopNo =  $_GET['asn'];
$AStopName =  $_GET['asnm'];

$RStopNo =  $_GET['rsn'];
$RStopName =  $_GET['rsnm'];

?>

<html>
		<head>
			<title>Where is My Bus</title>
			<link rel="stylesheet" type="text/css" href="common.css">
            <link rel="stylesheet" type="text/css" href="Controls.css">
			<link rel="stylesheet" type="text/css" href="InsertRoute.css">
		</head>
		<body onload="myFunction()">

			    <div id="loading">
			       <div class="loader">
			                <div class="loader loader-inner">   
			                </div>
			        </div>
			    </div>
			
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
		                         <button style="background-color: dodgerblue; border: none;"><li><a class="img1" href="profile.html"><img src="images/profile-line.png" alt="account" width="25" height="23" ></a></li></button>
		                      </ul>
		            </div>
    </div>

    <div class="HomeDiv1" style="background-color: transparent;">
            <div class="Back">
                <center><h1>ADD SGGS BUS ROUTE</h1></center>
            </div>
            <div class="SearchOption">

                <div class="OptChild">
                    <form action="InsertRoute.php" method="POST">
                        <center><h2>AN Route</h2></center><br>
                        <input required type="text" required name="AStopNo" value="<?php echo $AStopNo ?>" required name="AStopNo" placeholder="Stop Number"><br>
                        <input required type="text" required name="AStopName"value="<?php echo $AStopName ?>" required name="AStopName" placeholder="Stop Name"><br>
                        <!--input required type="time" required name="ATime" placeholder="Timing"><br--><br>
                        <input type="submit" name="ANSubmit" id="Buttons" value="ADD"><br><br>
                        <input type="submit" name="ANUpdate" id="Buttons" value="UPDATE">
                    </form>
                </div>
                <div class="OptChild">
                    <form action="InsertRoute.php" method="POST">
                        <center><h2>RN Route</h2></center><br>
                        <input required type="text" required name="RStopNo" value="<?php echo $RStopNo ?>" required name="RStopNo" placeholder="Stop Number"><br>
                        <input required type="text" required name="RStopName" value="<?php echo $RStopName ?>" required name="RStopName" placeholder="Stop Name"><br>
                        <!--input required type="time" required name="RTime" placeholder="Timing"><br--><br>
                        <input type="submit" name="RNSubmit" id="Buttons" value="ADD"><br><br>
                        <input type="submit" name="RNUpdate" id="Buttons" value="UPDATE">
                    </form>
                </div>

            </div><br>

            <div>
                <div class="Back" style="justify-content: space-around; padding: 20px 0px;">
                    <a href="Route.php"><button>View Route</button></a>
                    <a href="Route.php"><button>Search Route</button></a>
                    <a href="Route.php"><button>Delete Route</button></a>
                </div>
            </div>

        </div>

<footer class="footer" style="text-align: center;">
  <div class="copyright">
  	  <h3> All rights reserved. © Save Life Foundation</h3>
  </div>
</footer>

</body>	

<script>
	var preloader = document.getElementById('loading');
	function myFunction() 
	{
	preloader.style.display = 'none';
	}
</script>
   
</html>
