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
$_SESSION['id']=$_POST['username'];
$_SESSION['pwd']=$_POST['password'];
if(!$result)
{
    echo "Username OR Password ไม่ถูกต้อง";
  echo "<META HTTP-EQUIV='Refresh' CONTENT ='3;URL=login.php'>";
}
else
{ if($result["Type_id"]==1)
    {
        $_SESSION['Type_id'] = 1;
       $_SESSION['Mem_user'] = $result['Mem_user'];
       header("location: main_student.php");
    }
    else if($result["Type_id"]==2)
    {
        $_SESSION['Status'] = "teacher";
        $_SESSION['Mem_user'] = $result['Mem_user'];;
        $_SESSION['id'] = $result['id'];
        header("location: main_teacher.php");
    }
    else
    {
        $_SESSION['Type_id'] = 3;
        $_SESSION['Mem_user'] = $result['Mem_user'];
        
        header("location: main_admin.php");
    }
}

mysqli_close($link);
?>