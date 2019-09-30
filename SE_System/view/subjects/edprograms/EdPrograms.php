<?php
session_start();
include_once('../../../model/connect.php');
error_reporting(0);

if($_SESSION['Type_id'] == 1){
    $name = "admin";
    $img = "admin.jpg";
    error_reporting(0);
}
else if($_SESSION['Type_id'] == 2){
    $sqlTC = "SELECT * FROM teacher_tb WHERE Teach_code = '".$_SESSION['id']."'";
    $queryTC = $conn->query($sqlTC);
    $resultTC  = $queryTC ->FETCH_ASSOC();
    $name = $resultTC['Teach_Pname']." ".$resultTC['Teach_Fname']." ".$resultTC['Teach_Lname'];
    $birth = $resultTC['Teach_Birth'];
    $card = $resultTC['Teach_Card'];
    $code = $resultTC['Teach_code'];
    $faculty = $resultTC['Teach_Faculty'];
    $major = $resultTC['Teach_Major'];
    $img = $resultTC['Teach_Image'];
}
else {
    $sqlSTD = "SELECT * FROM student_tb WHERE Std_code = '".$_SESSION['id']."'";
    $querySTD = $conn->query($sqlSTD);
    $resultSTD = $querySTD->FETCH_ASSOC();
    $name = $resultSTD['Std_Pname']." ".$resultSTD['Std_Fname']." ".$resultSTD['Std_Lname'];
    $birth = $resultSTD['Std_Birth'];
    $card = $resultSTD['Std_Card'];
    $code = $resultSTD['Std_Code'];
    $faculty = $resultSTD['Std_Faculty'];
    $major = $resultSTD['Std_Major'];
    $img = $resultSTD['Std_Image'];
}

if($_GET["ID"]){
    $_SESSION['IdEditProgram'] = $_GET["ID"];
}
else{
    $_SESSION['IdEditProgram'] = $_SESSION['IdEditProgram'];
}


$sql = "SELECT course_tb.Cos_code, coursename_tb.Cos_name, course_tb.Cos_term ,course_tb.Sub_Code ,course_tb.Teach_code, 
                course_tb.Sect_code, course_tb.Cos_Time, course_tb.Cos_Room 

FROM course_tb
INNER JOIN coursename_tb ON course_tb.Cos_code = coursename_tb.Cos_code
WHERE coursename_tb.Cos_code = '".$_SESSION['IdEditProgram']."'";
$query = $conn->query($sql);
$result = $query->FETCH_ASSOC();

$sqlEdit = "SELECT DISTINCT course_tb.Cos_id,course_tb.Cos_code,course_tb.Sub_code,subject_tb.Sub_name,
sect_tb.Sect_code,sect_tb.Sect_Name,teacher_tb.Teach_code,teacher_tb.Teach_Pname,teacher_tb.Teach_Fname,
teacher_tb.Teach_Lname,course_tb.Cos_Time,course_tb.Cos_Room,course_tb.Cos_term FROM course_tb
INNER JOIN subject_tb 
 ON course_tb.Sub_code = subject_tb.Sub_code
 INNER JOIN sect_tb 
  ON course_tb.Sect_code = sect_tb.Sect_code
 INNER JOIN teacher_tb
