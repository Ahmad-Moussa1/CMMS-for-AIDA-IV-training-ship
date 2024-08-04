<?php 
require_once('../class/Item.php');
if(isset($_POST['data'])){
	$data = json_decode($_POST['data'], true);

    $categID = $data[0];
	$pName = ucwords($data[2]);
	#$pNum = $data[3];
	$eqID = $data[1];
	$cuRH = $data[3];
	$DLM = $data[4];
	$inspec = $data[5];
	$emplID = $data[6];

	$coID = $data[7];


	//$result = $item->insert_item($pName, $pNum, $eqID, $cuRH, $DLM, $inspec, $emplID, $categID, $coID);
	$result['valid'] = $item->insert_item($pName, $eqID, $cuRH, $DLM, $inspec, $emplID, $categID, $coID);
	if($result['valid']){
		$result['msg'] = "Item Added Successfully!";
		$result['action'] = "Add Data";
		echo json_encode($result);
	}
	// echo $result;
}

$item->Disconnect();
 ?>

