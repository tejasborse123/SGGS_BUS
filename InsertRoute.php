<?php

$conn = mysqli_connect("localhost", "root", "", "sggs_bus") or die("Connection Failed");

if(isset($_POST['ANSubmit'])) 
{
    $AStopNo = mysqli_real_escape_string($conn, $_POST['AStopNo']);
    $AStopName = mysqli_real_escape_string($conn, $_POST['AStopName']);

    $checkUser = "SELECT * FROM `anroute` WHERE `Stop_No` = ?";
    $stmt = mysqli_prepare($conn, $checkUser);
    mysqli_stmt_bind_param($stmt, "s", $AStopNo);
    mysqli_stmt_execute($stmt);
    $checkUserOutput = mysqli_stmt_get_result($stmt);
    $countUser = mysqli_num_rows($checkUserOutput);

    if($countUser > 0) 
    {
        echo '<script>alert("Record not inserted because Stop Number ' . $AStopNo . ' Already Exists");</script>';
        echo '<script>setTimeout(function() { window.location = "UpdateRoute.php"; }, 1000);</script>';
        exit;
    } 

    else 
    {
        $query = "INSERT INTO `anroute` (`Stop_No`, `Stop_Name`) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ss", $AStopNo, $AStopName);
        $result = mysqli_stmt_execute($stmt);

        if($result) 
        {
            echo '<script>alert("Record Inserted Successfully");</script>';
            echo '<script>setTimeout(function() { window.location = "UpdateRoute.php"; }, 1000);</script>';
            exit;
        } 
        else 
        {
            echo '<script>alert("Record Not Inserted");</script>';
            echo '<script>setTimeout(function() { window.location = "UpdateRoute.php"; }, 1000);</script>';
            exit;
        }
    }
} 

elseif(isset($_POST['ANUpdate'])) 
{
    $AStopNo = mysqli_real_escape_string($conn, $_POST['AStopNo']);
    $AStopName = mysqli_real_escape_string($conn, $_POST['AStopName']);

    $checkUser = "SELECT * FROM `anroute` WHERE `Stop_No` = ?";
    $stmt = mysqli_prepare($conn, $checkUser);
    mysqli_stmt_bind_param($stmt, "s", $AStopNo);
    mysqli_stmt_execute($stmt);
    $checkUserOutput = mysqli_stmt_get_result($stmt);
    $countUser = mysqli_num_rows($checkUserOutput);

    if($countUser > 0) 
    {
        $query = "UPDATE `anroute` SET `Stop_No`=?, `Stop_Name`=? WHERE `Stop_No`=?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "sss", $AStopNo, $AStopName, $AStopNo);
        $result = mysqli_stmt_execute($stmt);

        if($result)
        {
            echo '<script>alert("Record Updated Successfully");</script>';
            echo '<script>setTimeout(function() { window.location = "UpdateRoute.php"; }, 1000);</script>';
            exit;
        } 
        else 
        {
            echo '<script>alert("Record Not Updated");</script>';
            echo '<script>setTimeout(function() { window.location = "UpdateRoute.php"; }, 1000);</script>';
            exit;
        }
    } 
    else 
    {
        echo '<script>alert("Failed to Update as, Record for Stop Number ' . $AStopNo . ' does not Exist.");</script>';
        echo '<script>setTimeout(function() { window.location = "UpdateRoute.php"; }, 1000);</script>';
        exit;
    }

} 

elseif(isset($_POST['RNSubmit']))
{
    $RStopNo = mysqli_real_escape_string($conn, $_POST['RStopNo']);
    $RStopName = mysqli_real_escape_string($conn, $_POST['RStopName']);

    $checkUser = "SELECT * FROM `rnroute` WHERE `Stop_No` = ?";
    $stmt = mysqli_prepare($conn, $checkUser);
    mysqli_stmt_bind_param($stmt, "s", $RStopNo);
    mysqli_stmt_execute($stmt);
    $checkUserOutput = mysqli_stmt_get_result($stmt);
    $countUser = mysqli_num_rows($checkUserOutput);

    if($countUser > 0) 
    {
        echo '<script>alert("Record not inserted because Stop Number ' . $RStopNo . ' Already Exists");</script>';
        echo '<script>setTimeout(function() { window.location = "UpdateRoute.php"; }, 1000);</script>';
        exit;
    } 
    else 
    {
        $query = "INSERT INTO `rnroute` (`Stop_No`, `Stop_Name`) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ss", $RStopNo, $RStopName);
        $result = mysqli_stmt_execute($stmt);

        if($result)
        {
            echo '<script>alert("Record Inserted Successfully");</script>';
            echo '<script>setTimeout(function() { window.location = "UpdateRoute.php"; }, 1000);</script>';
            exit;
        } 
        else 
        {
            echo '<script>alert("Record Not Inserted");</script>';
            echo '<script>setTimeout(function() { window.location = "UpdateRoute.php"; }, 1000);</script>';
            exit;
        }
    }
} 

elseif(isset($_POST['RNUpdate'])) 
{
    $RStopNo = mysqli_real_escape_string($conn, $_POST['RStopNo']);
    $RStopName = mysqli_real_escape_string($conn, $_POST['RStopName']);

    $checkUser = "SELECT * FROM `rnroute` WHERE `Stop_No` = ?";
    $stmt = mysqli_prepare($conn, $checkUser);
    mysqli_stmt_bind_param($stmt, "s", $RStopNo);
    mysqli_stmt_execute($stmt);
    $checkUserOutput = mysqli_stmt_get_result($stmt);
    $countUser = mysqli_num_rows($checkUserOutput);

    if($countUser > 0) 
    {
        $query = "UPDATE `rnroute` SET `Stop_No`=?, `Stop_Name`=? WHERE `Stop_No`=?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "sss", $RStopNo, $RStopName, $RStopNo);
        $result = mysqli_stmt_execute($stmt);

        if($result) 
        {
            echo '<script>alert("Record Updated Successfully");</script>';
            echo '<script>setTimeout(function() { window.location = "UpdateRoute.php"; }, 1000);</script>';
            exit;
        } 
        else 
        {
            echo '<script>alert("Record Not Updated");</script>';
            echo '<script>setTimeout(function() { window.location = "UpdateRoute.php"; }, 1000);</script>';
            exit;
        }
    }
    else 
    {
        echo '<script>alert("Failed to Update as, Record for Stop Number ' . $RStopNo . ' does not Exist.");</script>';
        echo '<script>setTimeout(function() { window.location = "UpdateRoute.php"; }, 1000);</script>';
        exit;
    }
}

?>
