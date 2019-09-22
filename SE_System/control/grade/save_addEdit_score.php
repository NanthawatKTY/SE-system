<?php
session_start();
include '../../model/connect.php';

$GradID = $_SESSION['GradID'];

// ตรวจเกรด ถ้าเกินให้ใช้ค่าเดิม
$sqlShowGrade = "SELECT * FROM grade_tb WHERE Grad_id=".$GradID;
$queryShowGrade = mysqli_query($conn, $sqlShowGrade);
$resultShow = mysqli_fetch_array($queryShowGrade,MYSQLI_ASSOC);
$_SESSION['GPA'] = $resultShow['GPA'];
$_SESSION['grade_font'] = $resultShow['grade_font'];

$grade = $_POST['txtGrade'];

       if(($grade>100)||($grade<0)) {    
         echo "เกรดที่ได้  : ไม่สามารถคิดเกรดได้ คะแนนเกิน".'<br>';   
         $gradeSum = $_SESSION['grade_font'];
         $grade = $_SESSION['GPA'];
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
       else {$gradeSum = "F";}     
         
// echo $gradeSum;
// echo $SubCode;
// echo $_SESSION['SubCodeED'];

// return false;


$SubCode = $_SESSION['SubCodeED'];

$GradID = $_SESSION['GradID'];

if($GradID != ""){
   // echo $_SESSION['GradID'];
  

   include '../../model/connect.php';
   $sql = "UPDATE `grade_tb` SET `GPA`='".$grade."', `grade_font`='".$gradeSum."'
   WHERE Grad_id =".$GradID;

// $sql = "UPDATE `grade_tb` SET `Grad_id`='".$_POST['txtGid']."', `Grad_Term`='".$_POST['txtGterm']."', `Std_code`='".$_POST['txtStdCode']."',
//    `Sub_code`='".$_POST['txtSubCode']."',`GPA`='".$_POST['txtGrade']."', 'grade_font'=.$gradeSum
//    WHERE Grad_id =".$GradID;


   $query = mysqli_query($conn,$sql);

  
   // echo $GradID;
   // echo $GradID;
   // return false;
   
   $GradID = '';
   // print_r($query);

if($query==TRUE){
   header("location: ../../view/grade/GradeManager.php?success=1&ID=".$_SESSION['SubCodeED']);
}
else{
   header("location: ../../view/grade/GradeManager.php?success=2&ID=".$_SESSION['SubCodeED']);   
}
}


mysqli_close($conn);
?>