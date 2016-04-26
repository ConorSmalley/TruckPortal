<?php
$username = root;
$password = root;

// $con = new mysqli("localhost",$username,$password,"TruckPortal");

// Create database connection using PHP Data Object (PDO)
$db = new PDO("mysql:host=localhost;dbname=TruckPortal", $username, $password);
// mysql_select_db("TruckPortal", $con);
?>