ON course_tb.Teach_code = teacher_tb.Teach_code 
WHERE Cos_id='".$_GET['CosId']."' ";
$queryEdit = $conn->query($sqlEdit);
$resultEdit = $queryEdit->FETCH_ASSOC();
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>แผนการเรียน</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../../../Style.css">

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
            <p class="text-center text-light mt-3">มารุตเทพ ร่มโพธิ์</p>
            <p class="text-center text-light">วิศวกรรมซอฟต์แวร์ 4 ปี</p>
            <ul class="list-unstyled components pl-2">
            <li>
                    <a href="../profile/Profile.php">ข้อมูลส่วนตัว</a>
                </li>
                <?php if($_SESSION['Type_id'] == 2){?>
                <li>
                    
                    <a href="../grade/GradeMain.php ">จัดการผลการเรียน</a>
                    
                </li>
                <?php }else if($_SESSION['Type_id'] == 3){?>
                <li>
                    <a href="../grade/gradeStudent.php ">ผลการเรียน</a>  
                </li>
                <?php }?>
                <?php if($_SESSION['Type_id'] == 2){?>
                <li>
                    <a href="../subjects/edprograms/Main.php">จัดการแผนการเรียน</a>
                </li>
                <?php }else if($_SESSION['Type_id'] == 3){?>
                    <li>
                    <a href="../subjects/edprograms/ShowPrograms.php">แผนการเรียน</a>
                </li>
                <?php }?>
                <?php if($_SESSION['Type_id'] == 2){?>
                <li>
                    <a href="../../register/Main.php">ลงทะเบียนนักศึกษา</a>
                </li>
                <?php }else if($_SESSION['Type_id'] == 3){?>
                    <li>
                    <a href="#"></a>
                </li>
                <?php }?>

                <?php if($_SESSION['Type_id'] == 2){?>
                <li>
                    <a href="../../schedule/Student_Sch1.php">ตารางสอน</a>
                </li>
                <?php }else if($_SESSION['Type_id'] == 3){?>
                <li>
                    <a href="../../schedule/Teacher_sch1.php">ตารางสอน</a>
                </li>
                <?php }?>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="../../../index.php" class="article">กลับเมนูหลัก</a>
                </li>
                <li>
                    <a href="../../../control/login/logout.php" class="download">ออกจากระบบ</a>
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
            <a class="btn btn-sm btn-secondary m-1" href="./Main.php"> < กลับหน้าเดิม</a>
            <h3>จัดการวิชาแผนการเรียน</h3> 
            <h5>แผนการเรียน : <?php echo $result['Cos_name'] ?></h5>
            <!-- if ระหว่าง admin / อจ / นศ  -->


<form action="./AddEditProgram.php" method="POST">
                <!-- เลือกวิชา  -->
                <div class="form-group">
                    <label for="subCode"
                        class="col-sm-4 col-form-label col-form-label-sm font-weight-bold">เลือกวิชา :</label>
                    <div class="col-sm-5">
                    <select name="subCode" class="form-control col-form-label col-form-label-sm" id="inputGroupSelect01" required>
<option <?php if($_GET['CosId']){ ?>
    value="<?php echo $resultEdit['Sub_code'] ?>"
<?php  } ?> selected><?php if($_GET['CosId']){ echo $resultEdit['Sub_code']." ". $resultEdit['Sub_name']." [ค่าเดิม]";
}else { echo "เลือกวิชา";}?> 
</option>

