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
			<link rel="stylesheet" type="text/css" href="Route.css">
			<link rel="stylesheet" type="text/css" href="common.css">
			<link rel="stylesheet" type="text/css" href="UpdateDelete.css">
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
            
            		<table>
                    
                    <div class="Search">
                        <label><h2>Anand Nagar Route</h2></label>
                        <a href="UpdateRoute.php"><button>Add New Stop</button></a>
                    </div>

                    <thead>

                        <tr>
                            <th>Stop No</th>
                            <th>Spot Name</th>
                            <!--th>Timing</th-->
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <?php 
                                    while($arow = mysqli_fetch_assoc($aresult))
                                    {
                            ?>

                                <td><?php  echo $arow['Stop_No']; ?></td>
                                <td><?php  echo $arow['Stop_Name']; ?></td>
                                <!--td><?php  //echo $row['Year']; ?></td-->
                                <td><a href="UpdateRoute.php?asn=<?php echo $arow['Stop_No']?>&asnm=<?php echo $arow['Stop_Name']?>"><button class="Button Edit">Edit</button></a></td> 
                                <td><a href="delete1.php?asn=<?php echo $arow['Stop_No'];?>"><button class="Button Delete">Delete</button></a></td>

                        </tr>
                        
                            <?php
                                    }
                            ?>

                    </tbody>

                </table>

\
                <table>
                    
                    <div class="Search">
                        <label><h2>Ramanand Nagar Route</h2></label>
                        <a href="UpdateRoute.php"><button>Add New Stop</button></a>
                    </div>

                    <thead>

                        <tr>
                            <th>Stop No</th>
                            <th>Spot Name</th>
                            <!--th>Timing</th-->
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <?php 

                                    while($rrow = mysqli_fetch_assoc($rresult))
                                    {
                            ?>

                                <td><?php  echo $rrow['Stop_No']; ?></td>
                                <td><?php  echo $rrow['Stop_Name']; ?></td>
                                <!--td><?php  //echo $row['Year']; ?></td-->
                                <td><a href="UpdateRoute.php?rsn=<?php echo $rrow['Stop_No']?>&rsnm=<?php echo $rrow['Stop_Name']?>"><button class="Button Edit">Edit</button></a></td> 
                                <td><a href="delete2.php?rsn=<?php echo $rrow['Stop_No'];?>"><button class="Button Delete">Delete</button></a></td>

                        </tr>
                        
                            <?php
                                    }
                            ?>

                    </tbody>

                </table>


       






        <!--?php
            if (mysqli_num_rows($result) == 0) {
                echo "<p><center><h3>No records found.</h3></center></p>";
            }
        ?-->
			
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