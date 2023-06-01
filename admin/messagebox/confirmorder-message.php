<div class="modal fade" id="confirm_<?php echo $orderID; ?>" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Order Confirmation</h4>
			</div>
			<div class="modal-body">	
				<h5 class="text-danger">Load Order?</h5>
			</div>				
			<div class="modal-footer">
				<a href="#" class="btn btn-secondary" data-dismiss="modal">No</a>
			    <a href="php/confirmOrder.php?orderid=<?php echo $orderID; ?>" class="btn btn-success">Yes</a>
		    </div>
		</div>
	</div>
</div>