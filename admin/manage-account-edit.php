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
    if(!isset($_SESSION['Admin_ID'])) : 
        header("Location:../Index.php");
    endif;

    $ID = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM employee_information WHERE Employee_ID = '$ID'");
    $result2 = mysqli_query($conn, "SELECT * FROM users WHERE Employee_ID = '$ID' ");
    $row1 = mysqli_fetch_assoc($result);
    $row2 = mysqli_fetch_assoc($result2);

?>

<!--Start HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Account - Edit</title>
    <?php include('includes/top.php');?>
    </head>
<body>

    <!--Side Navigation-->
    <div class="sidenav">
        <?php include('includes/sidenav.php');?>
    </div>
    <!--Content-->
    <div class="content">
            <!--Top-->
            <div class="Top">
                <h1>Manage Account</h1>
            </div> 
            <!--Content Here-->          
            <div class="contentbox">
                <form method="POST" action="php/editAccount.php">
                    <?php include('admin-forms/manage-account-EditForm.php'); ?>
                </form>  
            </div>
    </div>
<script>
    <?php include('javascript/manageaccount.js');?>
</script> 

<!--End HTML-->
<?php include('includes/bottom.php');?>