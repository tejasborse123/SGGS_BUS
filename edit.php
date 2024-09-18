<?php

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

$conn = mysqli_connect("localhost", "root", "", "sggs_bus") or die("Connection Failed");

if (!$conn) {
    die("Sorry Failed to connect : " . mysqli_connect_error());
}

$query = "UPDATE `userdata` SET `Name`='$Name', `Year`='$Year', `Department`='$Department', `Gender`='$Gender', `Student_Contact_No`='$Student_Contact_No', `Parent_Contact_No`='$Parent_Contact_No', `Email`='$Email', `Pickup_Point`='$Pickup_Point', `Address`='$Address' WHERE `Registration_No` = '$Registration_No'";

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

if ($result) {
    echo '<script>alert("Record Updated Successfully");</script>';
    echo '<script>setTimeout(function() { window.location = "View.php"; }, 1000);</script>';
    exit;
} else {
    echo '<script>alert("Record Not Updated");</script>';
    echo '<script>setTimeout(function() { window.location = "View.php"; }, 1000);</script>';
    exit;
}

?>
