<?php
require_once('../class/Item.php');
require_once('../class/Employee.php'); 

$employees = $employee->get_employees();
$categories = $item->item_categories();
$equips = $item->item_equip();
?>

<div class="modal fade" id="modal-add-order">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Add Work Order</h4>
			</div>
			<div class="modal-body">
				<!-- main form -->

					<form class="form-horizontal" role="form" id="add-order-form">
					<div class="form-group">
					      <label class="control-label col-sm-3" for="order_date">Order Date:</label>
					      <div class="col-sm-5">
					        <input type="date" class="form-control" id="orderdate" >
					    </div>
					  </div>
<!--
					  <div class="form-group">
					    <label class="control-label col-sm-3" for="order_number">Order Number:</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="ordernumber" placeholder="Order Number">
					    </div>
					  </div>
-->

					  <div class="form-group">
					     <label class="control-label col-sm-3" for="start_date">Start Date:</label>
					     <div class="col-sm-5">
					       <input type="date" class="form-control" id="startdate" >
					     </div>
					  </div>


					  <div class="form-group">
					     <label class="control-label col-sm-3" for="end_date">End Date:</label>
					     <div class="col-sm-5">
					       <input type="date" class="form-control" id="enddate" >
					     </div>
					  </div>

                      <div class="form-group">
					    <label class="control-label col-sm-3" for="catID">Category:</label>
					    <div class="col-sm-3"> 
					    	<select name="" class="btn btn-default" id="catID">
					    		<?php 
					    			foreach ($categories as $category) {
					    				# code...
					    			$catID = $category['cat_id'];
					    			$catDesc = ucwords($category['cat_desc']);
					    		?>
					    			<option value="<?php echo $catID; ?>"><?php echo $catDesc; ?></option>}
					    		<?php
					    			}//end foreach of category
					    		 ?>
					    	</select>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-3" for="equipID">Equipment:</label>
					    <div class="col-sm-3">
					    	<select name="" class="btn btn-default" id="equipID">
					    		<?php
					    			foreach ($equips as $equip) {
					    				# code...
					    			$equipID = $equip['equip_id'];
					    			$equipDesc = ucwords($equip['equip_name']);
					    		?>
					    			<option value="<?php echo $equipID; ?>"><?php echo $equipDesc; ?></option>}
					    		<?php
					    			}//end foreach of category
					    		 ?>
					    	</select>
					    </div>
					  </div>

					  <div class="form-group">
					    <label class="control-label col-sm-3" for="empID">Engineer in charge:</label>
					    <div class="col-sm-9">
					    	<select class="btn btn-default" id="empID">

								<?php
									foreach ($employees as $empployee) {
										# code..
									$fN = $empployee['emp_fname'];
									$mN = $empployee['emp_mname'];
									$lN = $empployee['emp_lname'];
									$fullName = "$fN $mN $lN";
									$fullName = ucwords($fullName);
									$emp_id = $empployee['emp_id'];
								?>
									<option value="<?php echo $emp_id; ?>"><?php echo $fullName; ?></option>}
								<?php
									}//end foreach
								 ?>
					    	</select>
					    </div>
					  </div>

					   <div class="form-group" >
					    <label class="control-label col-sm-3" for="work_location">Work Location:</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="worklocation" placeholder="Enter Work Location">
					    </div>
					  </div>

					  <div class="form-group" >
					    <label class="control-label col-sm-3" for="order_type">Type of work order:</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="ordertype" placeholder="Enter order type">
					    </div>
					  </div>

					  <div class="form-group" >
					    <label class="control-label col-sm-3" for="work_desc">Work Description:</label>
					    <div class="col-sm-8">
					      <textarea class="form-control" id="workdesc" cols="40" rows="4"></textarea>
					    </div>
					  </div>

					  <div class="form-group" >
					    <label class="control-label col-sm-3" for="spare_parts">Spare parts used:</label>
					    <div class="col-sm-8">
					      <textarea class="form-control" id="spareparts" cols="40" rows="4"></textarea>
					    </div>
					  </div>

					  <div class="form-group" >
					    <label class="control-label col-sm-3" for="add_comment">Additional comments:</label>
					    <div class="col-sm-8">
					      <textarea class="form-control" id="addcomment" cols="40" rows="4"></textarea>
					    </div>
					  </div>

					  <div class="form-group" >
					    <label class="control-label col-sm-3" for="comp_by">Compiled by:</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="compby" placeholder="compiled by">
					    </div>
					  </div>

					  <div class="form-group" >
					    <label class="control-label col-sm-3" for="approve_party">Approved party name:</label>
					    <div class="col-sm-5">
					      <input type="text" class="form-control" id="approveparty" placeholder="Approved party name">
					    </div>
					  </div>


					  <div class="form-group">
					     <label class="control-label col-sm-3" for="approval_date">Date of approval:</label>
					     <div class="col-sm-5">
					       <input type="date" class="form-control" id="approvaldate" >
					     </div>
					  </div>

					  <div class="form-group"> 
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" id="btn-submit" value="add" class="btn btn-primary">Save
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
