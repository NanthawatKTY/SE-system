<?php
require_once('connect.php');
session_start();
$codename = $_POST['codename'];
$name  = $_POST['name'];
$tel = $_POST['tel'];
$email  = $_POST['email'];
$year  = $_POST['year'];
$id = $_SESSION['id_edit_student'];
     
                    $sql = "UPDATE `student` SET `codename` = '$codename', `name` = '$name', `tel` = '$tel', `email` = '$email',`year` = '$year' WHERE `student`.`id` = '$id';";
                    $query = $conn->query($sql);
                    if($query){
                        echo "<script>";
                        echo "alert('แก้ไขเรียบร้อย');";
                        echo "window.location='student.php';";
                        echo "</script>";
                    }
                    else{
                        echo "<script>";
                        echo "alert('ERROR');";
                        echo "window.location='student.php';";
                        echo "</script>";
                    }

?>