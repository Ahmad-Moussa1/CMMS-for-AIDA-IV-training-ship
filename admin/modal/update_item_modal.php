<?php 
require_once('../class/Item.php'); 
require_once('../class/Employee.php'); 


?>
<div class="modal fade" id="modal-update-item">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Update Running Hours</h4>
			</div>
			<div class="modal-body">
				<!-- main form -->
					<form class="form-horizontal" role="form" id="view-item-form">
					<input type="hidden" id="uID">
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="RH-update">Current Running Hours:</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="RH-update" placeholder="Enter Running Hours" autofocus>
					    </div>
					  </div>


					  <div class="form-group">
					    <label class="control-label col-sm-3" for="DLM-update">Date of Last Maintenance:</label>
					    <div class="col-sm-9">
					      <input type="date" class="form-control" id="DLM-update" placeholder="Enter Date" autofocus>
					    </div>
					  </div>

					  <div class="form-group"> 
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" id="btn-update-submit" class="btn btn-primary">Save
					      <span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
					      </button>
					    </div>
					  </div>
					</form>
				<!-- /main form -->
			</div>
		</div>
	</div>
</div>
