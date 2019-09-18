
<?php
session_start();
include_once('../../../model/connect.php');
 $ID = $_GET['ID'];
$sql = "DELETE FROM `course_tb` WHERE COs_id= '".$_GET['ID']."' ";
$query = $conn->query($sql);
if($query==TRUE)
{
    header( "location: EdPrograms.php?susccess=1");
}
else
{
    header( "location: EdPrograms.php?susccess=2");
}
mysqli_close($conn);
?>

</html>
