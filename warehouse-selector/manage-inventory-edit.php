<?php 
    session_start();
    include('php/connection.php');

    //Check if user loggedin
    if(!isset($_SESSION['WS_ID'])) : 
        header("Location:../Index.php");
    endif;

    $productid = $_GET['productid'];

    $result = mysqli_query($conn, "SELECT * FROM inventory_product_lists WHERE Product_ID = '$productid'");
    $inventory = mysqli_fetch_assoc($result);
?>

<!--Start HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Inventory - Edit</title>
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
            <!--Content Here-->          
            <div class="contentbox">
                <?php include('ws-forms/manage-inventory-editform.php');?>           
            </div>
    </div> 
<script>
    $(document).ready(function(){
    $('#manageInventory').addClass(' active');
    });
</script>
<?php include('includes/bottom.php'); ?>