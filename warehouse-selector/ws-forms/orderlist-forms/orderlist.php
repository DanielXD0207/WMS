<?php 
    $r = getenv('DOCUMENT_ROOT');
    $path = $r . '/wms/warehouse-selector/php/connection.php';
    $messagepath = $r . '/wms/warehouse-selector/messagebox/manageorder-message.php';
    include($path);
    
    $result = mysqli_query($conn, "SELECT * FROM vw_order_lists WHERE Status = 'Received'");
    $orderLists = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Order ID</th>
            <th>Customer ID</th>
            <th>Customer Name</th>
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
            <td><?php echo $list['Customer_Name'];?></td>
            <td><?php echo $list['Destination'];?></td>
            <td><?php echo date("F j Y", strtotime($list['Transaction_Date']));?></td>
            <td><?php echo '₱'.number_format($list['Total_Amount'],2);?></td>
            <td>
                <button class="btn btn-view" id="btn" onclick="getOrderListData('<?php echo $list['Order_ID']; ?>');">
                <i class="bi bi-view-list"></i> View</button>  
                 
                <a href="manage-order-list-process.php?orderid=<?php echo $list['Order_ID'];?>" class="btn btn-process">
                    <i class="bi bi-pencil"></i>Load
                </a>
                <!--<a href="#cancel_<?php echo $list['Order_ID'];?>" class="btn btn-cancel" data-toggle="modal">
                    <i class="bi bi-trash"></i>Cancel
                </a>-->
            </td>
        </tr>
        <?php include($messagepath);?>
        <?php $num += 1; endforeach;?>
    </table>