<?php  
$sqlSubject = "SELECT * FROM `subject_tb`";
$querySubject = $conn->query($sqlSubject);
while($rowSubject = $querySubject->fetch_assoc()){ ?>
<option value="<?php echo $rowSubject['Sub_code'] ?>" ><?php echo $rowSubject['Sub_code'] ." ". $rowSubject['Sub_Name']?></option>
<?php } ?>
      </select>
                    </div>
                </div>

                                     <!-- กลุ่มวิชา  -->
                                     <div class="form-group">
                    <label for="secName"
                        class="col-sm-4 col-form-label col-form-label-sm font-weight-bold">กลุ่มวิชา :</label>
                    <div class="col-sm-5">
                    <select name="secName" class="form-control col-form-label col-form-label-sm" id="inputGroupSelect01" required>
                    <option <?php if($_GET['CosId']){ ?>
    value="<?php echo $resultEdit['Sect_code'] ?>"
<?php  } ?> selected><?php if($_GET['CosId']){ echo $resultEdit['Sect_code']." ". $resultEdit['Sect_Name']." [ค่าเดิม]";
}else { echo "เลือกกลุ่มวิชา";}?> 
</option>
<?php  
$sqlSec = "SELECT * FROM `sect_tb`";
$querySec = $conn->query($sqlSec);
while($rowSec = $querySec->fetch_assoc()){ ?>
<option value="<?php echo $rowSec['Sect_code'] ?>" ><?php echo $rowSec['Sect_code'] ." ". $rowSec['Sect_Name']?></option>
<?php } ?>
      </select>
                    </div>
                </div>

                                     <!-- รหัสอาจารย์  -->
                                     <div class="form-group">
                    <label for="TeacName"
                        class="col-sm-4 col-form-label col-form-label-sm font-weight-bold">รหัสอาจารย์ผู้สอน :</label>
                    <div class="col-sm-5">
                    <select name="TeacName" class="form-control col-form-label col-form-label-sm" id="inputGroupSelect01" required>
                    <option <?php if($_GET['CosId']){ ?>
    value="<?php echo $resultEdit['Teach_code'] ?>"
<?php  } ?> selected><?php if($_GET['CosId']){ echo $resultEdit['Teach_code']." ".$resultEdit['Teach_Pname']." ".$resultEdit['Teach_Fname']." ".$resultEdit['Teach_Lname']." [ค่าเดิม]";
}else { echo "เลือกอาจารย์";}?> 
</option>
<?php  
$sqlTeacher = "SELECT * FROM `teacher_tb`";
$queryTeacher = $conn->query($sqlTeacher);
while($rowTeacher = $queryTeacher->fetch_assoc()){ ?>
<option value="<?php echo $rowTeacher['Teach_code'] ?>" ><?php echo $rowTeacher['Teach_code'] ." ". $rowTeacher['Teach_Pname']." ".
$rowTeacher['Teach_Fname'] ." ". $rowTeacher['Teach_Lname']?></option>
<?php } ?>
      </select>
                    </div>
                </div>

                                     <!-- คาบเรียน  -->
                                     <div class="form-group">
                    <label for="cosTime"
                        class="col-sm-4 col-form-label col-form-label-sm font-weight-bold">คาบเรียน :</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-sm" id="cosTime" name="cosTime" 
                        <?php if($_GET['CosId']){ ?>value="<?php echo $resultEdit['Cos_Time']?>" <?php }
                        else{ ?> <?php } ?> required>
                        <small>เช่น จ(1-4), อ(6-10)</small>
                    </div>
                </div>
                                                     <!-- ห้องเรียน  -->
                                                     <div class="form-group">
                    <label for="cosRoom"
                        class="col-sm-4 col-form-label col-form-label-sm font-weight-bold">ห้องเรียน :</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-sm" id="cosRoom" name="cosRoom" 
                        <?php if($_GET['CosId']){ ?>value="<?php echo $resultEdit['Cos_Room']?>" <?php }
                        else{ ?> <?php } ?> required>
                        
                    </div>
                </div>

                <div class="form-group">
                <select name="cosTerm" class="col-sm-3 col-form-label col-form-label-sm ml-3" id="inputGroupSelect01" required>
                <option <?php if($_GET['CosId']){ ?>
    value="<?php echo $resultEdit['Cos_term'] ?>"
<?php  } ?> selected><?php if($_GET['CosId']){ echo $resultEdit['Cos_term']." [ค่าเดิม]";
}else { echo "เลือกภาคเรียน";}?> 
</option>
        <option value="1/2560">1/2560</option>
        <option value="2/2560">2/2560</option>
        <option value="1/2561">1/2561</option>
        <option value="2/2561">2/2561</option>
        <option value="1/2562">1/2562</option>
        <option value="2/2562">2/2562</option>
        <option value="1/2563">1/2563</option>
        <option value="2/2563">2/2563</option>
      </select>
      
      <?php if($_GET['CosId']){ 
          $_SESSION['EditProgream'] = $_GET['CosId'];?>
<input class="btn btn-sm" type="submit" value="แก้ไขวิชา" name="Edit">
<a class="btn btn-danger btn-sm" href="./ref.php">ยกเลิก</a>
      <?php }else{?>
        <input class="btn btn-sm btn-success" type="submit" value="เพิ่มวิชา" name="add">
        <?php }?>
