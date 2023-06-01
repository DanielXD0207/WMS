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

    $ID = $_SESSION['Admin_ID'];
    $username = $_SESSION['username'];
    include('php/display-accounts.php');
   //include('../php/addAccount.php');

?>
<!--Start HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Account</title>
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
                <h1>Manage Account</h1>
            </div> 
            <!--Content Here-->          
            <div class="contentbox">
                <div class="manage-account">
                    <?php include('admin-forms/manage-account-Form.php'); ?>
                </div>            
            </div>
    </div> 

<script>
    <?php include('javascript/manageaccount.js');?>
    function showPass(){
        var pass = document.getElementById('pass');

        if(pass.type === 'password')
        {
            pass.type = 'text';
        }else{
            pass.type = 'password';
        }
    }
</script>

<!--End HTML-->
<?php include('includes/bottom.php');?>


