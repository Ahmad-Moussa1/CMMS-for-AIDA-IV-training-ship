<?php
require_once('../database/Database.php');
require_once('../interface/iorder.php');
class order extends Database implements iorder{
	public function __construct()
	{
		parent:: __construct();
	}

	public function insert_order($ord_date, $start, $end, $categ, $equip, $empl, $locat, $type, $desc, $spare, $comment, $compiled, $approve, $approve_date)
	{
		$sql = "INSERT INTO work_order(order_date, start_, end_date, categ_equip, equip_id, emp_id, work_location, order_type, work_desc, spare_parts, comments, compiled, approved, approve_date,inserted_at)
				VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW());

		";
		$result = $this->insertRow($sql, [$ord_date, $start, $end, $categ, $equip, $empl, $locat, $type, $desc, $spare, $comment, $compiled, $approve, $approve_date]);
		return $result;
	}



	public function get_order($od)
	{
		$sql="SELECT *
			  FROM work_order ord
			  INNER JOIN tbl_employee e
			  ON ord.emp_id = e.emp_id
			  INNER JOIN tbl_cat ca
			  ON ord.categ_equip = ca.cat_id
			  INNER JOIN tbl_equip eq
			  ON ord.equip_id = eq.equip_id
			  WHERE ord.order_id = ?
		";
		$result = $this->getRow($sql, [$od]);
		return $result;
	}

	public function get_all_orders()
	{
		/*get all items with the office nga naa sa emp*/
		$sql = "SELECT *
				FROM work_order ord
				INNER JOIN tbl_employee e
				ON ord.emp_id = e.emp_id
				INNER JOIN tbl_cat ca
				ON ord.categ_equip = ca.cat_id
				INNER JOIN tbl_equip eq
				ON ord.equip_id = eq.equip_id
				ORDER by ord.order_date
		";
		$result = $this->getRows($sql);
		return $result;
	}


	public function order_report($choice)
	{
		$sql = "";
		if($choice == 'all'){
			$sql = "SELECT *
					FROM tbl_item i 
					INNER JOIN tbl_employee e 
					ON i.emp_id = e.emp_id
					INNER JOIN tbl_cat c 
					ON i.cat_id = c.cat_id
					INNER JOIN tbl_con co 
					ON i.con_id = co.con_id
					INNER JOIN tbl_equip eq
					ON eq.equip_id = i.equip_id
					INNER JOIN tbl_off o 
					ON o.off_id = e.off_id";
			return $this->getRows($sql);
		}else if($choice == 'running'){
			$sql = "SELECT *
					FROM tbl_item i
					INNER JOIN tbl_cat c 
					ON i.cat_id = c.cat_id
					INNER JOIN tbl_employee e
					ON i.emp_id = e.emp_id
					INNER JOIN tbl_con co 
					ON i.con_id = co.con_id
					INNER JOIN tbl_equip eq
					ON eq.equip_id = i.equip_id";
			return $this->getRows($sql);
		}else if($choice == 'Worders'){
			$sql = "SELECT *
					FROM tbl_item i
					INNER JOIN tbl_cat c
					ON i.cat_id = c.cat_id
					INNER JOIN tbl_employee e
					ON i.emp_id = e.emp_id
					INNER JOIN tbl_con co
					ON i.con_id = co.con_id
					INNER JOIN tbl_equip eq
					ON eq.equip_id = i.equip_id";
			return $this->getRows($sql);
		}else{
			//CheckL
			$sql = "SELECT *
					FROM tbl_item i 
					INNER JOIN tbl_employee e 
					ON i.emp_id = e.emp_id
					INNER JOIN tbl_cat c 
					ON i.cat_id = c.cat_id
					INNER JOIN tbl_con co 
					ON i.con_id = co.con_id
					INNER JOIN tbl_off o 
					ON o.off_id = e.off_id
					WHERE i.con_id = ?
					ORDER BY i.item_name ASC";
			return $this->getRows($sql, [2]);
		}
	}//end item_report
}

$order = new Order();

/* End of file Order.php */
/* Location: .//D/xampp/htdocs/deped/class/Order.php */

