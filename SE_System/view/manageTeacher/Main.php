<?php
session_start();
include_once('../../model/connect.php');error_reporting(0);
$sql = "SELECT * FROM teacher_tb";
$query = $conn->query($sql);

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

    <title>จัดการบุคลากร</title>

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
            <img class="circle-img mt-4"
                src="../../image/<?php echo $img;?>"
                alt="">
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
                    <a href="../manageStudent/main.php">จัดการนักศึกษา</a>
                    <a href="../manageTeacher/Main.php">จัดการบุคลากร</a>
                    <a href="../subjects/subject/subjects.php">จัดการรายวิชา</a>
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
            <h3>จัดการบุคลากร</h3>
<button class="btn btn-success btn-sm m-1"><a href="./AddEdit.php"> + เพิ่มบุคลากร</a></button> 
<input type="text" placeholder="รหัสนักศึกษา/ชื่อ - นามสกุล">
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="col">รหัสบุคลากร</th>
                        <th scope="col">ชื่อ - นามสกุล</th>
                        <th scope="col">เบอร์โทร - ติดต่อ</th>
                        <th scope="col">ที่อยู่</th>
                        <th scope="col">วันเดือนปีเกิด</th>
                        <th scope="col">รหัสประจำตัวประชาชน</th>
                        <th scope="col">สาขา</th>
                        <th scope="col">คณะ</th>
                        <th scope="col">แก้ไข</th>
                        <th scope="col">ลบ</th>
                      </tr>
                    </thead>
                    <tbody>

                        <tbody>
                            <tr>
                            <?php while($result = $query->fetch_assoc()){ ?>
                              <td><?php echo $result['Teach_code']; ?></td>
                              <td><?php echo $result['Teach_Pname'].$result['Teach_Fname']." ".$result['Teach_Lname']; ?></td>
                              <td><?php echo $result['Teach_Tel']; ?></td>     
                              <td><?php echo $result['Teach_Add']; ?></td>
                              <td><?php echo $result['Teach_Birth']; ?></td>     
                              <td><?php echo $result['Teach_Card']; ?></td>
                              <td><?php echo $result['Teach_Major']; ?></td>     
                              <td><?php echo $result['Teach_Faculty']; ?></td>
                              <td><a class="btn btn-dark btn-sm" href="./AddEdit.php?Teach_Code=<?php echo $result['Teach_code']; ?>">แก้ไข</a></td>
                              <td><a class="btn btn-danger btn-sm" href="JavaScript:if(confirm('Confirm Delete?') == true){window.location='../../control/Teacher/del_tch.php?Teach_Code=<?php echo $result["Teach_code"];?>';}">ลบ</a></td>
                            </tr>
                            <?php } ?>
                          </tbody>
                  </table>


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