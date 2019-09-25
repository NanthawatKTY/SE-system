<?php
require_once('../../model/connect.php');
$code = $_GET['Std_Code'];
$sqlSTD = "DELETE FROM student_tb WHERE Std_Code = '$code'";
$sqlMEM = "DELETE FROM `member_tb` WHERE Mem_user = '$code'";
$querySTD = $conn->query($sqlSTD);
$queryMEM = $conn->query($sqlMEM);
if($querySTD){
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