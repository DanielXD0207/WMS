<div class="modal fade" id="deliver_<?php echo $list['Order_ID']; ?>" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Delivering Product</h4>
			</div>
			<div class="modal-body">	
				<h5 class="text-danger">Is the product delivered?</h5>
			</div>				
			<div class="modal-footer">
				<a href="#" class="btn btn-secondary" data-dismiss="modal">No</a>
			    <a href="php/deliverProduct.php?orderid=<?php echo $list['Order_ID']; ?>" class="btn btn-success">Yes</a>
		    </div>
		</div>
	</div>
</div>