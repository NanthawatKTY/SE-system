<html>
<body>
<center>
<img src="http://www.innesvienna.net/Theme/img/success.png">
<font size="10" color="blue">
<br>

<?php

 include '../../../model/condb.php'; 
 $ID = $_POST['MID'];
 $sql = "UPDATE subject_tb SET Sub_id ='".$_POST['txtName']."',Sub_code = '".$_POST['txtcode']."',Sub_Name = '".$_POST['comment']."',Sub_Credit = '".$_POST['txtcredit']."' WHERE Sub_id =".$ID;
$query = mysqli_query($conn, $sql);
echo $sql ;
if($query==TRUE)
{
    echo"UPdate Complete";
   echo"<META HTTP-EQUIV ='Refresh' CONTENT = '2;URL= subjects.php'>";
}
else
{
    echo "Error , can't Update member";
     echo "<META HTTP-EQUIV='Refresh'CONTENT = '2;URL=subjects.php'>";
}
mysqli_close($conn);
?>

</center>
</body>
</html>
