<?php 

$r = getenv('DOCUMENT_ROOT');
$path = $r . '/wms/admin/php/connection.php';
include($path);

    $result2 = mysqli_query($conn, "SELECT * FROM record_inventory_level");
    $recordLevel = mysqli_fetch_all($result2, MYSQLI_ASSOC);
?>

<table class="table table-sm table-bordered">
        <tr>
            <th>No.</th>
            <th>Date Recorded</th>
            <th>Day & Time</th>
            <th>Employee Assigned</th>
            <th>Action</th>
        </tr>
        <?php $num = 1; foreach($recordLevel as $list):?>
        <tr>
            <td><?php echo $num;?></td>
            <td><?php echo date("M-d-Y", strtotime($list["Date_Recorded"]));?></td>
            <td><?php echo date("D h:m:s A", strtotime($list["Date_Recorded"]));?></td>
            <td><?php echo $list['Employee_ID'];?></td>
            <td>
                <button class="btn btn-view" id="btn" onclick="getrecordedProductData('<?php echo $list['Record_ID']; ?>')">
                <i class="bi bi-view-list"></i> View</button>  
            </td>
        </tr>
        <?php $num+=1; endforeach;?>
</table>