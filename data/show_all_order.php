<?php 
require_once('../class/Order.php');
$allorder = $order->get_all_orders();
// echo '<pre>';
// 	print_r($allItem);
// echo '</pre>';
?>

<br />
<table id="myTable-orders" class="table table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
	    <tr>
	        <th>Order Num</th>
	        <th>Start Date</th>
	        <th>End Date</th>
	        <th>Order Type</th>
	        <th>Equipment name</th>
	        <th>Work Desc</th>
	        <th>Compiled By</th>
	        <th><center>Action</center></th>
	    </tr>
	</thead>
    <tbody>
        <?php
			foreach ($allorder as $o) {

		?>

			<tr>
				<td onclick="order_profile('<?php echo $o['order_id']; ?>');"><?php echo $o['order_id']; ?></td>
				<td onclick="order_profile('<?php echo $o['order_id']; ?>');"><?php echo $o['start_']; ?></td>
				<td onclick="order_profile('<?php echo $o['order_id']; ?>');"><?php echo $o['end_date']; ?></td>
				<td onclick="order_profile('<?php echo $o['order_id']; ?>');"><?php echo $o['order_type']; ?></td>
				<td onclick="order_profile('<?php echo $o['order_id']; ?>');"><?php echo $o['equip_name']; ?></td>
				<td onclick="order_profile('<?php echo $o['order_id']; ?>');"><?php echo $o['work_desc']; ?></td>
				<td onclick="order_profile('<?php echo $o['order_id']; ?>');"><?php echo $o['compiled']; ?></td>


				</td>
				<td align="center">

					<button class="btn btn-success btn-sm" onclick="order_profile('<?php echo $o['order_id']; ?>');">
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
$order->Disconnect();
 ?>

<!-- for the datatable of item -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable-orders').DataTable();
	});

</script>
