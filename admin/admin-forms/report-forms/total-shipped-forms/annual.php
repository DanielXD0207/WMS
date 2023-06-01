<?php 
    $r = getenv('DOCUMENT_ROOT');
    $path = $r . '/wms/admin/php/connection.php';
    include($path);
    
    $select = mysqli_query($conn, "SELECT * FROM vw_order_lists WHERE Status <> 'Returned' AND YEAR(Delivered_Date) = YEAR(CURRENT_DATE - INTERVAL 1 YEAR);");
    $orderLists = mysqli_fetch_all($select, MYSQLI_ASSOC);
?>
<table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Order ID</th>
            <th>Customer ID</th>
            <th>Destination</th>
            <th>Transaction Date</th>
            <th>Total Amount</th>
            <th>Action</th>
        </tr>
        <?php $num=1; foreach($orderLists as $list): ?>
        <tr>
            <td><?php echo $num; ?></td>
            <td><?php echo $list['Order_ID'];?></td>
            <td><?php echo $list['Customer_ID'];?></td>
            <td><?php echo $list['Destination'];?></td>
            <td><?php echo date("F j Y", strtotime($list['Transaction_Date']));?></td>
            <td><?php echo '₱'.number_format($list['Total_Amount'],2);?></td>
            <td>
                <button class="btn btn-view" id="btn" onclick="getAnnualOrderData('<?php echo $list['Order_ID']; ?>');">
                <i class="bi bi-view-list"></i> View</button>  
                 
        </tr>
        <?php $num += 1; endforeach;?>
    </table>


<button class="btn btn-secondary viewbtn" onclick="shippedBack();"><i class="bi bi-arrow-return-left"></i>Back</button>
 