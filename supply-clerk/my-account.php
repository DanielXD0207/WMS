<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wms";


    $conn = new mysqli($host, $username, $password, $dbname);
    
    if($conn->connect_error)
    {
        die("Connection Failed " .$conn->connect_error);
    }
?>
<?php 
    session_start();
    //Check if user loggedin
    if(!isset($_SESSION['SC_ID'])) : 
        header("Location:../Index.php");
    endif;

    $ID = $_SESSION['SC_ID'];
    $result = mysqli_query($conn, "SELECT * FROM employee_information WHERE Employee_ID = '$ID'");
    $result2 = mysqli_query($conn, "SELECT * FROM users WHERE Employee_ID = '$ID'");
    $rows = mysqli_fetch_assoc($result);
    $row = mysqli_fetch_assoc($result2);
    $username = $row['Username'];
?>
<!--Start HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <?php include('includes/top.php');?>
    </head>
<body>

    <!--Side Nav-->
    <div class="sidenav">
        <?php include('includes/sidenav.php');?>
    </div>
    <!--Content-->
    <div class="content">
            <!--Top-->
            <div class="Top">
                <h1>My Account</h1>
                <p>Welcome, <?php echo $username; ?></p>
            </div>   
            <!--Content-->        
            <div class="contentbox">
                <?php include('sc-form/my-account-Form.php'); ?>
            </div>
    </div>

<script>
    $(document).ready(function(){
    $('#myAccount').addClass(' active');
    });
</script>

<!--End HTML-->
<?php include('includes/bottom.php');?>