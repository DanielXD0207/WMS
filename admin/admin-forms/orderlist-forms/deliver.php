<?php 
    
    $r = getenv('DOCUMENT_ROOT');
    $path = $r . '/wms/admin/php/connection.php';
    include($path);
    
    $result3 = mysqli_query($conn, "SELECT * FROM vw_order_lists WHERE Status = 'Delivered'");
    $deliveredList = mysqli_fetch_all($result3, MYSQLI_ASSOC);
    
   
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
        <?php $num = 1; foreach($deliveredList as $list):?>
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
                <div>
                    <button class="btn btn-view" name="btn-deliver" onclick="getDeliverData('<?php echo $list['Order_ID']; ?>');">
                    <i class="bi bi-view-list"></i> View</button>         
                </div>       
            </td>
        </tr>
        <?php $num+=1; endforeach;?>
</table>   