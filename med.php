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
			}
			else{
				$sql = "insert into medical values(\"{$studentMIS}\", \"{$bg}\", \"{$vaccine_status}\", FALSE, NULL);";
			}
			$this->connect()->query($sql);

		}
	}
	$p = new medical;
	$p->insertData();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Medical Information</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Animated thank you page template free download |  thank you page design in html with source code</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Anton&family=Righteous&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="thankyou.css"/>
</head>

<body>  
	<div class="box">
		<h2>Thank you for your response</h2>
		<p>
		You have successfully registered for the US College Trip
		</p>
		<div class="pyro">
			<div class="before"></div>
			<div class="after"></div>
		</div>
	</div>
</body>
</html>
