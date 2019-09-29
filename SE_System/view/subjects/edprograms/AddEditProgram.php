<?php 
session_start();
include_once('../../../model/connect.php');

if($_POST['secName'] == 'เอกบังคับ'){
    $secCode = '01';
}
else if($_POST['secName'] == 'วิชาเลือก'){
    $secCode = '02';
}
else{
    $secCode = '03';
}


$sqlCosName = "SELECT DISTINCT `Cos_name` FROM `coursename_tb` WHERE `Cos_code` = '".$_SESSION['IdEditProgram']."'";
$queryCosName = $conn->query($sqlCosName);
$resultCosName = $queryCosName->FETCH_ASSOC();

if($_SESSION['EditProgream'] != ""){

    $sqlEdit = "UPDATE `course_tb` SET 
    `Cos_term`='".$_POST['cosTerm']."',`Sub_Code`='".$_POST['subCode']."',
    `Teach_code`='".$_POST['TeacName']."',`Sect_code`='".$_POST['secName']."',`Cos_Time`='".$_POST['cosTime']."',
    `Cos_Room`='".$_POST['cosRoom']."' WHERE Cos_id = '".$_SESSION['EditProgream']."'";
$queryEdit = $conn->query($sqlEdit);
$_SESSION['EditProgream'] = '';
if($queryEdit){
    header( "location: EdPrograms.php?susccess=1");
}
else{
    header( "location: EdPrograms.php?susccess=2");
}
}
else{

$sql = "INSERT INTO `course_tb` (`Cos_id`, `Cos_code`, `Cos_term`, `Sub_Code`, `Teach_code`, `Sect_code`, `Cos_Time`, `Cos_Room`) 
VALUES (NULL, '".$_SESSION['IdEditProgram']."', '".$_POST['cosTerm']."', '".$_POST['subCode']."', '".$_POST['TeacName']."',
'".$_POST['secName']."', '".$_POST['cosTime']."', '".$_POST['cosRoom']."');";
$query = $conn->query($sql);
// $result = $query->fetch_assoc();


if($query){
    header( "location: EdPrograms.php?susccess=1");
}
else{
    header( "location: EdPrograms.php?susccess=2");
}

}


?>