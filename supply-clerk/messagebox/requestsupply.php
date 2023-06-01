<!--Request Supple-->
<div class="modal fade" id="resupply_<?php echo $list['Product_ID'];?>" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header text-center">
				<h4 class="modal-title">Supply Request Form</h4>
                <p><?php echo date("M/d/Y");?></p>
			</div>
            <form action="php/request-product.php" method="POST">
                <div class="modal-body mx-3">	
                    <div class="form-group">
                        <label>Product ID</label>
                        <input type="text" name="prodid" value="<?php echo $list['Product_ID'];?>" class="form-control" readonly/>
                    </div>
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="prodname" value="<?php echo $list['Product_Name'];?>" class="form-control" readonly/>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="desc" value="<?php echo $list['Description']; ?>" class="form-control" readonly/>
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" name="qty" value="<?php echo $list['Quantity']; ?>" class="form-control" readonly/>
                    </div>
                    <div class="form-group">
                        <label>Ordered Quantity</label>
                        <input type="text" name="oqty" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required/>
                    </div>
                </div>				
                <div class="modal-footer">
                    <input type="submit" name="reqprod" class="btn btn-primary"/>
                    <a href="#" class="btn btn-danger" data-dismiss="modal">Cancel</a>   
                </div>
            </form>
		</div>
	</div>
</div>
<!--Update Status-->
<div class="modal fade" id="update_<?php echo $list['Product_ID']; ?>" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Updating Status</h4>
			</div>
			<div class="modal-body">	
				<h5 class="text-danger">Is the Product Re-stocked?</h5>
			</div>				
			<div class="modal-footer">
				<a href="#" class="btn btn-secondary" data-dismiss="modal">No</a>
			    <a href="php/request-product.php?productid=<?php echo $list['Product_ID']; ?>" class="btn btn-success">Yes</a>
		    </div>
		</div>
	</div>
</div>