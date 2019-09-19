<?php
    $connect = mysqli_connect("localhost", "root", "", "softengdb");
    mysqli_set_charset($connect, "utf8");
    $output ='';
if(isset($_POST["query"]))
{
    $Search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "
    SELECT * FROM subject_tb
    WHERE Sub_code LIKE '%".$Search."%'
    OR Sub_Name LIKE '%".$Search."%' 
    OR Sub_Credit LIKE '%".$Search."%'
    ";
  }
  else
  {
   $query = "
   SELECT * FROM subject_tb ORDER BY Sub_Name
   ";
  }
  $result = mysqli_query($connect, $query);
  if(mysqli_num_rows($result) > 0)
  {
   $output .= '
    <div class="table-responsive">
     <table class="table table bordered">
      <tr>
       <th>รหัสรายวิชา</th>
       <th>ชื่อวิชา</th>
       <th>หน่วยกิต</th>
      </tr>
   ';
   while($row = mysqli_fetch_array($result))
   {
    $output .= '
     <tr>
      <td>'.$row["Sub_code"].'</td>
      <td>'.$row["Sub_Name"].'</td>
      <td>'.$row["Sub_Credit"].'</td>
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