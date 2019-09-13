<?php
include '../../model/connect.php';
$sql = "INSERT INTO teacher_tb(Teach_code, Teach_Pname, Teach_Fname, Teach_Lname, Teach_Tel, Teach_Add, Teach_Birth, Teach_Card, Teach _Major, Teach _Faculty,Teach _Image)
        VALUES('".$_POST['txtcode']."','".$_POST['txtPname']."','".$_POST['txtFname']."','".$_POST['txtLname']."','".$_POST['txttel']."','".$_POST['txtadd']."','".$_POST['txtbirth']."','".$_POST['txtidcard']."','".$_POST['txtmajor']."','".$_POST['txtfac']."','".$_POST['img']."')";

$query = mysqli_query($link, $sql);
if($query)
{
    echo"Insert Success";
    echo"<META HTTP-EQUIV='Refresh' CONTENT='2;URL=admin.php'>";
}
else
{
    echo"Error , Insert Again";
    echo"<META HTTP-EQUIV='Refresh' CONTENT='2;URL=admin.php'>";
}
mysqli_close($link);
?>