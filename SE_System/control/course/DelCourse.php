<?php
session_start();
include_once('../../model/connect.php');
 $ID = $_GET['ID'];
$sql = "DELETE FROM `coursename_tb` WHERE Cos_code= '".$_GET['ID']."' ";
$query = $conn->query($sql);
if($query==TRUE)
{
    header( "location:  ../../view/subjects/edprograms/Main.php?susccess=1");
}
else
{
    header( "location: ../../view/subjects/edprograms/Main.php?susccess=2");
}
mysqli_close($conn);
?>

</html>
