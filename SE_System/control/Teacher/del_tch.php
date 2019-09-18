<?php
require_once('../../model/connect.php');
$id = $_GET['Teach_id'];
$sql = "DELETE FROM `teacher_tb` WHERE `teacher_tb`.`Teach_id` = '$id';";
$query = $conn->query($sql);
if($query){
    echo "<script>";
    echo "alert('ลบข้อมูลเรียบร้อยแล้ว');";
    echo "window.location='main.php';";
    echo "</script>";
}
else{
    echo "<script>";
    echo "alert('ไม่สามารถลบข้อมูลได้')";
    echo "window.location='main.php';";
    echo "</script>";
}

?>