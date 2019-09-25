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
,course_tb.cos_term,student_tb.Std_Code,course_tb.Sub_Code,subject_tb.Sub_Name,subject_tb.Sub_Credit,course_tb.Cos_Time ,course_tb.Cos_Room,teacher_tb.Teach_Fname,sect_tb.Sect_Name
from course_tb
INNER JOIN register_tb ON course_tb.Cos_code = register_tb.Cos_code
INNER JOIN subject_tb ON course_tb.Sub_code = subject_tb.Sub_code
INNER JOIN teacher_tb ON course_tb.Teach_code = teacher_tb.Teach_code
INNER JOIN sect_tb ON course_tb.Sect_code = sect_tb.Sect_code
INNER JOIN student_tb ON register_tb.Std_code = student_tb.Std_Code
WHERE student_tb.Std_Code = '60122660134' AND  course_tb.Cos_term = '1/2560' ORDER BY `course_tb`.`Cos_Time` ASC " ;
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
	<th width=80 align=center>09:00 - 10:00</th>
	<th width=80 align=center>10:00 - 11:00</th>
	<th width=80 align=center>11:00 - 12:00</th>
	<th width=80 align=center>12:00 - 13:00</th>
	<th width=80 align=center>13:00 - 14:00</th>
	<th width=80 align=center>14:00 - 15:00</th>
	<th width=80 align=center>15:00 - 16:00</th>
	<th width=80 align=center>16:00 - 17:00</th>
	<th width=80 align=center>17:00 - 18:00</th>
	<th width=80 align=center>18:00 - 19:00</th>
	<th width=80 align=center>19:00 - 20:00</th>
	<th width=80 align=center>20:00 - 21:00</th>
</tr>
<?=$tr?>
</table>