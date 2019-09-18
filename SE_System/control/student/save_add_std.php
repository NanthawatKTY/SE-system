<?php
session_start();
include '../../model/connect.php';
$codename = $_POST['txtcode'];
$Pname  = $_POST['txtPname'];
$Fname = $_POST['txtFname'];
$Lname  = $_POST['txtLname'];
$tel  = $_POST['txttel'];
$add = $_POST['txtbadd'];
$Birth  = $_POST['txtbirth'];
$card = $_POST['txtcard'];
$major  = $_POST['txtmajor'];
$fac  = $_POST['txtfac'];
$sql = "INSERT INTO student_tb(Std_Code, Std_Pname, Std_Fname, Std_Lname, Std_Tel, Std_Add, Std_Birth, Std_Card, Std_Major, Std_Faculty)
        VALUES(NULL,'$codename','$Pname','$Fname','$Lname','$tel','$add','$Birth','$card','$major','$fac')";
$query = mysqli_query($link, $sql);
if($query)
{
    echo"Insert Success";
    echo"<META HTTP-EQUIV='Refresh' CONTENT='2;URL=/SE_System/view/manageStudent/main.php'>";
}
else
{
    echo"Error , Insert Again";
    echo"<META HTTP-EQUIV='Refresh' CONTENT='2;URL=/SE_System/view/manageStudent/main.php'>";
}
mysqli_close($link);
?>