</div>     
                      
</form>

<?php if($_GET['susccess'] == 1){ ?>
    <div class="alert alert-success" role="alert">
  สำเร็จ
</div>

<?php }else if($_GET['susccess'] == 2) { ?>
    <div class="alert alert-danger" role="alert">
  มีบางอย่างผิดพลาด กรุณาตรวจสอบ
</div> <?php } ?>

<form>
 <table class="table table-bordered mt-3">
        <thead>
          <tr>
            <th scope="col">รหัสวิชา</th>
            <th scope="col">ชื่อวิชา</th>
            <th scope="col">กลุ่มวิชา</th>
            <th scope="col">อาจารย์ผู้สอน</th>
            <th scope="col">คาบเรียน</th>
            <th scope="col">ห้องเรียน</th>
            <th scope="col">แก้ไข</th>
            <th scope="col">ลบ</th>
          </tr>
        </thead>
        <tbody>
            <th colspan="9">ภาคเรียนที่ 1/2560</th>
            <?php 
            $sql_1_2560 = "SELECT DISTINCT course_tb.Cos_id,course_tb.Cos_code,course_tb.Sub_code,subject_tb.Sub_name,
            sect_tb.Sect_Name,teacher_tb.Teach_Pname,teacher_tb.Teach_Fname,
            teacher_tb.Teach_Lname,course_tb.Cos_Time,course_tb.Cos_Room FROM course_tb
            INNER JOIN subject_tb 
             ON course_tb.Sub_code = subject_tb.Sub_code
             INNER JOIN sect_tb 
              ON course_tb.Sect_code = sect_tb.Sect_code
             INNER JOIN teacher_tb
            ON course_tb.Teach_code = teacher_tb.Teach_code 
            WHERE `Cos_term`= '1/2560' AND Cos_code='".$_SESSION['IdEditProgram']."' ";
            $query_1_2560 = $conn->query($sql_1_2560);
             if($query_1_2560->num_rows == 0){ ?>
                <tr>
                <td class="text-center" colspan="9">--- ไม่พบข้อมูล ---</td> <?php } ?>
                </tr>
            <?php while($result_1_2560  = $query_1_2560->fetch_assoc())  {?>
            <tr>
            <td scope="row"><?php echo $result_1_2560['Sub_code'] ?></td>
            <td><?php echo $result_1_2560['Sub_name'] ?></td>
            <td><?php echo $result_1_2560['Sect_Name'] ?></td>
            <td><?php echo $result_1_2560['Teach_Pname']." ".$result_1_2560['Teach_Fname']." ".$result_1_2560['Teach_Lname'] ?></td>
            <td><?php echo $result_1_2560['Cos_Time'] ?></td>
            <td><?php echo $result_1_2560['Cos_Room'] ?></td>
            <td><a class="btn btn-sm btn-primary" href="?CosId=<?php echo $result_1_2560['Cos_id']?>">แก้ไข</a></td>
            <td><a class="btn btn-sm btn-danger" href="JavaScript:if(confirm('Confirm Delete?')== true){window.location='DelProgram.php?ID=<?php echo $result_1_2560['Cos_id'];?>';}">ลบ</a></td>
          </tr>
            <?php } ?>
            <tr>
            <th colspan="9">ภาคเรียนที่ 2/2560</th>
            </tr>
        <tr>
        <?php 
            $sql_2_2560 = "SELECT DISTINCT course_tb.Cos_id,course_tb.Cos_code,course_tb.Sub_code,subject_tb.Sub_name,
            sect_tb.Sect_Name,teacher_tb.Teach_Pname,teacher_tb.Teach_Fname,
            teacher_tb.Teach_Lname,course_tb.Cos_Time,course_tb.Cos_Room FROM course_tb
            INNER JOIN subject_tb 
             ON course_tb.Sub_code = subject_tb.Sub_code
             INNER JOIN sect_tb 
              ON course_tb.Sect_code = sect_tb.Sect_code
             INNER JOIN teacher_tb
            ON course_tb.Teach_code = teacher_tb.Teach_code 
            WHERE `Cos_term`= '2/2560' AND Cos_code='".$_SESSION['IdEditProgram']."' ";
            $query_2_2560 = $conn->query($sql_2_2560);
            if($query_2_2560->num_rows == 0){ ?>
                <tr>
                <td class="text-center" colspan="9">--- ไม่พบข้อมูล ---</td> <?php } 
            while($result_2_2560  = $query_2_2560->fetch_assoc())  {?>
            <tr>
            <td scope="row"><?php echo $result_2_2560['Sub_code'] ?></td>
            <td><?php echo $result_2_2560['Sub_name'] ?></td>
            <td><?php echo $result_2_2560['Sect_Name'] ?></td>
            <td><?php echo $result_2_2560['Teach_Pname']." ".$result_2_2560['Teach_Fname']." ".$result_2_2560['Teach_Lname'] ?></td>
            <td><?php echo $result_2_2560['Cos_Time'] ?></td>
            <td><?php echo $result_2_2560['Cos_Room'] ?></td>
            <td><a class="btn btn-sm btn-primary" href="?CosId=<?php echo $result_2_2560['Cos_id']?>">แก้ไข</a></td>
            <td><a class="btn btn-sm btn-danger" href="JavaScript:if(confirm('Confirm Delete?')== true){window.location='DelProgram.php?ID=<?php echo $result_2_2560['Cos_id'];?>';}">ลบ</a></td>
          </tr>
            <?php } ?>
    
    <tr>
        <th colspan="9">ภาคเรียนที่ 1/2561</th>
          <?php 
            $sql_1_2561 = "SELECT DISTINCT course_tb.Cos_id,course_tb.Cos_code,course_tb.Sub_code,subject_tb.Sub_name,
            sect_tb.Sect_Name,teacher_tb.Teach_Pname,teacher_tb.Teach_Fname,
            teacher_tb.Teach_Lname,course_tb.Cos_Time,course_tb.Cos_Room FROM course_tb
            INNER JOIN subject_tb 
             ON course_tb.Sub_code = subject_tb.Sub_code
             INNER JOIN sect_tb 
              ON course_tb.Sect_code = sect_tb.Sect_code
             INNER JOIN teacher_tb
            ON course_tb.Teach_code = teacher_tb.Teach_code 
            WHERE `Cos_term`= '1/2561' AND Cos_code='".$_SESSION['IdEditProgram']."' ";
            $query_1_2561 = $conn->query($sql_1_2561);
            if($query_1_2561->num_rows == 0){ ?>
                <tr>
                <td class="text-center" colspan="9">--- ไม่พบข้อมูล ---</td> <?php } 
            while($result_1_2561  = $query_1_2561->fetch_assoc())  {?>
            <tr>
            <td scope="row"><?php echo $result_1_2561['Sub_code'] ?></td>
            <td><?php echo $result_1_2561['Sub_name'] ?></td>
            <td><?php echo $result_1_2561['Sect_Name'] ?></td>
            <td><?php echo $result_1_2561['Teach_Pname']." ".$result_1_2561['Teach_Fname']." ".$result_1_2561['Teach_Lname'] ?></td>
            <td><?php echo $result_1_2561['Cos_Time'] ?></td>
            <td><?php echo $result_1_2561['Cos_Room'] ?></td>
            <td><a class="btn btn-sm btn-primary" href="?CosId=<?php echo $result_1_2561['Cos_id']?>">แก้ไข</a></td>
            <td><a class="btn btn-sm btn-danger" href="JavaScript:if(confirm('Confirm Delete?')== true){window.location='DelProgram.php?ID=<?php echo $result_1_2561['Cos_id'];?>';}">ลบ</a></td>
          </tr>
            <?php } ?>
    <tr>
        <th colspan="9">ภาคเรียนที่ 2/2561</th>
        <?php 
            $sql_2_2561 = "SELECT DISTINCT course_tb.Cos_id,course_tb.Cos_code,course_tb.Sub_code,subject_tb.Sub_name,
            sect_tb.Sect_Name,teacher_tb.Teach_Pname,teacher_tb.Teach_Fname,
            teacher_tb.Teach_Lname,course_tb.Cos_Time,course_tb.Cos_Room FROM course_tb
            INNER JOIN subject_tb 
             ON course_tb.Sub_code = subject_tb.Sub_code
             INNER JOIN sect_tb 
              ON course_tb.Sect_code = sect_tb.Sect_code
             INNER JOIN teacher_tb
            ON course_tb.Teach_code = teacher_tb.Teach_code 
            WHERE `Cos_term`= '2/2561' AND Cos_code='".$_SESSION['IdEditProgram']."' ";
            $query_2_2561 = $conn->query($sql_2_2561);
            if($query_2_2561->num_rows == 0){ ?>
                <tr>
                <td class="text-center" colspan="9">--- ไม่พบข้อมูล ---</td> <?php } 
            while($result_2_2561  = $query_2_2561->fetch_assoc())  {?>
            <tr>
            <td scope="row"><?php echo $result_2_2561['Sub_code'] ?></td>
            <td><?php echo $result_2_2561['Sub_name'] ?></td>
            <td><?php echo $result_2_2561['Sect_Name'] ?></td>
            <td><?php echo $result_2_2561['Teach_Pname']." ".$result_2_2561['Teach_Fname']." ".$result_2_2561['Teach_Lname'] ?></td>
            <td><?php echo $result_2_2561['Cos_Time'] ?></td>
            <td><?php echo $result_2_2561['Cos_Room'] ?></td>
            <td><a class="btn btn-sm btn-primary" href="?CosId=<?php echo $result_2_2561['Cos_id']?>">แก้ไข</a></td>
            <td><a class="btn btn-sm btn-danger" href="JavaScript:if(confirm('Confirm Delete?')== true){window.location='DelProgram.php?ID=<?php echo $result_2_2561['Cos_id'];?>';}">ลบ</a></td>
          </tr>
            <?php } ?>
    <tr>
        <th colspan="9">ภาคเรียนที่ 1/2562</th>
        <?php 
            $sql_1_2562 = "SELECT DISTINCT course_tb.Cos_id,course_tb.Cos_code,course_tb.Sub_code,subject_tb.Sub_name,
            sect_tb.Sect_Name,teacher_tb.Teach_Pname,teacher_tb.Teach_Fname,
            teacher_tb.Teach_Lname,course_tb.Cos_Time,course_tb.Cos_Room FROM course_tb
            INNER JOIN subject_tb 
             ON course_tb.Sub_code = subject_tb.Sub_code
             INNER JOIN sect_tb 
              ON course_tb.Sect_code = sect_tb.Sect_code
             INNER JOIN teacher_tb
            ON course_tb.Teach_code = teacher_tb.Teach_code 
            WHERE `Cos_term`= '1/2562' AND Cos_code='".$_SESSION['IdEditProgram']."' ";
            $query_1_2562 = $conn->query($sql_1_2562);
             
