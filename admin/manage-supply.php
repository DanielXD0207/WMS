<?php
    session_start();
    include('php/connection.php');

    //Check if user loggedin
    if(!isset($_SESSION['Admin_ID'])) : 
        header("Location:../Index.php");
    endif;

    $result1 = mysqli_query($conn, "SELECT * FROM vw_inventory_product_lists");
    $inventoryproduct = mysqli_fetch_all($result1, MYSQLI_ASSOC);

    $result2 = mysqli_query($conn, "SELECT * FROM request_product");
    $requestprod = mysqli_fetch_all($result2, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage - Supply</title>
    <?php include('includes/top.php');?>
</head>
<body>
    <div class="sidenav">
        <?php include('includes/sidenav.php');?>
    </div>
    <!--Content-->
    <div class="content">
            <!--Top-->
            <div class="Top">
                <h1>Manage Supply</h1>
            </div>   
            <!--Content-->        
            <div class="contentbox">
                <?php include('admin-forms/manage-supply-form.php');?>
            </div>
    </div>


<script>
   <?php include('javascript/managesupply.js');?>
</script>
<?php include('includes/bottom.php'); ?>