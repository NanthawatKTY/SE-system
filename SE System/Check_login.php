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
$sql = "SELECT * FROM member_tb WHERE Mem_user ='".$_POST['username']."' AND Mem_pass ='".$_POST['password']."'";
$query = mysqli_query($link, $sql);
$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
if(!$result)
{
    echo "Username OR Password ไม่ถูกต้อง";
    echo "<META HTTP-EQUIV='Refresh' CONTENT ='3;URL=login.php'>";
}
else
{ if($result["Type_id"]==1)
    {
        $_SESSION['Type_id'] = 1;
       // $_SESSION['username'] = $result['username'];
        header("location: main.html");
    }
    else if($result["Type_id"]==2)
    {
        $_SESSION['Status'] = "teacher";
        $_SESSION['Mname'] = $result['Mname'];
        $_SESSION['id'] = $result['id'];
        header("location: main.html");
    }
    else
    {
        $_SESSION['Type_id'] = 3;
        $_SESSION['Mname'] = $result['Mname'];
        header("location: main.html");
    }
}

mysqli_close($link);
?>