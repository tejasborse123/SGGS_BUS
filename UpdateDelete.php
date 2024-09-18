<?php

  require_once('DbConnect.php');
  error_reporting(0);

  $query = "SELECT * FROM USERDATA";
  $result = mysqli_query($conn, $query);

  if (isset($_POST['SearchByYear'])) 
  {
       $query = "SELECT * FROM USERDATA ORDER BY Year ASC";
       $result = mysqli_query($conn, $query);

      $groupedData = [];

      while ($row = mysqli_fetch_assoc($result)) {
          $groupingKey = $row['Year']; 

          if (!isset($groupedData[$groupingKey])) {
              $groupedData[$groupingKey] = [];
          }

          $groupedData[$groupingKey][] = $row;
      }

      $heading = "Group By Year";
      $groupClass = "year-group";
      $groupingColumnName = "Year";
  }

  else if (isset($_POST['SearchByGender'])) 
  {
      $groupedData = [];

      while ($row = mysqli_fetch_assoc($result)) {
          $groupingKey = $row['Gender']; 

          if (!isset($groupedData[$groupingKey])) {
              $groupedData[$groupingKey] = [];
          }

          $groupedData[$groupingKey][] = $row;
      }
      
      $heading = "Group By Gender";
      $groupClass = "gender-group";
      $groupingColumnName = "Gender";
  }

  else if (isset($_POST['SearchByDept'])) 
  {
      $groupedData = [];

      while ($row = mysqli_fetch_assoc($result)) {
          $groupingKey = $row['Department']; 

          if (!isset($groupedData[$groupingKey])) {
              $groupedData[$groupingKey] = [];
          }

          $groupedData[$groupingKey][] = $row;
      }
      
      $heading = "Group By Department";
      $groupClass = "dept-group";
      $groupingColumnName = "Department";
  }

  else if (isset($_POST['SearchByPickup'])) 
  {
      $groupedData = [];

      while ($row = mysqli_fetch_assoc($result)) {
          $groupingKey = $row['Pickup_Point']; 

          if (!isset($groupedData[$groupingKey])) {
              $groupedData[$groupingKey] = [];
          }

          $groupedData[$groupingKey][] = $row;
      }
      
      $heading = "Group By Pickup Point";
      $groupClass = "pickup-group";
      $groupingColumnName = "Pickup_Point";
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

    <style>

      .gender-group,.dept-group,.pickup-group,.year-group {
          background-color: #4CAF50; /* Green for Gender */
      }
      
    </style>
</head>
<body onload="myFunction()">
<div class="FullPage">
    <div class="mcontainer">
        <!-- Navigation Bar -->
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
                <button style="background-color: dodgerblue; border: none;" class="button">
                    <li><a class="img1" href="Profile.html"><img src="images/profile-line.png" alt="account" width="25" height="23"></a></li>
                </button>
            </ul>
        </div>
    </div>
    <div class="HomeDiv1" style="background-color: #a64dff;">

        <div class="Search">
                <a href="Search.html"><button>Search Record</button></a>
                <content><h1><?php echo $heading; ?></h1></content>
                <a href="Insert.html"><button>Add New Record</button></a>
        </div>

        <?php
        foreach ($groupedData as $groupKey => $group) {
        ?>
        <table style="margin-bottom: 100px;">
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
                <?php
                foreach ($group as $row) {
                ?>
                <tr>
                    <td> <?php echo $row['Registration_No']; ?></td>
                    <td> <?php echo $row['Name']; ?></td>
                    <td class="<?php echo ($groupingColumnName === 'Year') ? $groupClass : ''; ?>"> <?php echo $row['Year']; ?></td>
                    <td class="<?php echo ($groupingColumnName === 'Department') ? $groupClass : ''; ?>"> <?php echo $row['Department']; ?></td>
                    <td class="<?php echo ($groupingColumnName === 'Gender') ? $groupClass : ''; ?>"> <?php echo $row['Gender']; ?></td>
                    <td> <?php echo $row['Student_Contact_No']; ?></td>
                    <td> <?php echo $row['Parent_Contact_No']; ?></td>
                    <td> <?php echo $row['Email']; ?></td>
                    <td class="<?php echo ($groupingColumnName === 'Pickup_Point') ? $groupClass : ''; ?>"> <?php echo $row['Pickup_Point']; ?></td>
                    <td> <?php echo $row['Address']; ?></td>
                    <td><a href="Edit1.php?nm=<?php echo $row['Name'] ?>&rn=<?php echo $row['Registration_No'] ?>&yr=<?php echo $row['Year'] ?>&dp=<?php echo $row['Department'] ?>&gn=<?php echo $row['Gender'] ?>&sc=<?php echo $row['Student_Contact_No'] ?>&pc=<?php echo $row['Parent_Contact_No'] ?>&em=<?php echo $row['Email'] ?>&pp=<?php echo $row['Pickup_Point'] ?>&ad=<?php echo $row['Address'] ?>"><button class="Button Edit">Edit</button></a></td>
                    <td><a href="delete.php?rn=<?php echo $row['Registration_No']; ?>"><button class="Button Delete">Delete</button></a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <?php
        }
        ?>
    </div>
    <footer class="footer">
        <div class="copyright">
            <h3>All rights reserved. ©SGGSIE&T</h3>
        </div>
    </footer>
</div>
</body>
<script>
    var preloader = document.getElementById('loading');
    function myFunction() {
        preloader.style.display = 'none';
    }
</script>
<script src="main.js"></script>
</html>
