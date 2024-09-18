<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "sggs_bus";

$conn = new mysqli($servername, $username, $password, $database);

$Stop_No = $_GET['rsn'];
$query = "DELETE FROM `rnroute` WHERE `Stop_No` = '$Stop_No'"; 

$data = mysqli_query($conn, $query);

if ($data) {
    echo '<script>alert("Record Deleted Successfully");</script>';
    echo '<script>setTimeout(function() { window.location = "Route.php"; }, 1000);</script>';
    exit;
} 
else {
    echo '<script>alert("Failed to Delete the Record");</script>';
    echo '<script>setTimeout(function() { window.location = "Route.php"; }, 1000);</script>';
    exit;
}

?>

