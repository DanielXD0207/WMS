<?php
    session_start();
    include('php/connection.php');

    //Check if user loggedin
    if(!isset($_SESSION['Admin_ID'])) : 
        header("Location:../Index.php");
    endif;

    $orderID = $_GET['orderid'];

   /* $result = mysqli_query($conn, "SELECT * FROM order_lists INNER JOIN order_lists_products 
    ON order_lists.Order_ID = order_lists_products.Order_ID WHERE order_lists.Order_ID = '$orderID'");*/

    $result = mysqli_query($conn, "SELECT * FROM order_lists_products WHERE Order_ID = '$orderID'");
 
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
                    <?php include('admin-forms/orderlist-forms/manage-order-list-viewform.php');?>
                </div>
            </div>
    </div>
<script>
    <?php include('../javascript/orderlist.js');?>
</script>
<!--END HTML-->
<?php include('includes/bottom.php');?>