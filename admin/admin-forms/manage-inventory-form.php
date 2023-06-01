<div class="row manageAccountHead">
    <div class="col-4" id="productList"><a href="#" id="listproduct">Product</a></div>
    <div class="col-4" id="addProduct"><a href="#" id="addpro">Add Product</a></div>
    <div class="col-4" id="archivedProduct"><a href="#" id="archived">Archived Product</a></div>
</div>


<!--Product List-->
<div class="productList">
    <table class="table table-sm table-bordered">
        <tr>
            <th>No.</th>
            <th>Product ID</th>
            <th>Product</th>
            <th>Barcode</th>
            <th>Category</th>
            <th>Bin</th>
            <th>Location</th>
            <th>Packaging Size</th>
            <th>Quantity</th>
            <th>Reorder Qty</th>
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
            <td><?php echo $list['Description'];?></td>
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
                <a href="manage-inventory-edit.php?productid=<?php echo $list['Product_ID'];?>" class="btn btn-success edit">
                    <i class="bi bi-pencil-square"></i> 
                    Edit
                </a>
                <br/>
                <a href="#archive_<?php echo $list['Product_ID'];?>" class="btn btn-danger" data-toggle="modal">
                    <i class="bi bi-archive"></i>
                    Archive
                </a>
            </td>
        </tr>
        <?php include('messagebox/productList-message.php');?>
        <?php $num+=1; endif; endforeach;?>
    </table>
    
</div>



<!--Add Product-->
<div class="addProduct">
    <form action="php/addProduct.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <table>
                    <tr>
                       <td>Product Image</td>
                       <td><input type="file" name="productimage" accept="image/png, image/gif, image/jpeg" id="productimage" class="form-control"></td>
                    </tr> 
                </table>
                <table>
                    <tr>
                        <td>Product ID<td>
                        <td><input type="text" name="prodid" class="form-control" required /></td>
                    </tr>
                    <tr>
                        <td>Product Name<td>
                        <td><input type="text" name="prodname" class="form-control" required /></td>
                    </tr>
                    <tr>
                        <td>Description<td>
                        <td>
                            <textarea name="description" class="form-control" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Barcode<td>
                        <td><input type="text" name="barcode" class="form-control" required /></td>
                    </tr>
                    <tr>
                        <td>Category<td>
                        <td>
                            <select name="category" class="form-control" style="text-align:center;" required>
                                <option value=""></option>
                                <option value="Evaporated Milk">Evaporated Milk</option>
                                <option value="Sweetened Condensed Milk">Sweetened Condensed Milk</option>
                                <option value="Creams">Creams</option>
                                <option value="Powdered Milk">Powdered Milk</option>
                                <option value="Ready to Drink">Ready to Drink</option>
                                <option value="Yoghurt Drink">Yoghurt Drink</option>
                                <option value="Coffee Creamer">Coffee Creamer</option>
                            </select>
                        </td>
                    </tr>   
                </table>
            </div>
            <div class="col">
                <table>
                    <tr>
                        <td>Bin<td>
                        <td><input type="text" name="bin" class="form-control" required /></td>
                    </tr>
                    <tr>
                        <td>Location<td>
                        <td><input type="text" name="location" class="form-control" required /></td>
                    </tr>
                    <tr>
                        <td>Packaging Size<td>
                        <td><input type="text" name="size" class="form-control" required /></td>
                    </tr>
                    <tr>
                        <td>Quantity<td>
                        <td><input type="text" name="qty" class="form-control" required /></td>
                    </tr>
                    <tr>
                        <td>Reorder Quantity<td>
                        <td><input type="text" name="rqty" class="form-control" required /></td>
                    </tr>
                    <tr>
                        <td>Cost<td>
                        <td><input type="text" name="cost" class="form-control" required /></td>
                    </tr>   
                </table>
            </div>
        </div>
        <div class="buttons">
            <a href="#add_" class="btn btn-primary" data-toggle="modal">Submit</a>
        </div>
        <?php include('messagebox/addproduct.php');?>
    </form>
</div>



<!--Archived Product-->
<div class="archivedProduct">
    <table class="table table-sm table-bordered">
        <tr>
            <th>No.</th>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Barcode</th>
            <th>Category</th>
            <th>Packaging Size</th>
            <th>Quantity</th>
            <th>Reorder Quantity</th>
            <th>Cost</th>
            <th>Date Archived</th>
        </tr>
        <?php $num = 1; foreach($archivedProducts as $archived):?>
        <tr>
            <td><?php echo $num; ?></td>
            <td><?php echo $archived['Product_ID'];?></td>
            <td><?php echo $archived['Product_Name'];?></td>
            <td><?php echo $archived['Description'];?></td>
            <td><?php echo $archived['Barcode'];?></td>
            <td><?php echo $archived['Category'];?></td>
            <td><?php echo $archived['Packaging_Size'];?></td>
            <td><?php echo $archived['Quantity'];?></td>
            <td><?php echo $archived['Reorder_Quantity'];?></td>
            <td><?php echo '₱'.number_format($archived['Cost'],2);?></td>
            <td><?php echo date("F j Y", strtotime($archived['Date_Archived']));?></td> 
        </tr>
            <?php $num += 1; endforeach;?>
    </table>
</div>