if($query_1_2562->num_rows == 0){ ?>
<tr>
<td class="text-center" colspan="9">--- ไม่พบข้อมูล ---</td> <?php } ?>
</tr>
            <?php
            while($result_1_2562  = $query_1_2562->fetch_assoc())  {?>
            <tr>
            <td scope="row"><?php echo $result_1_2562['Sub_code'] ?></td>
            <td><?php echo $result_1_2562['Sub_name'] ?></td>
            <td><?php echo $result_1_2562['Sect_Name'] ?></td>
            <td><?php echo $result_1_2562['Teach_Pname']." ".$result_1_2562['Teach_Fname']." ".$result_1_2562['Teach_Lname'] ?></td>
            <td><?php echo $result_1_2562['Cos_Time'] ?></td>
            <td><?php echo $result_1_2562['Cos_Room'] ?></td>
            <td><a class="btn btn-sm btn-primary" href="?CosId=<?php echo $result_1_2562['Cos_id']?>">แก้ไข</a></td>
            <td><a class="btn btn-sm btn-danger" href="JavaScript:if(confirm('Confirm Delete?')== true){window.location='DelProgram.php?ID=<?php echo $result_1_2562['Cos_id'];?>';}">ลบ</a></td>
          </tr>
            <?php } ?>
    <tr>
        <th colspan="9">ภาคเรียนที่ 2/2562</th>
        <?php 
            $sql_2_2562 = "SELECT DISTINCT course_tb.Cos_id,course_tb.Cos_code,course_tb.Sub_code,subject_tb.Sub_name,
            sect_tb.Sect_Name,teacher_tb.Teach_Pname,teacher_tb.Teach_Fname,
            teacher_tb.Teach_Lname,course_tb.Cos_Time,course_tb.Cos_Room FROM course_tb
            INNER JOIN subject_tb 
             ON course_tb.Sub_code = subject_tb.Sub_code
             INNER JOIN sect_tb 
              ON course_tb.Sect_code = sect_tb.Sect_code
             INNER JOIN teacher_tb
            ON course_tb.Teach_code = teacher_tb.Teach_code 
            WHERE `Cos_term`= '2/2562' AND Cos_code='".$_SESSION['IdEditProgram']."' ";
            $query_2_2562 = $conn->query($sql_2_2562);
             
