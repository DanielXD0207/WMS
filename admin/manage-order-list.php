<?php
    session_start();
    //Check if user loggedin
    if(!isset($_SESSION['Admin_ID'])) : 
        header("Location:../Index.php");
    endif;
 
?>
<!--START HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Order List</title>
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
                <h1>Manage Order List</h1>
            </div>   
            <!--Content-->        
            <div class="contentbox">
                <div class="manageorderlist">
                    <?php include('admin-forms/orderlist-forms/manage-order-list-form.php');?>    
                </div>
            </div>
    </div>
<script>
    <?php include('javascript/orderlist.js');?>
    <?php include('javascript/orderlistAjax.js');?>
</script>
<!--END HTML-->
<?php include('includes/bottom.php');?>