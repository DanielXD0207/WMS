<?php
session_start();
include('connection.php');
date_default_timezone_set('Asia/Manila');
if(isset($_GET['id'])){
    $empid = $_SESSION['Admin_ID'];
    $empUser = $_SESSION['username'];
    $productid = $_GET['id'];
    $datenow = date('Y/m/d H:i:s');
    $random = rand();

    $getProducts = mysqli_query($conn, "SELECT * FROM inventory_product_lists WHERE Product_ID = '$productid'");
    $list = mysqli_fetch_assoc($getProducts);

    $prodname = $list['Product_Name'];
    $desc = $list['Description'];
    $barcode = $list['Barcode'];
    $category = $list['Category'];
    $bin = $list['Bin'];
    $loca = $list['Location'];
    $unit = $list['Packaging_Size'];
    $qty = $list['Quantity'];
    $rqty = $list['Reorder_Quantity'];
    $cost = $list['Cost'];
    
    $insert = "INSERT INTO recorded_product_lists (Product_ID, Product_Name, Description, Barcode, Category, Bin, Location, Packaging_Size, Quantity, Reorder_Quantity, Cost, Record_ID) 
                VALUES ('$productid', '$prodname', '$desc', '$barcode', '$category', '$bin', '$loca', '$unit', $qty, $rqty, $cost, '$random')";
    
    $insert2 = "INSERT INTO record_inventory_level (Record_ID, Employee_ID, User, Date_Recorded, Product_ID) VALUES ('$random','$empid', '$empUser', '$datenow', '$productid' )";

    if(mysqli_query($conn, $insert2) && mysqli_query($conn, $insert))
    {
        header('Location:../reports.php');
        //echo '<script>alert("SUCCESS"); window.location.href="../reports.php";</script>';
    }
    else{
        //header('Location:../reports.php');
        echo '<script>alert("Failed"); window.location.href="../reports.php";</script>';
    }
}

?>