if($query_2_2562->num_rows == 0){ ?>
<tr>
<td class="text-center" colspan="9">--- ไม่พบข้อมูล ---</td> <?php } ?>
</tr>
            <?php
            while($result_2_2562  = $query_2_2562->fetch_assoc())  {?>
            <tr>
            <td scope="row"><?php echo $result_2_2562['Sub_code'] ?></td>
            <td><?php echo $result_2_2562['Sub_name'] ?></td>
            <td><?php echo $result_2_2562['Sect_Name'] ?></td>
            <td><?php echo $result_2_2562['Teach_Pname']." ".$result_2_2562['Teach_Fname']." ".$result_2_2562['Teach_Lname'] ?></td>
            <td><?php echo $result_2_2562['Cos_Time'] ?></td>
            <td><?php echo $result_2_2562['Cos_Room'] ?></td>
            <td><a class="btn btn-sm btn-primary" href="?CosId=<?php echo $result_2_2562['Cos_id']?>">แก้ไข</a></td>
            <td><a class="btn btn-sm btn-danger" href="JavaScript:if(confirm('Confirm Delete?')== true){window.location='DelProgram.php?ID=<?php echo $result_2_2562['Cos_id'];?>';}">ลบ</a></td>
          </tr>
            <?php } ?>
    <tr>
        <th colspan="9">ภาคเรียนที่ 1/2563</th>
        <?php 
            $sql_1_2563 = "SELECT DISTINCT course_tb.Cos_id,course_tb.Cos_code,course_tb.Sub_code,subject_tb.Sub_name,
            sect_tb.Sect_Name,teacher_tb.Teach_Pname,teacher_tb.Teach_Fname,
            teacher_tb.Teach_Lname,course_tb.Cos_Time,course_tb.Cos_Room FROM course_tb
            INNER JOIN subject_tb 
             ON course_tb.Sub_code = subject_tb.Sub_code
             INNER JOIN sect_tb 
              ON course_tb.Sect_code = sect_tb.Sect_code
             INNER JOIN teacher_tb
            ON course_tb.Teach_code = teacher_tb.Teach_code 
            WHERE `Cos_term`= '1/2563' AND Cos_code='".$_SESSION['IdEditProgram']."' ";
            $query_1_2563 = $conn->query($sql_1_2563);
             
