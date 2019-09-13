<?php
include 'condb.php';
$sql = "INSERT INTO worker(Mname, Uname, Passwd, MType)
        VALUES('".$_POST['txtName']."','".$_POST['txtUname']."','".$_POST['txtpasswd']."','".$_POST['mtype']."')";

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