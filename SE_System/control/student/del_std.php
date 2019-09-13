<?php
require_once('connect.php');
$id = $_GET['Std_id'];
$sql = "DELETE FROM `student_tb` WHERE `student_tb`.`Std_id` = '$id';";
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