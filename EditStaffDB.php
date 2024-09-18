<?php

$Name = $_POST['Name'];
$Gender = $_POST['Gender'];
$Staff_Contact_No = $_POST['Staff_Contact_No'];
$Alternate_Contact_No = $_POST['Alternate_Contact_No'];
$TNT = $_POST['TNT'];
$Bus_Route = $_POST['Bus_Route'];
$Pickup_Point = $_POST['Pickup_Point'];
$Address = $_POST['Address'];

$conn = mysqli_connect("localhost", "root", "", "sggs_bus") or die("Connection Failed");

if (!$conn) {
    die("Sorry Failed to connect : " . mysqli_connect_error());
}

$query = "UPDATE `staffdata` SET `Name`='$Name', `Gender`='$Gender', `Staff_Contact_No`='$Staff_Contact_No', `Alternate_Contact_No`='$Alternate_Contact_No', `TNT`='$TNT', `Bus_Route`='$Bus_Route' ,`Pickup_Point`='$Pickup_Point', `Address`='$Address' WHERE `Name` = '$Name'";

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

if ($result) {
    echo '<script>alert("Record Updated Successfully");</script>';
    echo '<script>setTimeout(function() { window.location = "ViewStaff.php"; }, 1000);</script>';
    exit;
} else {
    echo '<script>alert("Record Not Updated");</script>';
    echo '<script>setTimeout(function() { window.location = "ViewStaff.php"; }, 1000);</script>';
    exit;
}

?>
