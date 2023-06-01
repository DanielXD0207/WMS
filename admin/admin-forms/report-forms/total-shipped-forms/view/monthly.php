<?php
    session_start();
    $r = getenv('DOCUMENT_ROOT');
    $path = $r . '/wms/admin/php/connection.php';
    include($path);
    $orderID = $_GET['orderid'];

   /* $result = mysqli_query($conn, "SELECT * FROM order_lists INNER JOIN order_lists_products 
    ON order_lists.Order_ID = order_lists_products.Order_ID WHERE order_lists.Order_ID = '$orderID'");*/

    $result = mysqli_query($conn, "SELECT * FROM order_lists_products WHERE Order_ID = '$orderID'");
 
?>
<table class="table">
        <tr>
            <th>No.</th>
            <th>Product Name</th>
            <th>Barcode</th>
            <th>Packaging Size</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        <?php $num = 1; while($list = mysqli_fetch_array($result)){ ?>
         <tr>
             <td><?php echo $num; ?></td>
             <td><?php echo $list['Product_Name']; ?></td>
             <td><?php echo $list['Barcode']; ?></td>
             <td><?php echo $list['Packaging_Size']; ?></td>
             <td><?php echo $list['Quantity']; ?></td>
             <td><?php echo $list['Price']; ?></td>
         </tr>   
        <?php $num +=1; }?>
</table>
<!--
<a href="manage-order-list.php" class="btn btn-secondary viewbtn">
    <i class="bi bi-arrow-return-left"></i>Back
</a>-->
<button class="btn btn-secondary viewbtn" onclick="monthlyBack();"><i class="bi bi-arrow-return-left"></i>Back</button>
 