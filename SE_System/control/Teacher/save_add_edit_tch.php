<?php
session_start();
include '../../model/connect.php';
$code = $_POST['txtcode'];
$Pname  = $_POST['txtPname'];
$Fname = $_POST['txtFname'];
$Lname  = $_POST['txtLname'];
$tel  = $_POST['txttel'];
$add = $_POST['txtbadd'];
$Birth  = $_POST['txtbirth'];
$card = $_POST['txtidcard'];
$major  = $_POST['txtmajor'];
$fac  = $_POST['txtfac'];
if($_SESSION['Teach_edit']!=null){
$sql = "UPDATE `teacher_tb` SET `Teach_code`='".$code."',`Teach_Pname`='".$Pname."',`Teach_Fname`='".$Fname."',`Teach_Lname`='".$Lname."',`Teach_Tel`='".$tel."',`Teach_Add`='".$add."',`Teach_Birth`='".$Birth."',`Teach_Card`='".$card."',`Teach _Major`='".$major."',`Teach _Faculty`='".$fac."' WHERE Teach_id = '".$_SESSION['Teach_edit']."' ";
$query = $conn->query($sql);
//print_r($sql);
if($query){
    echo $_SESSION['Teach_edit'];
    $_SESSION['Teach_edit'] = " ";
    echo "<script>";
    echo "alert('แก้ไขเรียบร้อย');";
    echo "window.location='../../view/manageTeacher/Main.php";
    echo "</script>";
}
else{
    
    echo "<script>";
    echo "alert('เกิดข้อผิดพลาด');";
    echo "window.location='../../view/manageTeacher/Main.php";
    echo "</script>";
}
}
else{
    
$sql = "INSERT INTO teacher_tb(Teach_code, Teach_Pname, Teach_Fname, Teach_Lname, Teach_Tel, Teach_Add, Teach_Birth, Teach_Card, Teach _Major, Teach _Faculty)
        VALUES('".$_POST['txtcode']."','".$_POST['txtPname']."','".$_POST['txtFname']."','".$_POST['txtLname']."','".$_POST['txttel']."','".$_POST['txtbadd']."','".$_POST['txtbirth']."','".$_POST['txtidcard']."','".$_POST['txtmajor']."','".$_POST['txtfac']."')";
$query = $conn->query($sql);
if($query)
{
    echo "<script>";
    echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
    echo "window.location='../../view/manageTeacher/Main.php";
    echo "</script>";}
else
{
    echo "<script>";
    echo "alert('ไม่สามารถเพิ่มข้อมูลได้');";
    echo "window.location='../../view/manageTeacher/Main.php";
    echo "</script>";
}
}
?>