if($query_1_2563->num_rows == 0){ ?>
<tr>
<td class="text-center" colspan="9">--- ไม่พบข้อมูล ---</td> <?php } ?>
</tr>
            <?php
            while($result_1_2563  = $query_1_2563->fetch_assoc())  {?>
            <tr>
            <td scope="row"><?php echo $result_1_2563['Sub_code'] ?></td>
            <td><?php echo $result_1_2563['Sub_name'] ?></td>
            <td><?php echo $result_1_2563['Sect_Name'] ?></td>
            <td><?php echo $result_1_2563['Teach_Pname']." ".$result_1_2563['Teach_Fname']." ".$result_1_2563['Teach_Lname'] ?></td>
            <td><?php echo $result_1_2563['Cos_Time'] ?></td>
            <td><?php echo $result_1_2563['Cos_Room'] ?></td>
            <td><a class="btn btn-sm btn-primary" href="?CosId=<?php echo $result_1_2563['Cos_id']?>">แก้ไข</a></td>
            <td><a class="btn btn-sm btn-danger" href="JavaScript:if(confirm('Confirm Delete?')== true){window.location='DelProgram.php?ID=<?php echo $result_1_2563['Cos_id'];?>';}">ลบ</a></td>
          </tr>
            <?php } ?>

            <tr>
        <th colspan="9">ภาคเรียนที่ 2/2563</th>
        <?php 
            $sql_2_2563 = "SELECT DISTINCT course_tb.Cos_id,course_tb.Cos_code,course_tb.Sub_code,subject_tb.Sub_name,
            sect_tb.Sect_Name,teacher_tb.Teach_Pname,teacher_tb.Teach_Fname,
            teacher_tb.Teach_Lname,course_tb.Cos_Time,course_tb.Cos_Room FROM course_tb
            INNER JOIN subject_tb 
             ON course_tb.Sub_code = subject_tb.Sub_code
             INNER JOIN sect_tb 
              ON course_tb.Sect_code = sect_tb.Sect_code
             INNER JOIN teacher_tb
            ON course_tb.Teach_code = teacher_tb.Teach_code 
            WHERE `Cos_term`= '2/2563' AND Cos_code='".$_SESSION['IdEditProgram']."' ";
            $query_2_2563 = $conn->query($sql_2_2563);
             
