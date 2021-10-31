<?php
    include("db_connect.php");
    class passport extends MySqlDb{
        public function iinsertData(){
            $mis = $_GET["mis"];
            $name = $_GET["pno"];
            $pass = $_GET["pname"];
            $expiry = $_GET["expiry"];
            $visa = $_GET["val"];

            $sql = "insert into passport values (\"{$mis}\", \"{$pass}\", \"{$name}\", \"{$expiry}\", \"{$visa}\")";
        }
    }
    $p = new passport;
    $p->insertData();

?>