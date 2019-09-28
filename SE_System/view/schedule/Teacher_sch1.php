<?php  
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>ข้อมูลส่วนตัวนักศึกษา</title>
 
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../../Style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>
</head>

<body class="setfont">
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>ระบบจัดการ</h3>
            </div>
            <img class=" circle-img mt-4"
                src="https://scontent.fbkk13-1.fna.fbcdn.net/v/t1.0-9/62071969_10216624784104470_275687937776025600_n.jpg?_nc_cat=108&_nc_eui2=AeFlWjrNsKSDZAOkhDiO8Sh9gK_6MxCkO4I7Q7q-kDWjlvHgaQxXXnd_Kdgzvpf12-V57NUXyBmP9tQiXiQDK7h_oUO2uTgBIMIajS4DEgl9rw&_nc_oc=AQnPsBYrLEFJd65Nx-49Wa0az84w5sFxnLpeeeT6v3CGiW6Ct0XMM4l0zk2c3dPGwd8&_nc_ht=scontent.fbkk13-1.fna&oh=4de81c57afef203ee9addf36f5353172&oe=5E0D477F"
                alt="">
            <p class="text-center text-light mt-3 setfont">มารุตเทพ ร่มโพธิ์</p>
            <p class="text-center text-light setfont">วิศวกรรมซอฟต์แวร์ 4 ปี</p>
            <ul class="list-unstyled components pl-2">
                <li>
                    <a href="/SE_System/view/profile/EditProfile.html">ข้อมูลส่วนตัว</a>
                </li>
                <li>
                    <a href="../grade/GradeMain.php">ผลการเรียน</a>
                </li>
                <li>
                    <a href="/SE_System/Edittranscript2.php">แผนการเรียน</a>
                </li>
                <li>
                    <a href="/Manager/subjects.html">สถานะการลงทะเบียน</a>
                </li>
                <li>
                    <a href="/SE_System/view/schedule/editSchedule.html">ตารางสอน</a>
                </li>
            </ul>
            
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="../../index.html" class="article">กลับเมนูหลัก</a>
                </li>
                <li>
                    <a href="../../control/login/logout.php" class="download">ออกจากระบบ</a>
                </li>

            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>เมนูหลัก</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>
            <h3>ตรางเรียน</h3>
           <body>
           <?php
