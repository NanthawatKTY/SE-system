<?php
session_start();
include_once('../../../model/connect.php');
error_reporting(0);
$sql = "SELECT DISTINCT Cos_code, Cos_name FROM coursename_tb";
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

    <title>จัดการแผนการเรียน</title>

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
            <!-- <img class=" circle-img mt-4"
                src="https://scontent.fbkk13-1.fna.fbcdn.net/v/t1.0-9/62071969_10216624784104470_275687937776025600_n.jpg?_nc_cat=108&_nc_eui2=AeFlWjrNsKSDZAOkhDiO8Sh9gK_6MxCkO4I7Q7q-kDWjlvHgaQxXXnd_Kdgzvpf12-V57NUXyBmP9tQiXiQDK7h_oUO2uTgBIMIajS4DEgl9rw&_nc_oc=AQnPsBYrLEFJd65Nx-49Wa0az84w5sFxnLpeeeT6v3CGiW6Ct0XMM4l0zk2c3dPGwd8&_nc_ht=scontent.fbkk13-1.fna&oh=4de81c57afef203ee9addf36f5353172&oe=5E0D477F"
                alt=""> -->
            <p class="text-center text-light mt-3"><?php echo $name ?></p>
            <p class="text-center text-light"><?php echo $major ?></p>
            <ul class="list-unstyled components pl-2">
            <li>
                    <a href="../profile/Profile.php">ข้อมูลส่วนตัว</a>
                </li>
                <?php if($_SESSION['Type_id'] == 2){?>
                <li>
                    
                    <a href="../../grade/GradeMain.php">จัดการผลการเรียน</a>
                    
                </li>
                <?php }else if($_SESSION['Type_id'] == 3){?>
                <li>
                    <a href="../grade/gradeStudent.php ">ผลการเรียน</a>  
                </li>
                <?php }?>
                <?php if($_SESSION['Type_id'] == 2){?>
                <li>
                    <a href="">จัดการแผนการเรียน</a>
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
            <h3>จัดการแผนการเรียน</h3>
<a href="../course/AddEditCourse.php" class="btn btn-success btn-sm m-1">+ แผนการเรียน</a> 

<?php if($_GET['susccess'] == 1){ ?>
    <div class="alert alert-success" role="alert">
  สำเร็จ
</div>

<?php }else if($_GET['susccess'] == 2) { ?>
    <div class="alert alert-danger" role="alert">
  มีบางอย่างผิดพลาด กรุณาตรวจสอบ
</div> <?php } ?>

            <table class="table table-bordered mt-3">
                    <thead>
                      <tr>
                        <th scope="col">รหัส</th>
                        <th scope="col">แผนการเรียน</th>
                        <th scope="col">จัดการ</th>
                        <th scope="col">แก้ไข</th>
                        <th scope="col">ลบ</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php while($result = $query->fetch_assoc())  {?>
                        <tr>
                        <td scope="row"><?php echo ($result['Cos_code']); ?></td>
                        <td><?php echo ($result['Cos_name']); ?></td>
                        <td><a class="btn btn-sm btn-outline-primary" href="./EdPrograms.php?ID=<?php echo $result['Cos_code'];?>">จัดการ</a></td>
                        <td><a class="btn btn-sm btn-primary" href="../course/AddEditCourse.php?CosCode=<?php echo $result['Cos_code']?>">แก้ไข</a></td>
                        <td><a class="btn btn-sm btn-danger" href="JavaScript:if(confirm('Confirm Delete?')== true){window.location='../../../control/course/DelCourse.php?ID=<?php echo $result['Cos_code'];?>';}">ลบ</a></td>
                      </tr>
                      <?php };?>
                      
                      
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