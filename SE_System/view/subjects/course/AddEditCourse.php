<?php
session_start();
include_once('../../../model/connect.php');
error_reporting(0);
$sql =  "SELECT * FROM `coursename_tb` WHERE Cos_code = '".$_GET['CosCode']."'";
$query = $conn->query($sql);
$result = $query->FETCH_ASSOC();

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
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>เพิ่ม/แก้ไข แผนการเรียน</title>

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
 
                <p class="text-center text-light mt-3 setfont"><?php echo $name; ?> </p>
            <p class="text-center text-light setfont"><?php echo $major; ?></p>
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
                    <a href="../register/Main.php">ลงทะเบียนนักศึกษา</a>
                </li>
                <?php }else if($_SESSION['Type_id'] == 3){?>
                    <li>
                    <a href="#"></a>
                </li>
                <?php }?>

                <?php if($_SESSION['Type_id'] == 2){?>
                <li>
                    <a href="../schedule/Teacher_sch1.php">ตารางสอน</a>
                </li>
                <?php }else if($_SESSION['Type_id'] == 3){?>
                <li>
                    <a href="../schedule/Student_Sch1.php">ตารางเรียน</a>
                </li>
                <?php }?>
                <?php if ($_SESSION['Type_id'] == 1){?>
                <li>
                    <a href="../manageStudent/main.php">เพิ่มนักศึกษา</a>
                    <a href="../manageTeacher/Main.php">เพิ่มอาจารย์</a>
                </li>
                <?php } ?>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="../../index.php" class="article">กลับเมนูหลัก</a>
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
            <a class="btn btn-sm btn-secondary m-1" href="../edprograms/Main.php"> < กลับหน้าเดิม</a>
<h3><?php if($_GET['CosCode']) { ?> แผนการเรียน[แก้ไข] <?php } else{ ?> แผนการเรียน[เพิ่ม] <?php } ?></h3>
            <hr>
            <form action="../../../control/course/AddEditCourse.php" method="POST">
                <!-- รหัสแผนการเรียน  -->
                <div class="form-group row">
                    <label for="courseCode"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">รหัสแผนการเรียน
                        :</label>
                    <div class="col-sm-5">
                        <input type="name" class="form-control form-control-sm" name="courseCode" id="courseCode" 
                        <?php if($_GET['CosCode']) { ?> disabled <?php } else{  } ?> 
                        <?php if($_GET['CosCode']){ ?> value="<?php echo $result['Cos_code'] ?>" <?php }else{} ?> >
                    </div>
                </div>
                <!-- ชื่อแผนการเรียน  -->
                <div class="form-group row">
                    <label for="courseName"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">ชื่อแผนการเรียน : </label>
                    <div class="col-sm-5">
                        <input type="bbb" class="form-control form-control-sm" name="courseName" id="courseName" required
                        <?php if($_GET['CosCode']){ ?> value="<?php echo $result['Cos_name'] ?>" <?php }else{} ?> >
                    </div>
                </div>

                <div class="row">
                        <button name="<?php if($_GET['CosCode']) {echo "edit";} else{ echo "add";} ?>" <?php if($_GET['CosCode']) { ?> value="<?php echo $_GET['CosCode']; ?>" <?php } else{ ?> value="add" <?php } ?>  type="submit" class="btn btn-sm btn-primary mx-auto col-2">
                            <?php if($_GET['CosCode']) { ?> แก้ไข <?php } else{ ?> บันทึก <?php } ?></button>
                    </div>
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