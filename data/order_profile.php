<?php 
require_once('../class/Order.php');

if(isset($_POST['oID'])){
	$oID = $_POST['oID'];

	$result = $order->get_order($oID);
	echo json_encode($result);

}

$order->Disconnect();
?>