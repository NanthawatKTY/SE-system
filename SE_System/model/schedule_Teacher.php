<?php

$connect = mysqli_connect("localhost", "root", "", "softengdb");
mysqli_set_charset($connect, "utf8");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "SELECT  course_tb.cos_term,course_tb.Sub_Code,subject_tb.Sub_Name,subject_tb.Sub_Credit,course_tb.Cos_Time ,course_tb.Cos_Room,teacher_tb.Teach_Fname,teacher_tb.Teach_code,sect_tb.Sect_Name  
 FROM course_tb
 INNER JOIN register_tb ON course_tb.Cos_code = register_tb.Cos_code
 INNER JOIN subject_tb ON course_tb.Sub_code = subject_tb.Sub_code
 INNER JOIN teacher_tb ON course_tb.Teach_code = teacher_tb.Teach_code
 INNER JOIN sect_tb ON course_tb.Sect_code = sect_tb.Sect_code 
  WHERE course_tb.Sub_Code LIKE '%".$search."%'
 OR course_tb.cos_term LIKE '%".$search."%' 
 OR subject_tb.Sub_Name LIKE '%".$search."%' 
 OR teacher_tb.Teach_Fname LIKE '%".$search."%' 
 OR teacher_tb.Teach_code LIKE '%".$search."%' 
 
";
}
else
{
 $query = "
 SELECT course_tb.cos_term,course_tb.Sub_Code,subject_tb.Sub_Name,subject_tb.Sub_Credit,course_tb.Cos_Time ,course_tb.Cos_Room,teacher_tb.Teach_Fname,teacher_tb.Teach_code,sect_tb.Sect_Name  
 FROM course_tb
 INNER JOIN register_tb ON course_tb.Cos_code = register_tb.Cos_code
 INNER JOIN subject_tb ON course_tb.Sub_code = subject_tb.Sub_code
 INNER JOIN teacher_tb ON course_tb.Teach_code = teacher_tb.Teach_code
 INNER JOIN sect_tb ON course_tb.Sect_code = sect_tb.Sect_code "        
  ;
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>ภาคเรียน</th>
     <th>รหัสวิชา</th>
     <th>ชื่อวิชา</th>
     <th>หน่วยกิต</th>
     <th>คาบเรียน</th>
     <th>ห้องเรียน</th>
     <th>อาจาร์ผู้สอน</th>
     <th>รหัสอาจารย์</th>
     <th>วิชา</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
   <td>'.$row["cos_term"].'</td>
    <td>'.$row["Sub_Code"].'</td>
    <td>'.$row["Sub_Name"].'</td>
    <td>'.$row["Sub_Credit"].'</td>
    <td>'.$row["Cos_Time"].'</td>
    <td>'.$row["Cos_Room"].'</td>
    <td>'.$row["Teach_Fname"].'</td>
    <td>'.$row["Teach_code"].'</td>
    <td>'.$row["Sect_Name"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>