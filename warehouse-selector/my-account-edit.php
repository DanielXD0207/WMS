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
    if(!isset($_SESSION['WS_ID'])) : 
        header("Location:../Index.php");
    endif;
    
    $ID = $_SESSION['WS_ID'];
    $username = $_SESSION['username'];
    
    $result1 = mysqli_query($conn, "SELECT * FROM employee_information WHERE Employee_ID = '$ID'");
    $result2 = mysqli_query($conn, "SELECT * FROM users WHERE Employee_ID = '$ID'");
    $row1 = mysqli_fetch_assoc($result1);
    $row2 = mysqli_fetch_assoc($result2);


    include('php/EditmyAccount.php');
?>

<!--Start HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account - Edit</title>
    <?php include('includes/top.php');?>
    </head>
<body>

    <!--Side Nav-->
    <div class="sidenav">
        <?php include('includes/sidenav.php');?>
    </div>
    <!--Content-->
    <div class="content">
            <div class="Top">
                <h1>My Account</h1>
                <p>Welcome, <?php echo $username; ?></p>
            </div> 
            <!--Content Here-->
            <div class="contentbox">
                <form method="POST">
                    <?php include('ws-forms/my-account-EditForm.php');?>
                </form>   
            </div>
    </div> 
    
<script>
    $(document).ready(function(){
    $('#myAccount').addClass(' active');
    });  

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