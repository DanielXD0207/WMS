<div class="row manageOrderHead">
    <div class="col-3" id="orderList"><a href="#" id="orders">Received Order</a></div>
</div>

<div class="orderlist">
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Order ID</th>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Destination</th>
            <th>Transaction Date</th>
            <th>Total Amount</th>
        </tr>
        <?php $num = 1; foreach($orderlist as $list): ?>
        <tr>
            <td><?php echo $num;?></td>
            <td><?php echo $list['Order_ID'];?></td>
            <td><?php echo $list['Customer_ID'];?></td>
            <td><?php echo $list['Customer_Name'];?></td>
            <td><?php echo $list['Destination'];?></td>
            <td><?php echo date("F j Y", strtotime($list['Transaction_Date']));?></td>
            <td><?php echo $list['Total_Amount'];?></td>
        </tr>
        <?php $num += 1; endforeach;?>
    </table>
</div>

<div class="row manageOrderHead">
    <div class="col-3" id="ordered"><a href="#" id="orders">Ordered Item</a></div>
</div>

<div class="orderlist">
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Product Name</th>
            <th>Barcode</th>
            <th>Packaging Size</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        <?php $num = 1; foreach($productList as $list): ?>
        <tr>
            <td><?php echo $num;?></td>
            <td><?php echo $list['Product_Name'];?></td>
            <td><?php echo $list['Barcode'];?></td>
            <td><?php echo $list['Packaging_Size'];?></td>
            <td><?php echo $list['Quantity'];?></td>
            <td><?php echo $list['Price'];?></td>
        </tr>
        <?php $num += 1; endforeach;?>
    </table>
</div>
<div>
    <a href="#confirm_<?php echo $orderID; ?>" class="btn btn-primary viewbtn" data-toggle="modal">Load Order</a>
    <a href="manage-order-list.php" class="btn btn-danger viewbtn">Cancel</a>
</div>
<?php include('messagebox/confirmorder-message.php');?>

