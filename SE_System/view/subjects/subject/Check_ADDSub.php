<html>
<body>
<center>
<img src="http://www.innesvienna.net/Theme/img/success.png">
<font size="10" color="blue">
<br>

<?php

include '../../../model/condb.php'; 
$ID = $_POST['MID'];
$sql = "INSERT INTO `subject_tb`(`Sub_id`, `Sub_code`, `Sub_Name`, `Sub_Credit`) VALUES 
('".$_POST["txtName"]."','".$_POST["txtcode"]."','".$_POST["comment"]."','".$_POST["txtcredit"]."')";
$query = mysqli_query($conn, $sql);
//echo $sql ;

if($query==TRUE)
{
    echo"Add Subjects Complete";
    echo"<META HTTP-EQUIV ='Refresh' CONTENT = '2;URL= subjects.php'>";
}
else
{
    echo "Error Can't Add Subjects member";
    echo "<META HTTP-EQUIV='Refresh'CONTENT = '2;URL=subjects.php'>";
}
mysqli_close($conn);
?>

</center>
</body>
</html>
