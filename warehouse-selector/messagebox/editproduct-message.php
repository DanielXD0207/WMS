<!--Edit Product-->
<div class="modal fade" id="edit_<?php echo $inventory['Product_ID'];?>" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Editing Product</h4>
			</div>
			<div class="modal-body">	
				<h5 class="text-danger">Do you want to edit Product Information?</h5>
			</div>				
			<div class="modal-footer">
				<a href="#" class="btn btn-secondary" data-dismiss="modal">No</a>
                <input type="submit" name="editProd" class="btn btn-success" value="Yes" />
		    </div>
		</div>
	</div>
</div>