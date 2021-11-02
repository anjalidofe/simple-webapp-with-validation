<?php
	include("db_connect.php");
	class medical extends MySqlDb{
		public function insertData(){
			$studentMIS = $_GET["mis"];
			$bg = $_GET["bg"];
			$disability = $_GET["dis"];
			$d_info = $_GET["dinfo"];
			$vaccine_status = $_GET["dose"];

			if ($disability == "yes"){
				$sql = "insert into medical values(\"{$studentMIS}\", \"{$bg}\", \"{$vaccine_status}\", TRUE, \"{$d_info}\");";
				echo $sql;
			}
			else{
				$sql = "insert into medical values(\"{$studentMIS}\", \"{$bg}\", \"{$vaccine_status}\", FALSE, NULL);";
				echo $sql;
			}
		}
	}
	$p = new medical;
	$p->insertData();
?>
