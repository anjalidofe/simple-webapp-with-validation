<?php
    include("db_connect.php");
    class trip extends MySqlDb{
        public function insertData(){
            $mis = $_GET["MIS"];
            $name = $_GET["Name"];
            $age = $_GET["Age"];
            $email = $_GET["email"];
            $phone = $_GET["phone"];
            $branch = $_GET["branch"];
            $year = $_GET["year"];
            $gender = $_GET["gender"];
            
            $sql = "insert into trip values (\"{$mis}\", \"{$name}\", {$age}, \"{$email}\", \"{$gender}\", \"{$phone}\", \"{$branch}\", \"{$year}\");";
            echo $sql;
        }
    }
    $p = new trip;
    $p->insertData();
?>