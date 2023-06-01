<!--Record Product-->
<div class="modal fade" id="record_<?php echo $list['Product_ID']; ?>" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Records</h4>
			</div>
			<div class="modal-body">	
				<h5 class="text-danger">Do you want to Record the Current Inventory Level?</h5>
			</div>				
			<div class="modal-footer">
				<a href="#" class="btn btn-secondary" data-dismiss="modal">No</a>
			    <a href="php/addRecord.php?id=<?php echo $list['Product_ID'];?>" class="btn btn-success">Yes</a>
		    </div>
		</div>
	</div>
</div>