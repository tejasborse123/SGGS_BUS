<?php

require_once('DbConnect.php');
error_reporting(0);

$query = "SELECT * FROM USERDATA";
$result = mysqli_query($conn,$query);

?>


<?php

require_once('DbConnect.php');
error_reporting(0);

if (isset($_POST['SubmitRegBtn'])) 
{
    $Search_By = $_POST['Registration_No'];
    $query = "SELECT * FROM `userdata` WHERE `Registration_No` = '$Search_By'";
    $result = mysqli_query($conn,$query);
}
else if (isset($_POST['SubmitNameBtn'])) 
{
    $Search_By = $_POST['Name'];
    $query = "SELECT * FROM `userdata` WHERE `Name` LIKE  '%$Search_By%'";
    $result = mysqli_query($conn,$query);
}
else if (isset($_POST['SubmitStudConBtn'])) 
{
    $Search_By = $_POST['Contact_No'];
    $query = "SELECT * FROM `userdata` WHERE `Student_Contact_No` = '$Search_By'";
    $result = mysqli_query($conn,$query);
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Where is My Bus</title>
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="UpdateDelete.css">
	<script src="https://kit.fontawesome.com/070428bd88.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body onload="myFunction()">

    <div id="loading">
       <div class="loader">
                <div class="loader loader-inner">   
                </div>
        </div>
    </div>

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

    <div class="HomeDiv1" style="background-color: #a64dff;">

        <table>
            
            <div class="Search">
                <a href="Search.html"><button>Search Record</button></a>
                <content><h1>Student Record</h1></content>
                <a href="Insert.html"><button>Add New Record</button></a>
            </div>

            <thead>

                <tr>
                    <th>Registration No</th>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Department</th>
                    <th>Gender</th>
                    <th>Student Contact No</th>
                    <th>Parent Contact No</th>
                    <th>Bus Route</th>
                    <th>Pick Up Point</th>
                    <th>Address</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

            </thead>

            <tbody>

                <tr>
                    <?php 

                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>

                        <td><?php  echo $row['Registration_No']; ?></td>
                        <td><?php  echo $row['Name']; ?></td>
                        <td><?php  echo $row['Year']; ?></td>
                        <td><?php  echo $row['Department']; ?></td>
                        <td><?php  echo $row['Gender']; ?></td>
                        <td><?php  echo $row['Student_Contact_No']; ?></td>
                        <td><?php  echo $row['Parent_Contact_No']; ?></td>
                        <td><?php  echo $row['Email']; ?></td>
                        <td><?php  echo $row['Pickup_Point']; ?></td>
                        <td><?php  echo $row['Address']; ?></td>
                        <td><a href="Edit1.php?nm=<?php echo $row['Name']?>&rn=<?php echo $row['Registration_No']?>&yr=<?php echo $row['Year']?>&dp=<?php echo $row['Department']?>&gn=<?php echo $row['Gender']?>&sc=<?php echo $row['Student_Contact_No']?>&pc=<?php echo $row['Parent_Contact_No']?>&em=<?php echo $row['Email']?>&pp=<?php echo $row['Pickup_Point']?>&ad=<?php echo $row['Address']?>"><button class="Button Edit">Edit</button></a></td> 
                        <td><a href="delete.php?rn=<?php echo $row['Registration_No']; ?>"><button class="Button Delete">Delete</button></a></td>

                </tr>
                
                    <?php
                        }
                    ?>

            </tbody>

        </table>

        <?php
            if (mysqli_num_rows($result) == 0) {
                echo "<p><center><h3>No records found.</h3></center></p>";
            }
        ?>

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