$db = mysqli_connect("localhost", "root", "", "softengdb");
$db->set_charset('utf8');
//$student = 'YourStudent';
///////////////////////////////////////////////////////////////////////////////////////////
//   day config
$day_config = array(
	'Mon'=>array('', 'จันทร์', 1 ),
	'Tue'=>array('', 'อังคาร', 2 ),
	'Wed'=>array('', 'พุธ', 3 ),
	'Thu'=>array('', 'พฤหัสบดี', 4 ),
	'Fri'=>array('', 'ศุกร์', 5 ),
	'Sat'=>array('', 'เสาร์', 6 ),
	'Sun'=>array('', 'อาทิตย์', 7 ),
);
$day_week=array( '', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri','Sat', 'Sun' );
$sql = "SELECT SUBSTRING(Cos_Time,-4,1 ) st,SUBSTRING(Cos_Time,-2,1 ) sp,SUBSTRING(Cos_Time,-8, 3) en 
,course_tb.cos_term,course_tb.Sub_Code,subject_tb.Sub_Name,subject_tb.Sub_Credit,course_tb.Cos_Time ,course_tb.Cos_Room,teacher_tb.Teach_Fname,teacher_tb.Teach_code,sect_tb.Sect_Name 
from course_tb
INNER JOIN register_tb ON course_tb.Cos_code = register_tb.Cos_code
INNER JOIN subject_tb ON course_tb.Sub_code = subject_tb.Sub_code
INNER JOIN teacher_tb ON course_tb.Teach_code = teacher_tb.Teach_code
INNER JOIN sect_tb ON course_tb.Sect_code = sect_tb.Sect_code   
INNER JOIN student_tb ON register_tb.Std_code = student_tb.Std_Code
INNER JOIN day_tb ON SUBSTRING(Cos_Time,-8, 3)= day_tb.day
WHERE teacher_tb.Teach_code = '".$_SESSION['id']."' AND  course_tb.Cos_term = '1/2560' ORDER BY day_tb.Day_Num ASC " ;
////////////////////////////////////////////////////////////////////////////////////////*/
//  ส่วนการสร้าง tr

$cur_day=0; $cur_hour=''; $tr='';
$rs=$db->query($sql) or die ( $sql . "<br>" . $db->error );
while( $ro = $rs->fetch_assoc()){
	$d=$ro['en']; $w = $day_config[$d][2]; $st = intval($ro['st']); $sp=intval($ro['sp']);
	if($w!=$cur_day){ // ตรวจสอบว่า เป็นวันใหม่ หรือไม่
		if($tr) // ถ้า tr มีความยาว แสดงว่าได้ถูกใส่ <TR> เปิดไว้ก่อนแล้ว ให้ ใส่ </TR>
			$tr .= ($cur_hour < 13 ? '<td colspan='.(13 - $cur_hour)." >&nbsp;</td>" : '') . '</tr>';
		$cur_day++;  //  วันที่เก่า +1
		for($cur_day; $cur_day<$w; $cur_day++){ 
			// ตรวจสอบวันที่เก่า กับวันที่ ใหม่ มี gab ช่่องว่างวันที่ ไม่มีชั่วโมงเรียนหรือไม่ 
			// โดยวนลูป วันที่เก่า ถึง วันที่ใหม่ แล้วแสดง บันทัดของวันที่ว่างนั้น
			$tr.='<tr height=55 >'.
						'<td align=center bgcolor="' . $day_config[$day_week[$cur_day]][0].'" >'.$day_config[$day_week[$cur_day]][1].'</td>'.
						'<td colspan=13>&nbsp;</td></tr>';
		}
		$cur_hour = 1; // เปลี่ยน ชั่วโมง เริ่มต้น
		$tr .= '<tr height=55 ><td align=center bgcolor="'.$day_config[$d][0].'" >'.$day_config[$d][1].'</td>'; 
	}
	if($cur_hour<$st) // ตรวจสอบ gab ชั่วโมงเริ่มต้น กับชั่วโมงปัจจุบันเพื่อนสร้าง td ชั่วโมงที่ว่าง
		$tr.='<td align=center colspan='.($st - $cur_hour)." >&nbsp;</td>"; 
	$cur_hour=$sp; // เปลี่ยน ชั่วโมง เริ่มต้น เป็น เวลาสิ้นสุดการเรียน
	//  แสดงเวลาเรียน
	$tr .= '<td align=center '.( ($h = $sp - $st)>1 ? "colspan=$h" : '' ).' >'.$ro['Sub_Name'] . '<br>' . $ro['Cos_Room'] .'</td>';
}
if( $cur_hour<13) // ตรวจสอบ ชั่งโมงเรียนสุดท้าย น้อยกว่าเวลาปิดการสอน  21 น. หรือไม่ แล้วแสดง td ช่วงเวลาที่หายไป
	$tr.= '<td colspan='.(13 - $cur_hour)." >&nbsp;</td>";
$tr .= '</tr>'; // ปิด TR 
$cur_day++;
for($cur_day; $cur_day<8; $cur_day++){
	//ตรวจวัน ที่หายไป จาก วันที่เรียนวันสุดท้าย แล้วแสดง tr วันที่หายไป
	$tr.='<tr height=55 ><td align=center bgcolor="' . $day_config[$day_week[$cur_day]][0].'" >'.$day_config[$day_week[$cur_day]][1].'</td>'.
					'<td colspan=13>&nbsp;</td></tr>';
}
///////////////////////////////////////////////////////////////////////////////l
// ส่วน แสดงตารางเรียน
?>
<table border=1>
<tr>
	<th width=80 align=center>วัน \ เวลา</th>
	<th width=80 align=center>คาบ1<br>09:00 - 10:00</th>
	<th width=80 align=center>คาบ2<br>10:00 - 11:00</th>
	<th width=80 align=center>คาบ3<br>11:00 - 12:00</th>
	<th width=80 align=center>คาบ4<br>12:00 - 13:00</th>
	<th width=80 align=center>คาบ5<br>13:00 - 14:00</th>
	<th width=80 align=center>คาบ6<br>14:00 - 15:00</th>
	<th width=80 align=center>คาบ7<br>15:00 - 16:00</th>
	<th width=80 align=center>คาบ8<br>16:00 - 17:00</th>
	<th width=80 align=center>คาบ9<br>17:00 - 18:00</th>
	<th width=80 align=center>คาบ10<br>18:00 - 19:00</th>
	<th width=80 align=center>คาบ11<br>19:00 - 20:00</th>
	<th width=80 align=center>คาบ12<br>20:00 - 21:00</th>
</tr>
<?=$tr?>
</table>
<br>
<?php

$connect = mysqli_connect("localhost", "root", "", "softengdb");
mysqli_set_charset($connect, "utf8");
$output = '';
 $query = "
 SELECT SUBSTRING(Cos_Time,-4,1 ) st,SUBSTRING(Cos_Time,-2,1 ) sp,SUBSTRING(Cos_Time,-8, 3) en 
,course_tb.cos_term,course_tb.Sub_Code,subject_tb.Sub_Name,subject_tb.Sub_Credit,course_tb.Cos_Time ,course_tb.Cos_Room,teacher_tb.Teach_Fname,teacher_tb.Teach_code,sect_tb.Sect_Name 
from course_tb
INNER JOIN register_tb ON course_tb.Cos_code = register_tb.Cos_code
INNER JOIN subject_tb ON course_tb.Sub_code = subject_tb.Sub_code
INNER JOIN teacher_tb ON course_tb.Teach_code = teacher_tb.Teach_code
INNER JOIN sect_tb ON course_tb.Sect_code = sect_tb.Sect_code   
INNER JOIN student_tb ON register_tb.Std_code = student_tb.Std_Code
INNER JOIN day_tb ON SUBSTRING(Cos_Time,-8, 3)= day_tb.day
WHERE teacher_tb.Teach_code = '".$_SESSION['id']."' AND  course_tb.Cos_term = '1/2560' ORDER BY day_tb.Day_Num ASC "        
  ;

$result = mysqli_query($connect, $query);
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


?>
        </div>

        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
        


</body>

</html>
