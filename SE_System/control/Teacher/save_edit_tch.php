<?php
require_once('connect.php');
session_start();
$membername = $_POST['membername'];
$username  = $_POST['username'];
$password = $_POST['password'];
$email  = $_POST['email'];
$tel  = $_POST['tel'];
$id = $_SESSION['id_member'];
$status = $_POST['status'];
     
                    $sql = "UPDATE `member` SET `name` = '$membername', `username` = '$username', `password` = '$password', `email` = '$email',`tel` = '$tel',`status` = '$status' WHERE `member`.`id` = '$id';";
                    $query = $conn->query($sql);
                    if($query){
                        echo "<script>";
                        echo "alert('แก้ไขเรียบร้อย');";
                        echo "window.location='member.php';";
                        echo "</script>";
                    }
                    else{
                        echo "<script>";
                        echo "alert('ERROR');";
                        echo "window.location='member.php';";
                        echo "</script>";
                    }
