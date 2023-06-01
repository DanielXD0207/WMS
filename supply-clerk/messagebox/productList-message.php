<!--Archive Product-->
<div class="modal fade" id="archive_<?php echo $list['Product_ID'];?>" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Archiving Product</h4>
			</div>
			<div class="modal-body">	
				<h5 class="text-danger">Do you want to Archive Product?</h5>
			</div>				
			<div class="modal-footer">
				<a href="#" class="btn btn-secondary" data-dismiss="modal">No</a>
			    <a href="php/archivedProduct.php?productid=<?php echo $list['Product_ID']; ?>" class="btn btn-success">Yes</a>
		    </div>
		</div>
	</div>
</div>