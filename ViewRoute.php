<?php

require_once('DbConnect.php');
error_reporting(0);


$aquery = "SELECT * FROM `anroute`";
$aresult = mysqli_query($conn,$aquery);

$rquery = "SELECT * FROM `rnroute`";
$rresult = mysqli_query($conn,$rquery);

?>


<html>
		<head>
			<title>Where is My Bus</title>
			<link rel="stylesheet" type="text/css" href="common.css">
			<link rel="stylesheet" type="text/css" href="UpdateDelete.css">
            <link rel="stylesheet" type="text/css" href="Route.css">

            <style>
                .col{
                    font: 20px bolder;
                    background-color: black;
                    border-radius: 50%;
                    min-height: 100px;
                    max-height: 150px;
                    min-width: 100px;
                    max-width: 150px;
                }

                .row{
                    background-color: transparent;
                    box-shadow: none;
                    height: 100vh;
                    margin: 2% 0px;
                    display: flex;
                    flex-direction: column;
                }

                h1{
                    color: #fff;
                }

            </style>
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

    <div class="HomeDiv1" style="background-color: #a64dff;">

        <div style="display: flex;">
    		<div class="row" style="display: flex;">
                <center><h1>Anand Nagar Route</h1></center>
                <?php 
                        while($arow = mysqli_fetch_assoc($aresult))
                        {
                ?>
    			    <!--<div class="progress" id="progress"></div>-->
                    <div class="col"><?php  echo $arow['Stop_Name']; ?></div>
                <?php
                        }
                ?>

    		</div><br><br>

            <div class="row">
                <center><h1>R Nagar Route</h1></center>
                <?php 
                        while($rrow = mysqli_fetch_assoc($rresult))
                        {
                ?>
                    <!--<div class="progress" id="progress"></div>-->
                    <div class="col"><?php  echo $rrow['Stop_Name']; ?></div>
                <?php
                        }
                ?>

            </div>  
        </div>

        <div style="background-color: white; color: black; width: 98%; margin: 5% 1%; font-size: 20px; padding: 20px; min-height: 100px;">
            <p>
                Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.LOREM IPSUM GENERALorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                LOREM IPSUM GENERALorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
            </p>
        </div>
</div>


<script src="Route.js"></script> 

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