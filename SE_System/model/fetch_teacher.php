 <?php

$connect = mysqli_connect("localhost", "root", "", "softengdb");
mysqli_set_charset($connect, "utf8");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM teacher_tb 
  WHERE Teach_code LIKE '%".$search."%'
  OR Teach_Pname LIKE '%".$search."%' 
  OR Teach_Fname LIKE '%".$search."%' 
  OR Teach_Lname LIKE '%".$search."%' 
  ";
}
else
{
 $query = "
  SELECT * FROM Teacher_tb ORDER BY Teach_Fname 
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>รหัสตำแหน่ง</th>
     <th>ชื่อ</th>
     <th>นามสกุล</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["Teach_code"].'</td>
    <td>'.$row["Teach_Fname"].'</td>
    <td>'.$row["Teach_Lname"].'</td>
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