<?php 
session_start();
include('connection.php');

if(isset($_POST['editProd']))
{
   $productID = $_POST['productid'];

   //$prodname = $_POST['prodname'];
   //$barcode = $_POST['barcode'];
   //$category = $_POST['category'];
   $bin = $_POST['bin'];
   $desc = $_POST['desc'];
   $location = $_POST['location'];
   $unit = $_POST['unit'];
   $qty = $_POST['qty'];
   $rqty = $_POST['rqty'];
   $cost = $_POST['cost'];
   $invalue = $_POST['invalue'];

   $edit = "UPDATE inventory_product_lists SET Description = '$desc',Bin='$bin',Location='$location',Packaging_Size='$unit',Reorder_Quantity='$rqty', Cost = '$cost' WHERE Product_ID = '$productID'";

    if(mysqli_query($conn, $edit))
    {
        header('Location:../manage-inventory.php');
    }
    else
    {
        echo '<script>alert("Edit Failed"); window.location.href = "../manage-inventory.php"</script>';
    }


}

?>