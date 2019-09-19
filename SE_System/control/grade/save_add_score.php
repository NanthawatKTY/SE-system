<?php
session_start();
include '../../model/connect.php';

$grade = $_POST['txtGrade'];
   
 
       if(($grade>100)||($grade<0)) {    
         print "เกรดที่ได้  : ไม่สามารถคิดเกรดได้ คะแนนเกิน".'<br>';   
      }
      else if (($grade>=79.5)&&($grade<=100)) {    
         print "เกรดที่ได้  : A".'<br>';   
      }
       else if (($grade>=74.5)&&($grade<=79.4)) {    
         print "เกรดที่ได้  : B+".'<br>';   
      }
       else if (($grade>=69.5)&&($grade<=74.4)) {       
         print "เกรดที่ได้  : B".'<br>';   
      }
       else if (($grade>=64.5)&&($grade<=69.4)) {
            print "เกรดที่ได้  : C+".'<br>';   
      }
       else if (($grade>=59.5)&&($grade<=64.4)) {    
         print "เกรดที่ได้  : C".'<br>';   
      }
       else if (($grade>=54.5)&&($grade=59.4)) {            
         print "เกรดที่ได้  : D+".'<br>';   
      }
       else if (($grade>=49.5)&&($grade<=54.4)) {       
         print "เกรดที่ได้  : D".'<br>';   
      }
       else if ($grade<=49.4) {       
         print "เกรดที่ได้  : E หรือ F".'<br>';   
      }    

    $sql = "INSERT INTO grade_tb(Grad_Term, Std_code, Sub_code, GPA, grade_font)
            VALUES('".$_POST['txtcode']."','".$_POST['txtPname']."','".$_POST['txtFname']."','".$_POST['txtGrade']."','".$_POST['txttel']."')";

$query = mysqli_query($link, $sql);
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