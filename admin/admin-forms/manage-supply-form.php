<div class="row managesupplyhead">
    <div class="col-6" id="inventoryList">Warehouse Inventory List</div>
    <div class="col-6" id="request">Requests</div>
</div>


<div class="manage-supply">

    <div class="ware-list">
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
                <th>Qty</th>
                <th>Reorder Qty</th>
                <th>Cost</th>
                <th>Inventory Value</th>
                <th>Reorder</th>
                <th>Action</th>
            </tr>
            <?php $num=1; foreach($inventoryproduct as $list):  
                    if($list['Status'] == 'Re-Order'):   
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
                <td><?php echo '₱'.number_format($list['Inventory_Value'],2); ?></td>
                <?php if($list['Quantity'] <= $list['Reorder_Quantity']){?>
                <td><i class="bi bi-exclamation-triangle-fill reorder"></i></td>
                <?php }else{?>
                <td></td>
                <?php }?>
                <td>
                    <a href="#resupply_<?php echo $list['Product_ID'];?>" class="btn btn-warning edit" data-toggle="modal" style="display:flex;">
                        <i class="bi bi-receipt-cutoff"></i> 
                        Request
                    </a>
                </td>
            </tr>
            <?php include('messagebox/requestsupply.php');?>

            <?php $num+=1; endif; endforeach;?>
        </table>
    </div>


    <div class="req-list">
        <table class="table table-bordered" style="text-align:center;">
            <tr>
                <th>No.</th>
                <th>Product_ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Ordered Quantity</th>
                <th>Action</th>
            </tr>
            <?php $num = 1; foreach($requestprod as $list): ?>
            <tr>
                <td><?php echo $num;?></td>
                <td><?php echo $list['Product_ID'];?></td>
                <td><?php echo $list['Product_Name'];?></td>
                <td><?php echo $list['Description'];?></td>
                <td><?php echo $list['Quantity'];?></td>
                <td><?php echo $list['Ordered_Quantity'];?></td>
                <td><a href="#update_<?php echo $list['Product_ID']; ?>" class="btn btn-primary" data-toggle="modal">Update Status</a></td>
            </tr>
            <?php include('messagebox/requestsupply.php');?>
            <?php $num+=1; endforeach;?>
        </table>
    </div>

</div>