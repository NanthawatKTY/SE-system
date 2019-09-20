<?php
session_start();
require_once('../../model/connect.php');
error_reporting(0);




for($i=2;$i<=$_POST['hdnCount'];$i++){
    $stdCode = "Chk".$i;
    
    $sqlCheck = "SELECT * FROM `register_tb` WHERE Std_code = '".$_POST[$stdCode]."'";
    $queryCheck = $conn->query($sqlCheck);
    if($queryCheck->num_rows >0){
        //ถ้ามีค่าให้แก้ไข
        
        $sqlNull = "UPDATE `register_tb` SET `Cos_code`= '".$_POST['CosCode']."' 
                    WHERE Std_code = '".$_POST[$stdCode]."'";
        $queryNull = $conn->query($sqlNull);

        if($queryNull){
            header( "location: ../../view/register/Main.php?susccess=1");
        }
        else{
            header( "location: ../../view/register/Main.php?susccess=2");
        }

    }
    else {
        // ถ้าไม่มีให้เพิ่ม
        $sqlInSert = "INSERT INTO `register_tb`(`Std_code`, `Cos_code`) 
        VALUES ('".$_POST[$stdCode]."','".$_POST['CosCode']."')";
        $queryInSert = $conn->query($sqlInSert);

        if($queryInSert){
            header( "location: ../../view/register/Main.php?susccess=1");
        }
        else{
            header( "location: ../../view/register/Main.php?susccess=2");
        }
    }


  

 
}





?>