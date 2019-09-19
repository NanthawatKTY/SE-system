<?php
session_start();
$host = "localhost";
$uname = "root";
$passwd = "";
$db = "softengdb";
$link = mysqli_connect($host,$uname,$passwd,$db);
    mysqli_set_charset($link, "utf8");
    if(!$link){
        echo"Error: Unable to coonect to MySQL.".PHP.EOL;
    echo"Debugging error " .mysqli_coonect() . PHP_EQL;
    echo"Debugging error " .mysqli_coonect() . PHP_EQL;
    exit;
    }
$sql = "SELECT * FROM member_tb WHERE Mem_user ='".$_POST['Mem_pass']."' AND Email ='".$_POST['Email']."'";
$query = mysqli_query($link, $sql);
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
$_SESSION['password'] = $result['Mem_pass'];
if(!$result)
{
    echo "Username OR Password ไม่ถูกต้อง";
    echo "<META HTTP-EQUIV='Refresh' CONTENT ='3;URL=../../index.html'>";
}
else
{ 
    ;
echo '<script type="text/javascript">

          window.onload = function () { alert("รหัสผ่านของคุณคือ  '.$_SESSION['password'].'"); 
        }
    
</script>';

echo "<META HTTP-EQUIV='Refresh' CONTENT ='1;URL=../../index.html'>";
}

mysqli_close($link);
?>