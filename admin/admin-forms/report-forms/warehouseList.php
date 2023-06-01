<?php
    $r = getenv('DOCUMENT_ROOT');
    $path = $r . '/wms/admin/php/connection.php';
    $messagepath = $r . '/wms/admin/messagebox/manageorder-message.php';
    include($path);

    $result1 = mysqli_query($conn, "SELECT * FROM vw_inventory_product_lists");
    $inventoryproduct = mysqli_fetch_all($result1, MYSQLI_ASSOC);
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
                <th>Action</th>
            </tr>
            <?php $num=1; foreach($inventoryproduct as $list):  
                if($list['Status'] != 'Requested'):
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
                <td><?php echo '₱'.number_format($list['Inventory_Value'], 2); ?></td>
                <?php if($list['Quantity'] <= $list['Reorder_Quantity']){?>
                <td><i class="bi bi-exclamation-triangle-fill reorder"></i></td>
                <?php }else{?>
                <td></td>
                <?php }?>
                <td>
                    <a href="#record_<?php echo $list['Product_ID']; ?>" class="btn btn-success" data-toggle="modal">
                        Record Inventory Level
                    </a>
                </td>
            </tr>
            <?php include('messagebox/report-message.php');?>

            <?php $num+=1; endif; endforeach;?>
        </table>