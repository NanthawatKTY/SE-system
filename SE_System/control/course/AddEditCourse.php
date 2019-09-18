<?php 
session_start();
include_once('../../model/connect.php');

// echo $_POST['edit'];
// echo $_POST['courseName'];

if($_POST['edit'] != ""){
    $sql= "UPDATE `coursename_tb` SET `Cos_name` = '".$_POST['courseName']."' WHERE Cos_code = '".$_POST['edit']."'";
    $query = $conn->query($sql);
    if($query){
        header( "location: ../../view/subjects/edprograms/Main.php?susccess=1");
        }
        else{
        header( "location: ../../view/subjects/edprograms/Main.php?susccess=2");
        }
}
else{

$sql =  "INSERT INTO `coursename_tb` (`Cos_code`, `Cos_name`) VALUES ('".$_POST['courseCode']."',
'".$_POST['courseName']."');";
$query = $conn->query($sql);


if($query){
header( "location: ../../view/subjects/edprograms/Main.php?susccess=1");
}
else{
header( "location: ../../view/subjects/edprograms/Main.php?susccess=2");
}

}




?>