<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "sggs_bus";

$conn = new mysqli($servername, $username, $password, $database);

$Name = $_GET['nm'];

$query = "DELETE FROM `staffdata` WHERE `Name` = '$Name'";

$data = mysqli_query($conn, $query);

if ($data) {
    echo '<script>alert("Record Deleted Successfully");</script>';
    echo '<script>setTimeout(function() { window.location = "ViewStaff.php"; }, 1000);</script>';
    exit;
} 
else {
    echo '<script>alert("Failed to Delete the Record");</script>';
    echo '<script>setTimeout(function() { window.location = "ViewStaff.php"; }, 1000);</script>';
    exit;
}

?>