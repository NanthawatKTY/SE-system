<?php
$user = "localhosS";
$pass = "root";
$host = "";
$tb = "softengdb"; 

$conn = new mysqli($user,$pass,$host,$tb);
$conn->set_charset('utf8');
if($conn->connect_error){
    echo "CONNECT ERROR".$conn->connect_error;
    exit();}
?>