<?php
session_start();
include '../../model/connect.php';

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

    $sql = "INSERT INTO grade_tb(Grad_Term, Std_code, Sub_code, GPA, grade_font)
            VALUES('".$_POST['txtcode']."','".$_POST['txtPname']."','".$_POST['txtFname']."','".$_POST['txtGrade']."','".$gradeSum."')";

$sql = "INSERT INTO `grade_tb`(`Grad_id`, `Grad_Term`, `Std_code`, `Sub_code`, `GPA`, `grade_font`) 
VALUES ('',['Grad_Term'],['Std_code'],['Sub_code'],'".$_POST['txtGrade']."','".$gradeSum."')";
$query = mysqli_query($conn, $sql);
if($query)
{
    echo"Insert Success";
    echo"<META HTTP-EQUIV='Refresh' CONTENT='2;URL=admin.php'>";
}
else
{
    echo"Error , Insert Again";
    echo"<META HTTP-EQUIV='Refresh' CONTENT='2;URL=admin.php'>";
}
mysqli_close($link);
?>