<!DOCTYPE html>
<html lang="en">
<?php 
require_once('../class/Item.php');
if(isset($_GET['choice'])){
    $choice = $_GET['choice'];

    $reports = $item->item_report($choice);
    // echo '<pre>';
    //  print_r($reports);
    // echo '</pre>';

?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CMMS AIDA IV Training Ship</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.min.css">
    <link href="../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">


</head>
<body>


<center>
    <h2>Running Hours Report</h2>
    <h3>as of</h3>
    <h3><?= date('m-d-Y'); ?></h3>
</center>

<br />
<div class="table-responsive">
       <table id="myTable-report" class="table table-bordered table-hover" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Part Name</th>
	        <th>Equipment Name</th>
	        <th>Category</th>
	        <th>Current RH</th>
	        <th>Last Update</th>
	        <th>Date of Last Maintenance</th>
	        <th>Remaining Hours</th>
	        <th>Condition</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($reports as $r): 
            $fN = $r['emp_fname'];
            $mN = $r['emp_mname'];
            $lN = $r['emp_lname'];
            $mN = $mN[0];
            $fullName = "$fN $mN. $lN";
            $fullName = ucwords($fullName);
        ?>
            <tr>
                <td><?= $r['item_name']; ?></td>
    			<td><?= $r['equip_name']; ?></td>
    			<td><?= $r['cat_desc']; ?></td>
    			<td><?= $r['current_RH']; ?></td>
    			<td><?= $r['updated_at']; ?></td>
    			<td><?= $r['date_Lmaint']; ?></td>
    			<td><?= $r['rem_hours']; ?></td>
    			<td><?= $r['con_desc']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>


    <script type="text/javascript">
        print();
    </script>
</body>
</html>

<?php

    // echo $choice;
}//end isset


