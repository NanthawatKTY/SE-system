<?php
session_start();
include_once('../../model/connect.php');
$ID = $_GET['ID'];
$_SESSION['ID'] = $ID;

$grade = $_POST['txtGrade'];
   
 
       if(($grade>100)||($grade<0)) {    
         print "เกรดที่ได้  : ไม่สามารถคิดเกรดได้ คะแนนเกิน".'<br>';   
      }
      else if (($grade>=79.5)&&($grade<=100)) {    
         $gradeSum = "A";   
      }
       else if (($grade>=74.5)&&($grade<=79.4)) {    
         $gradeSum = "B+";   
      }
       else if (($grade>=69.5)&&($grade<=74.4)) {       
         $gradeSum = "B";    
      }
       else if (($grade>=64.5)&&($grade<=69.4)) {
         $gradeSum = "C+";    
      }
       else if (($grade>=59.5)&&($grade<=64.4)) {    
         $gradeSum = "C";   
      }
       else if (($grade>=54.5)&&($grade=59.4)) {            
         $gradeSum = "D+";    
      }
       else if (($grade>=49.5)&&($grade<=54.4)) {       
         $gradeSum = "D";    
      }
       else if ($grade<=49.4) {       
         $gradeSum = "F";    
      }    


if($_SESSION['GradID'] != ""){

   $sqlGradeEdit = "UPDATE `grade_tb` SET 
   `GPA`='".$_POST[txtGrade]."', 'grade_font'='".$gradeSum."' 
   WHERE Grad_id = '".$_SESSION['GradID']."'";
// UPDATE `grade_tb` SET `GPA`= "70",`grade_font`= "B"WHERE `Grad_id` = "1"

   $queryGradeEdit = $conn->query($sqlGradeEdit);

   $_SESSION['GradID'] = '';
   $ID = $_GET['ID'];
   $_SESSION['ID'] = $ID;
if($queryGradeEdit){
   header("location: ../../view/grade/GradeManager.php?success=1");
}
else{
   header("location: ../../view/grade/GradeManager.php?success=2");
}
}
else{

   $sqlAddGrade = "INSERT INTO `grade_tb`(`Grad_id`, `Grad_Term`, `Std_code`, `Sub_code`, `GPA`, `grade_font`) 
   VALUES ('','".$_POST['txtGrade']."','".$gradeSum."')";
   $queryAddGrade = mysqli_query($conn, $sqlAddGrade);



if($query)
{
    echo"Insert Success";
    echo"<META HTTP-EQUIV='Refresh' CONTENT='2;URL=../../view/grade/GradeManager.php'>";
}
else
{
    echo"Error , Insert Again";
    echo"<META HTTP-EQUIV='Refresh' CONTENT='2;URL=../../view/grade/GradeManager.php'>";
}
}
mysqli_close($conn);
?>