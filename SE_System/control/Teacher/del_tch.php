<?php
require_once('../../model/connect.php');
$id = $_GET['Teach_id'];
$sql = "DELETE FROM `teacher_tb` WHERE `teacher_tb`.`Teach_id` = '$id';";
$query = $conn->query($sql);
if($query){
    echo "<script>";
    echo "alert('ลบข้อมูลเรียบร้อยแล้ว');";
    echo "window.location='../../view/manageStudent/main.php';";
    echo "</script>";
}
else{
    echo "<script>";
    echo "alert('ERROR')";
    echo "window.location='../../view/manageStudent/main.php';";
    echo "</script>";
}

?>