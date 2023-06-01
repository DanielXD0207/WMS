<?php 
date_default_timezone_set('Asia/Manila');
include('connection.php');
session_start();

/*Request Supply*/
if(isset($_POST['reqprod']))
{
    $prodid = $_POST['prodid'];
    $prodname = $_POST['prodname'];
    $desc = $_POST['desc'];
    $qty = $_POST['qty'];
    $oqty = $_POST['oqty'];
    $status = 'Request Sent';
    $dateNow = date('Y/m/d');
    $sql = "INSERT INTO request_product (Product_ID, Product_Name, Description, Quantity, Ordered_Quantity, Status, Date_Requested)
            VALUES ('$prodid', '$prodname', '$desc', $qty, $oqty, '$status', '$dateNow')";

    $sql2 = "UPDATE inventory_product_lists SET Quantity = null WHERE Product_ID = '$prodid'";
    if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql2))
    {
        header('Location:../manage-supply.php');
    }
    else
    {
        echo '<script>alert("Failed"); window.location.href="../manage-supply.php";</script>';
    }
}

/*Update*/
if(isset($_GET['productid']))
{
    $prodid = $_GET['productid'];

    $sql = mysqli_query($conn, "SELECT * FROM request_product WHERE Product_ID = '$prodid'");

    $product = mysqli_fetch_assoc($sql);

    $qty = $product['Quantity'];
    $oqty = $product['Ordered_Quantity'];
    $total = $qty + $oqty;
    
    $delete = "DELETE FROM request_product WHERE Product_ID = '$prodid'";
    $update = "UPDATE inventory_product_lists SET Quantity = $total WHERE Product_ID = '$prodid'";
    
    if(mysqli_query($conn, $update) && mysqli_query($conn, $delete))
    {
        header('Location:../manage-supply.php');
    }
    else
    {
        echo '<script>alert("Failed"); window.location.href="../manage-supply.php";</script>';
    }
}




?>