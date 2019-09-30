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
$Email  = $_POST['txtEmail'];
$pass = $_POST['txtPass'];
$card = $_POST['txtidcard'];
$major  = $_POST['txtmajor'];
$fac  = $_POST['txtfac'];
if($_SESSION['Teach_edit']!=null){
$sqlTCH = "UPDATE `teacher_tb` SET `Teach_code`='".$code."',`Teach_Pname`='".$Pname."',`Teach_Fname`='".$Fname."',`Teach_Lname`='".$Lname."',`Teach_Tel`='".$tel."',`Teach_Add`='".$add."',`Teach_Birth`='".$Birth."',`Teach_Card`='".$card."',`Teach_Major`='".$major."',`Teach_Faculty`='".$fac."' WHERE Teach_id = '".$_SESSION['Teach_edit']."' ";
$sqlMEM = "UPDATE `member_tb` SET `Mem_user`='".$code."',`Mem_pass`='".$pass."',`Email`='".$Email."' WHERE Mem_user = '".$_SESSION['Std_edit']."' ";
$queryTCH = $conn->query($sqlTCH);
$queryMEM  = $conn->query($sqlMEM);
print_r($sqlTCH);
if($queryTCH){
    if($queryMEM){
    //echo $_SESSION['Teach_edit'];
    $_SESSION['Teach_edit'] = " ";
    echo "<script>";
    echo "alert('แก้ไขเรียบร้อย');";
    echo "window.location='../../view/manageTeacher/Main.php";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('เกิดข้อผิดพลาด');";
    echo "window.location='../../view/manageTeacher/Main.php";
    echo "</script>";
}
}
else{
    echo "<script>";
    echo "alert('เกิดข้อผิดพลาด');";
    echo "window.location='../../view/manageTeacher/Main.php";
    echo "</script>";
}
}
else{
    
$sqlTch = "INSERT INTO teacher_tb(Teach_code, Teach_Pname, Teach_Fname, Teach_Lname, Teach_Tel, Teach_Add, Teach_Birth, Teach_Card, Teach_Major, Teach_Faculty)
        VALUES('".$_POST['txtcode']."','".$_POST['txtPname']."','".$_POST['txtFname']."','".$_POST['txtLname']."','".$_POST['txttel']."','".$_POST['txtbadd']."','".$_POST['txtbirth']."','".$_POST['txtidcard']."','".$_POST['txtmajor']."','".$_POST['txtfac']."')";
$sqlMem = "INSERT INTO `member_tb`(`Mem_user`, `Mem_pass`, `Type_id`, `Email`) VALUES ('".$_POST['txtcode']."','".$_POST['txtPass']."',2,'".$_POST['txtEmail']."')";
$queryTch = $conn->query($sqlTch);
$queryMem = $conn->query($sqlMem);
//print_r($sqlTch);
if($queryTch){
    if($queryMem){
    $_SESSION['Teach_edit'] = " ";
    echo "<script>";
    echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
    echo "window.location='../../view/manageTeacher/Main.php'";
    echo "</script>";}

else{
    echo "<script>";
    echo "alert('ไม่สามารถเพิ่มข้อมูลได้');";
    echo "window.location='../../view/manageTeacher/Main.php'";
    echo "</script>";
}
}
else
{
    echo "<script>";
    echo "alert('ไม่สามารถเพิ่มข้อมูลได้');";
    echo "window.location='../../view/manageTeacher/Main.php'";
    echo "</script>";
}
}
?>