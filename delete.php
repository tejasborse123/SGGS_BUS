<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "sggs_bus";

$conn = new mysqli($servername, $username, $password, $database);

$Registration_No = $_GET['rn'];

$query = "DELETE FROM `userdata` WHERE `Registration_No` = '$Registration_No'"; // Corrected the use of single quotes

$data = mysqli_query($conn, $query);

if ($data) {
    echo '<script>alert("Record Deleted Successfully");</script>';
    echo '<script>setTimeout(function() { window.location = "UpdateDelete.php"; }, 1000);</script>';
    exit;
} 
else {
    echo '<script>alert("Failed to Delete the Record");</script>';
    echo '<script>setTimeout(function() { window.location = "UpdateDelete.php"; }, 1000);</script>';
    exit;
}

?>