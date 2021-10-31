<?php
	include("db_connect.php");
	class medical extends MySqlDb{
		public function insertData(){
			$studentMIS = $_GET["mis"];
			$bg = $_GET["bg"];
			$disability = $_GET["dis"];
			$d_info = $_GET["dinfo"];
			$vaccine_status = $_GET["dose"];

			$sql = "insert into medical values()"
		}
	}
	$p = new medical;
	$p->insertData();
?>
