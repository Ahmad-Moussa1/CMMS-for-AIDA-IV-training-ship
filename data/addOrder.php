<?php 
require_once('../class/Order.php');
if(isset($_POST['data'])){
	$data = json_decode($_POST['data'], true);

    $ord_date = $data[0];
	$start = $data[1];
	$end = $data[2];
	$categ = $data[3];
	$equip = $data[4];
	$empl  = $data[5];
	$locat = $data[6];
    $type  = $data[7];
	$desc =  $data[8];
	$spare = $data[9];
	$comment = $data[10];
	$compiled = $data[11];
	$approve =  $data[12];
	$approve_date = $data[13];

	//$result = $item->insert_item($pName, $pNum, $eqID, $cuRH, $DLM, $inspec, $emplID, $categID, $coID);
	$result['valid'] = $order->insert_order($ord_date, $start, $end, $categ, $equip, $empl, $locat, $type, $desc, $spare, $comment, $compiled, $approve, $approve_date);
	if($result['valid']){
		$result['msg'] = "Order Added Successfully!";
		$result['action'] = "Add Data";
		echo json_encode($result);
	}
	// echo $result;
}

$order->Disconnect();
 ?>

