<!--ARCHIVE MESSAGE BOX-->
<div class="modal fade" id="archive_<?php echo $user['Employee_ID']; ?>" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			    <h4 class="modal-title">Archiving Account</h4>
			</div>
			<div class="modal-body">	
				<h5 class="text-danger">Are you sure you want to archive this Account?</h5>
			</div>				
			<div class="modal-footer">
				<a href="#" class="btn btn-secondary" data-dismiss="modal">No</button>
			    <a href="php/archiveAccount.php?id=<?php echo $user['Employee_ID']; ?>" class="btn btn-danger">Yes</a>
		    </div>
		</div>
	</div>
</div>

<!--EDIT MESSAGEBOX-->
<div class="modal fade" id="edit_<?php echo $user['Employee_ID']; ?>" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Editing Account</h4>
			</div>
			<div class="modal-body">	
				<h5 class="text-danger">Are you sure you want to edit this Account?</h5>
			</div>				
			<div class="modal-footer">
				<a href="#" class="btn btn-secondary" data-dismiss="modal">No</button>
			    <a href="manage-account-edit.php?id=<?php echo $user['Employee_ID']; ?>" class="btn btn-success">Yes</a>
		    </div>
		</div>
	</div>
</div>