
<?php 
date_default_timezone_set('Asia/Manila');
include('connection.php');
    if(isset($_GET['productid']))
    {
        $productid = $_GET['productid'];

        $select = mysqli_query($conn, "SELECT * FROM inventory_product_lists WHERE Product_ID = '$productid'");
        $rows = mysqli_fetch_assoc($select); $dateNow = date("Y/m/d");

        $prodName = $rows['Product_Name'];
        $desc = $rows['Description'];
        $barcode = $rows['Barcode'];
        $category = $rows['Category'];
        $unit = $rows['Packaging_Size'];
        $qty = $rows['Quantity'];
        $rqty =$rows['Reorder_Quantity'];
        $cost= $rows['Cost'];

        $delete = "DELETE FROM inventory_product_lists WHERE Product_ID = '$productid'";
        $archive = "INSERT INTO inventory_archived_product (Product_ID, Product_Name, Description, Barcode, Category, Packaging_Size, 
                                    Quantity, Reorder_Quantity, Cost, Date_Archived)
                    VALUES ('$productid', '$prodName','$desc', '$barcode', '$category', '$unit', 
                                 $qty, $rqty, $cost, '$dateNow')";
                        
            if(mysqli_query($conn, $delete) && mysqli_query($conn, $archive))
            {
                header('Location:../manage-inventory.php');
            }
            else
            {
                header('Location:../manage-inventory.php');
            }
    }
?>