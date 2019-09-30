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
if($_SESSION['Std_edit']!=null){
$sqlSTD = "UPDATE `student_tb` SET `Std_Code`='".$code."',`Std_Pname`='".$Pname."',`Std_Fname`='".$Fname."',`Std_Lname`='".$Lname."',`Std_Tel`='".$tel."',`Std_Add`='".$add."',`Std_Birth`='".$Birth."',`Std_Card`='".$card."',`Std_Major`='".$major."',`Std_Faculty`='".$fac."' WHERE Std_Code = '".$_SESSION['Std_edit']."' ";
$sqlMEM = "UPDATE `member_tb` SET `Mem_user`='".$code."',`Mem_pass`='".$pass."',`Email`='".$Email."' WHERE Mem_user = '".$_SESSION['Std_edit']."' ";
$querySTD = $conn->query($sqlSTD);
$queryMEM  = $conn->query($sqlMEM);
if($querySTD){
    if($queryMEM){
    echo $_SESSION['Std_edit'];
    $_SESSION['Std_edit'] = "";
    echo "<script>";
    echo "alert('แก้ไขเรียบร้อย');";
    echo "window.location='../../view/manageStudent/main.php';";
    echo "</script>";
}
else{
    echo "<script>";
    echo "alert('เกิดข้อผิดพลาด');";
    echo "window.location='../../view/manageStudent/main.php';";
    echo "</script>";
}
}
else{
    
    echo "<script>";
    echo "alert('เกิดข้อผิดพลาด');";
    echo "window.location='../../view/manageStudent/main.php';";
    echo "</script>";
}
}
else{
    
$sqlStd = "INSERT INTO student_tb(Std_Code, Std_Pname, Std_Fname, Std_Lname, Std_Tel, Std_Add, Std_Birth, Std_Card, Std_Major, Std_Faculty)
        VALUES('".$_POST['txtcode']."','".$_POST['txtPname']."','".$_POST['txtFname']."','".$_POST['txtLname']."','".$_POST['txttel']."','".$_POST['txtbadd']."','".$_POST['txtbirth']."','".$_POST['txtidcard']."','".$_POST['txtmajor']."','".$_POST['txtfac']."')";
$sqlMem = "INSERT INTO `member_tb`(`Mem_user`, `Mem_pass`, `Type_id`, `Email`) VALUES ('".$_POST['txtcode']."','".$_POST['txtPass']."',2,'".$_POST['txtEmail']."')";
$queryStd = $conn->query($sqlStd);
$queryMem = $conn->query($sqlMem);
if($queryStd){
if($queryMem){

    echo "<script>";
    echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
    echo "window.location='../../view/manageStudent/main.php';";
    echo "</script>";}
else {
    echo "<script>";
    echo "alert('ไม่สามารถเพิ่มข้อมูลได้');";
    echo "window.location='../../view/manageStudent/main.php';";
    echo "</script>";
}
}
else
{
    echo "<script>";
    echo "alert('ไม่สามารถเพิ่มข้อมูลได้');";
    echo "window.location='../../view/manageStudent/main.php';";
    echo "</script>";
}
}
?>