<?php
session_start();
//$servername = "localhost";
//$server_user = "root";
//$server_pass = "";
//$dbname = "food";


$servername = "remotemysql.com";
$server_user = "Xw3xdpoYGt";
$server_pass = "b0KqO0r8ie";
$dbname = "Xw3xdpoYGt";
$name = $_SESSION['name'];
$role = $_SESSION['role'];

$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>