if($query_2_2563->num_rows == 0){ ?>
<tr>
<td class="text-center" colspan="9">--- ไม่พบข้อมูล ---</td> <?php } ?>
</tr>
            <?php
            while($result_2_2563  = $query_2_2563->fetch_assoc())  {?>
            <tr>
            <td scope="row"><?php echo $result_2_2563['Sub_code'] ?></td>
            <td><?php echo $result_2_2563['Sub_name'] ?></td>
            <td><?php echo $result_2_2563['Sect_Name'] ?></td>
            <td><?php echo $result_2_2563['Teach_Pname']." ".$result_2_2563['Teach_Fname']." ".$result_2_2563['Teach_Lname'] ?></td>
            <td><?php echo $result_2_2563['Cos_Time'] ?></td>
            <td><?php echo $result_2_2563['Cos_Room'] ?></td>
            <td><a class="btn btn-sm btn-primary" href="?CosId=<?php echo $result_2_2563['Cos_id']?>">แก้ไข</a></td>
            <td><a class="btn btn-sm btn-danger" href="JavaScript:if(confirm('Confirm Delete?')== true){window.location='DelProgram.php?ID=<?php echo $result_2_2563['Cos_id'];?>';}">ลบ</a></td>
          </tr>
            <?php } ?>

        </tbody>
      </table>
      </form>


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

        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
</body>

</html>