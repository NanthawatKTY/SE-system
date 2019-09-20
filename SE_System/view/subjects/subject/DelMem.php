<html>
<body>
<center>
<img src="http://www.innesvienna.net/Theme/img/success.png">
<font size="100" color="red">
<br>

<?php
 include '../../../model/condb.php' ; $ID = $_GET['ID'];
$sql = "DELETE FROM subject_tb WHERE Sub_id=".$ID;
$query = mysqli_query($conn, $sql);
if($query==TRUE)
{
    echo"Delete Complete";
    echo"<META HTTP-EQUIV ='Refresh' CONTENT = '2;URL=subjects.php'>";
}
else
{
    echo "Error , can't Delete member";
      echo "<META HTTP-EQUIV='Refresh'CONTENT = '2;URL=subjects.php'>";
}
mysqli_close($conn);
?>

</center
</body>
</html>
