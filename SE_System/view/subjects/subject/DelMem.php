<html>
<body>
<center>
<img src="http://www.innesvienna.net/Theme/img/success.png">
<font size="100" color="red">
<br>

<?php
 include 'subjects.php'; $ID = $_GET['ID'];
$sql = "DELETE FROM subject_tb WHERE ID=".$ID;
$query = mysqli_query($link, $sql);
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
mysqli_close($link);
?>

</center
</body>
</html>
