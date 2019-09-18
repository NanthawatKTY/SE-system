<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "softengdb");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM student_tb 
  WHERE Std_Code LIKE '%".$search."%'
  OR Std_Fname LIKE '%".$search."%' 
  OR Std_Lname LIKE '%".$search."%' 
  
 ";
}
else
{
 $query = "
  SELECT * FROM student_tb ORDER BY Std_Lname 
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>รหัสนักศึกษา</th>
     <th>ชื่อ</th>
     <th>นามสกุล</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["Std_Code"].'</td>
    <td>'.$row["Std_Fname"].'</td>
    <td>'.$row["Std_Lname"].'</td>
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