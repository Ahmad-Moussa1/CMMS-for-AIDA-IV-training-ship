<?php 
require_once('../class/Item.php'); 
$allItem = $item->get_all_items();
// echo '<pre>';
// 	print_r($allItem);
// echo '</pre>';
?>

<br />
<table id="myTable" class="table table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
	    <tr>
	        <th>Part Name</th>
	       <!-- <th>Part Num</th> -->
	        <th>Equipment Name</th>
	        <th>Category</th>
	        <th>Current RH</th>
	        <th>Date of Last Maintenance</th>
	        <th>Remaining Hours</th>
	        <th><center>Action</center></th>
	    </tr>
	</thead>
    <tbody>
		<?php 
			foreach ($allItem as $i) {
				# code...
				$fN = $i['emp_fname'];
				$mN = $i['emp_mname'];
				$mN = $mN[0].'.';
				$lN = $i['emp_lname'];
				$fullName = "$fN $mN $lN";
				$fullName = ucwords($fullName);
		?>
			<tr>
				<td onclick="item_profile('<?php echo $i['item_id']; ?>');"><?php echo $i['item_name']; ?></td>
				<!--<td onclick="item_profile('<?php echo $i['item_id']; ?>');"><?php echo $i['Part_num']; ?></td>-->
				<td onclick="item_profile('<?php echo $i['item_id']; ?>');"><?php echo ucwords($i['equip_name']); ?></td>
				<td onclick="item_profile('<?php echo $i['item_id']; ?>');"><?php echo ucwords($i['cat_desc']); ?></td>
				<td onclick="item_profile('<?php echo $i['item_id']; ?>');"><?php echo $i['current_RH']; ?></td>
				<td onclick="item_profile('<?php echo $i['item_id']; ?>');"><?php echo $i['date_Lmaint']; ?></td>
				<td onclick="item_profile('<?php echo $i['item_id']; ?>');"><?php echo $i['rem_hours']; ?></td>

<!--
				<td <?php $cond = $i['con_id']; if($cond == 1){echo 'class="text-success"';} if($cond == 2){echo 'class="text-danger"';}?>
				onclick="item_profile('<?php echo $i['item_id']; ?>');">
					<strong>
						<?php echo ucfirst($i['con_desc']); ?>
					</strong>
					-->
				</td>
				<td align="center">
					<button onclick="fill_update_modal('<?php echo $i['item_id']; ?>');" class="btn btn-warning btn-sm"
					id="btn-edit"
					<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
					Edit
					</button>
					<button class="btn btn-success btn-sm" onclick="item_profile('<?php echo $i['item_id']; ?>');">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					View
					</button>
				</td>
			</tr>
		<?php		
			}//end foreach
		 ?>
    </tbody>
</table>


<?php 
$item->Disconnect();
 ?>

<!-- for the datatable of item -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable').DataTable();
	});
</script>
