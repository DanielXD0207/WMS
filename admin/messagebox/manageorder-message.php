<div class="modal fade" id="process_<?php echo $list['Order_ID'];?>" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Shipping Order</h4>
			</div>
			<div class="modal-body">	
				<h5 class="text-danger">Are you sure you want to process order "<?php echo $list['Order_ID']; ?>"?</h5>
			</div>				
			<div class="modal-footer">
				<a href="#" class="btn btn-secondary" data-dismiss="modal">No</a>
			    <a href="manage-order-list-process.php?orderid=<?php echo $list['Order_ID'];?>" class="btn btn-success">Yes</a>
		    </div>
		</div>
	</div>
</div>

<div class="modal fade" id="cancel_<?php echo $list['Order_ID'];?>" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Cancelling Orders</h4>
			</div>
			<div class="modal-body">	
				<h5 class="text-danger">Are you sure you want to cancel the order "<?php echo $list['Order_ID']; ?>"?</h5>
			</div>				
			<div class="modal-footer">
				<a href="#" class="btn btn-secondary" data-dismiss="modal">No</a>
			    <a href="php/cancelorder.php?orderid=<?php echo $list['Order_ID'];?>" class="btn btn-success">Yes</a>
		    </div>
		</div>
	</div>
</div>