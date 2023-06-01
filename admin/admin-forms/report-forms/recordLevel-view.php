
<?php
session_start();
$r = getenv('DOCUMENT_ROOT');
$path = $r . '/wms/admin/php/connection.php';
$messagepath = $r . '/wms/admin/messagebox/manageorder-message.php';
include($path);

$recordid = $_GET['recordid'];

$sql = mysqli_query($conn, "SELECT * FROM recorded_product_lists WHERE Record_ID = '$recordid'");


?>

<table class="table table-sm table-bordered">
            <tr>
                <th>No.</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Barcode</th>
                <th>Category</th>
                <th>Bin</th>
                <th>Location</th>
                <th>Packaging Size</th>
                <th>Quantity</th>
                <th>Reorder Quantity</th>
                <th>Cost</th>
                <th>Inventory Value</th>
                <th>Reorder</th>
            </tr>
            <?php $num=1; while($list = mysqli_fetch_array($sql)){ 
                ?>
            <tr>
                <td><?php echo $num;?></td>
                <td><?php echo $list['Product_ID'];?></td>
                <td><?php echo $list['Product_Name']; ?></td>
                <td><?php echo $list['Barcode']; ?></td>
                <td><?php echo $list['Category']; ?></td>
                <td><?php echo $list['Bin']; ?></td>
                <td><?php echo $list['Location']; ?></td>
                <td><?php echo $list['Packaging_Size']; ?></td>
                <td><?php echo $list['Quantity']; ?></td>
                <td><?php echo $list['Reorder_Quantity']; ?></td>
                <td><?php echo '₱'.number_format($list['Cost'],2); ?></td>
                <?php $total = $list['Cost'] * $list['Quantity'];?>
                <td><?php echo '₱'.number_format($total,2); ?></td>
                <?php if($list['Quantity'] <= $list['Reorder_Quantity']){?>
                <td><i class="bi bi-exclamation-triangle-fill reorder"></i></td>
                <?php }else{?>
                <td></td>
                <?php }?>
            </tr>

            <?php $num+=1; }?>
</table>
<button class="btn btn-secondary viewbtn" onclick="recordBack();"><i class="bi bi-arrow-return-left"></i>Back</button>
 