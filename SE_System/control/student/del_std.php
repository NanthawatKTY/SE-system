<?php
require_once('connect.php');
$id = $_GET['id'];
$sql = "DELETE FROM `student` WHERE `student`.`id` = '$id';";
$query = $conn->query($sql);
if($query){
    echo "<script>";
    echo "alert('ลบข้อมูลเรียบร้อยแล้ว');";
    echo "window.location='student.php';";
    echo "</script>";
}
else{
    echo "<script>";
    echo "alert('ERROR')";
    echo "window.location='student.php';";
    echo "</script>";
}

?>