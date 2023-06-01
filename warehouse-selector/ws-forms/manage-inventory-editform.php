<div class="editProduct">
    <h2>Editing Product Information</h2>
    <form action="php/editProduct.php" method="POST">
        <div class="row">
            <div class="col">
                <table>
                    <tr>
                        <td>Product ID</td>
                        <input type="hidden" name="productid" value="<?php echo $inventory['Product_ID'];?>" />
                        <td style="font-weight:bold;"><?php echo $inventory['Product_ID'];?></td>
                    </tr>
                    <tr>
                        <td>Product Description</td>
                        <td>
                            <textarea name="desc" class="form-control" style="height:70px;" required><?php echo $inventory['Description'];?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><p>Product Name</p></td>
                        <td><input type="text" name="prodname" class="form-control" value="<?php echo $inventory['Product_Name'];?>" readonly/></td>
                    </tr>
                    <tr>
                        <td><p>Barcode</p></td>
                        <td><input type="text" name="barcode" class="form-control" value="<?php echo $inventory['Barcode'];?>" readonly/></td>
                    </tr>
                    <tr>
                        <td><p>Category</p></td>
                        <td><input type="text" name="category" class="form-control" value="<?php echo $inventory['Category'];?>" readonly/></td>
                    </tr>
                    <tr>
                        <td><p>Bin</p></td>
                        <td><input type="text" name="bin" class="form-control" value="<?php echo $inventory['Bin'];?>" required/></td>
                    </tr>       
                </table>
            </div>
            <div class="col">
                <table>
                    <tr>
                        <td><p>Location</p></td>
                        <td><input type="text" name="location" class="form-control" value="<?php echo $inventory['Location'];?>" required/></td>
                    </tr>
                    <tr>
                        <td><p>Packaging Size</p></td>
                        <td><input type="text" name="unit" class="form-control" value="<?php echo $inventory['Packaging_Size'];?>" required/></td>
                    </tr>
                    <tr>
                        <td><p>Quantity</p></td>
                        <td><input type="text" name="qty" class="form-control" value="<?php echo $inventory['Quantity'];?>" readonly/></td>
                    </tr>
                    <tr>
                        <td><p>Reorder Quantity</p></td>
                        <td><input type="text" name="rqty" class="form-control" value="<?php echo $inventory['Reorder_Quantity'];?>" required/></td>
                    </tr>
                    <tr>
                        <td><p>Cost</p></td>
                        <td><input type="text" name="cost" class="form-control" value="<?php echo $inventory['Cost'];?>" required/></td>
                    </tr>
                    <tr>
                        <td>Inventory Value</td>
                        <?php $inventoryVal = $inventory['Quantity'] * $inventory['Cost'];?>
                        <td><input type="text" name="invalue" class="form-control" value="<?php echo $inventoryVal;?>" readonly/></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="buttons">
            <a href="#edit_<?php echo $inventory['Product_ID'];?>" class="btn btn-primary edit" data-toggle="modal">
                    Submit
            </a>
            <a href="manage-inventory.php" class="btn btn-danger">Cancel</a>
        </div>
        <?php include('messagebox/editproduct-message.php');?>
    </form>
</div>