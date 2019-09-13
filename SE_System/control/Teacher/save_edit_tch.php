<?php
require_once('../../model/connect.php');
session_start();
$codename = $_POST['Teach_code'];
$Pname  = $_POST['Teach_Pname'];
$Fname = $_POST['Teach_Fname'];
$Lname  = $_POST['Teach_Lname'];
$tel  = $_POST['Teach_Tel'];
$add = $_POST['Teach_Add'];
$Birth  = $_POST['Teach_Birth'];
$card = $_POST['Teach_Card'];
$major  = $_POST['Teach _Major'];
$fac  = $_POST['Teach _Faculty'];
$img  = $_POST['Teach _Image'];
$id = $_SESSION['Teach_id'];
     
                    $sql = "UPDATE `teacher_tb` SET `Teach_code` = '$code', `Teach_Pname` = '$Pname', `Teach_Fname` = '$Fname', `Teach_Lname` = '$Lname', `Teach_Tel` = '$tel', `Teach_Add` = '$add',`Teach_Birth` = '$Birth',`Teach_Card` = '$card',`Teach _Major` = '$major',`Teach _Faculty` = '$fac',`Teach _Image` = '$img' WHERE `student_tb`.`Teach_id` = '$id';";
                    $query = $conn->query($sql);
                    if($query){
                        echo "<script>";
                        echo "alert('แก้ไขเรียบร้อย');";
                        echo "window.location='../../main.html';";
                        echo "</script>";
                    }
                    else{
                        echo "<script>";
                        echo "alert('เกิดข้อผิดพลาด');";
                        echo "window.location='../../main.html';";
                        echo "</script>";
                    }

?>