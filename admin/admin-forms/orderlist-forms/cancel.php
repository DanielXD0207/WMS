<?php 
    $r = getenv('DOCUMENT_ROOT');
    $path = $r . '/wms/admin/php/connection.php';
    include($path);
    
    $result4 = mysqli_query($conn, "SELECT * FROM vw_order_lists WHERE Status = 'Cancelled'");
    $cancelledList = mysqli_fetch_all($result4, MYSQLI_ASSOC);
?>
<table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Order ID</th>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Destination</th>
            <th>Transaction Date</th>
            <th>Load Date</th>
            <th>Delivery Date</th>
            <th>Total Amount</th>
            <th>Action</th>
        </tr>
        <?php $num=1; foreach($cancelledList as $list):?>
        <tr>
            <td><?php echo $num; ?></td>
            <td><?php echo $list['Order_ID'];?></td>
            <td><?php echo $list['Customer_ID'];?></td>
            <td><?php echo $list['Customer_Name'];?></td>
            <td><?php echo $list['Destination'];?></td>
            <td><?php echo date("F j Y", strtotime($list['Transaction_Date']));?></td>
            <?php if($list['Load_Date'] != null){?>
            <td><?php echo date("F j Y", strtotime($list['Load_Date']));?></td>
            <?php }else{ echo '<td></td>'; }?>
            <?php if($list['Delivery_Date'] != null){?>
            <td><?php echo date("F j Y", strtotime($list['Delivery_Date']));?></td>
            <?php }else{ echo '<td></td>'; }?>
            <td><?php echo '₱'.number_format($list['Total_Amount'],2);?></td>
            <td>
                <button onclick="getCancelledData('<?php echo $list['Order_ID']; ?>')" class="btn btn-view">
                    <i class="bi bi-view-list"></i>View
                </button>
            </td>
        </tr>
        <?php $num+=1; endforeach;?>
</table>