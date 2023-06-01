<?php 
    session_start();
    include('php/connection.php');

    //Check if user loggedin
    if(!isset($_SESSION['Admin_ID'])) : 
        header("Location:../Index.php");
    endif;
    $orderID = $_GET['orderid'];
    $query1 = mysqli_query($conn, "SELECT * FROM vw_order_lists WHERE Order_ID = '$orderID'");
    $orderlist = mysqli_fetch_all($query1, MYSQLI_ASSOC);

    $query2 = mysqli_query($conn, "SELECT * FROM order_lists_products WHERE Order_ID = '$orderID'");
    $productList = mysqli_fetch_all($query2, MYSQLI_ASSOC);

?>


<!--START HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Order List - Product Processing</title>
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
                    <?php include('admin-forms/orderlist-forms/manage-order-list-processform.php');?>
                </div>
            </div>
    </div>
<script>
    <?php include('javascript/orderlist.js');?>
    <?php include('javascript/orderlistAjax.js');?>
</script>
<!--END HTML-->
<?php include('includes/bottom.php');?>