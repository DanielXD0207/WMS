<?php
    session_start();
    include('php/connection.php');

    //Check if user loggedin
    if(!isset($_SESSION['SC_ID'])) : 
        header("Location:../Index.php");
    endif;

    $result1 = mysqli_query($conn, "SELECT * FROM vw_inventory_product_lists");
    $inventoryproduct = mysqli_fetch_all($result1, MYSQLI_ASSOC);

    $result2 = mysqli_query($conn, "SELECT * FROM inventory_archived_product");
    $archivedProducts = mysqli_fetch_all($result2, MYSQLI_ASSOC);
?>
<!--Start HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Inventory</title>
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
                <h1>Manage Inventory</h1>
            </div>   
            <!--Content-->        
            <div class="contentbox">
                <?php include('sc-form/manage-inventory-form.php');?>
            </div>
    </div>
<script>
  <?php include('javascript/manageInventory.js');?>
</script>


<?php include('includes/bottom.php'); ?>