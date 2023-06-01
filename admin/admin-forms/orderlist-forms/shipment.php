<?php 
    $r = getenv('DOCUMENT_ROOT');
    $connectionpath = $r . '/wms/admin/php/connection.php';
    $messagepath = $r . '/wms/admin/messagebox/deliver-message.php';
    include($connectionpath);
    
    $result2 = mysqli_query($conn, "SELECT * FROM vw_order_lists WHERE Status = 'In Loading'");
    $shippedList = mysqli_fetch_all($result2, MYSQLI_ASSOC);
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
        <?php $num = 1; foreach($shippedList as $list):?>
        <tr>
            <td><?php echo $num; ?></td>
            <td><?php echo $list['Order_ID'];?></td>
            <td><?php echo $list['Customer_ID'];?></td>
            <td><?php echo $list['Customer_Name'];?></td>
            <td><?php echo $list['Destination'];?></td>
            <td><?php echo date("F j Y", strtotime($list['Transaction_Date']));?></td>
            <td><?php echo date("F j Y", strtotime($list['Load_Date']));?></td>
            <td><?php echo date("F j Y", strtotime($list['Delivery_Date']));?></td>
            <td><?php echo '₱'.number_format($list['Total_Amount'],2);?></td>
            <td>
                <button class="btn btn-view" id="btn" onclick="getShipmentData('<?php echo $list['Order_ID']; ?>');" style="display:flex;">
                    <i class="bi bi-view-list"></i> View
                </button> 

                <!--<a href="#deliver_<?php echo $list['Order_ID']; ?>" class="btn btn-deliver" data-toggle="modal">
                    <i class="bi bi-pencil"></i>Deliver
                </a>-->
            </td>
        </tr>
        <?php include($messagepath);?>
        <?php $num += 1; endforeach;?>
    </table>