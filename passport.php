<?php
    include("db_connect.php");
    class passport extends MySqlDb{
        public function insertData(){
            $mis = $_GET["mis"];
            $name = $_GET["pno"];
            $pass = $_GET["pname"];
            $expiry = $_GET["expiry"];
            $visa = $_GET["val"];
            $sql = NULL;
            if ($visa == "yes"){
                $sql = "insert into passport values (\"{$mis}\", \"{$name}\", \"{$pass}\", \"{$expiry}\", TRUE);";
            }
            else{
                $sql = "insert into passport values (\"{$mis}\", \"{$name}\", \"{$pass}\", \"{$expiry}\", False);";
            }       
            echo $sql;    
        }
    }
    $p = new passport;
    $p->insertData();
?>