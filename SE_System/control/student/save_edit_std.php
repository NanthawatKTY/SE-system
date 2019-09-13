<?php
require_once('connect.php');
session_start();
$codename = $_POST['Std_Code'];
$Pname  = $_POST['Std_Pname'];
$Fname = $_POST['Std_Fname'];
$Lname  = $_POST['Std_Lname'];
$tel  = $_POST['Std_Tel'];
$add = $_POST['Std_Add'];
$Birth  = $_POST['Std_Birth'];
$card = $_POST['Std_Card'];
$major  = $_POST['Std_Major'];
$fac  = $_POST['Std_Faculty'];
$img  = $_POST['Std_Image'];
$id = $_SESSION['Std_id'];
     
                    $sql = "UPDATE `student_tb` SET `Std_Code` = '$code', `Std_Pname` = '$Pname', `Std_Fname` = '$Fname', `Std_Lname` = '$Lname', `Std_Tel` = '$tel', `Std_Add` = '$add',`Std_Birth` = '$Birth',`Std_Card` = '$card',`Std_Major` = '$major',`Std_Faculty` = '$fac',`Std_Image` = '$img' WHERE `student_tb`.`Std_id` = '$id';";
                    $query = $conn->query($sql);
                    if($query){
                        echo "<script>";
                        echo "alert('แก้ไขเรียบร้อย');";
                        echo "window.location='main.html';";
                        echo "</script>";
                    }
                    else{
                        echo "<script>";
                        echo "alert('เกิดข้อผิดพลาด');";
                        echo "window.location='main.html';";
                        echo "</script>";
                    }

?>