<div class="row manageOrderHead">
    <div class="col-3" id="orderList"><a href="#" id="orders">Ordered Item</a></div>
</div>

<div class="orderlist">
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Product Name</th>
            <th>Barcode</th>
            <th>Brand</th>
            <th>Unit</th>
            <th>Quantity</th>
            <th>Type</th>
            <th>Price</th>
        </tr>
        <?php $num = 1; while($list = mysqli_fetch_array($result)){ ?>
         <tr>
             <td><?php echo $num; ?></td>
             <td><?php echo $list['Product_Name']; ?></td>
             <td><?php echo $list['Barcode']; ?></td>
             <td><?php echo $list['Brand']; ?></td>
             <td><?php echo $list['Unit']; ?></td>
             <td><?php echo $list['Quantity']; ?></td>
             <td><?php echo $list['Type']; ?></td>
             <td><?php echo $list['Price']; ?></td>
         </tr>   
        <?php $num +=1; }?>
    </table>

    <a href="manage-order-list.php" class="btn btn-secondary viewbtn">
                    <i class="bi bi-arrow-return-left"></i>Back
    </a>
</div>
