<?php
require_once('../../model/connect.php');
$id = $_GET['Teach_Code'];
$sqlTCH = "DELETE FROM `teacher_tb` WHERE `teacher_tb`.`Teach_code` = '$id';";
$sqlMEM = "DELETE FROM `member_tb` WHERE Mem_user = '$id'";
$queryTCH = $conn->query($sqlTCH);
$queryMEM = $conn->query($sqlMEM);
if($queryTCH){
    if($queryMEM){
    echo "<script>";
    echo "alert('ลบข้อมูลเรียบร้อยแล้ว');";
    echo "window.location='../../view/manageStudent/main.php';";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('ERROR')";
    echo "window.location='../../view/manageStudent/main.php';";
    echo "</script>";
}
}
else{
    echo "<script>";
    echo "alert('ERROR')";
    echo "window.location='../../view/manageStudent/main.php';";
    echo "</script>";
}

?>