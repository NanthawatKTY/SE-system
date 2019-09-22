<?php
session_start();
include_once('../../model/connect.php');

// $_SESSION['ID'];
// $_GET['ID'] = $_SESSION['ID'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>แก้ไขผลการเรียน</title>

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
            <p class="text-center text-light mt-3">มารุตเทพ ร่มโพธิ์</p>
            <p class="text-center text-light">วิศวกรรมซอฟต์แวร์ 4 ปี</p>
            <ul class="list-unstyled components pl-2">
                <li>
                    <a href="/SE_System/view/profile/EditProfile.html">ข้อมูลส่วนตัว</a>
                </li>
                <li>
                    <a href="/SE_System/view/grade/gradeStudent.html">ผลการเรียน</a>
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
                    <a href="/SE_System/index.html" class="article">กลับเมนูหลัก</a>
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
            <h3>แก้ไขผลการเรียน</h3>

           <?php 
           
            $SubCodeED = $_GET['SubCodeED'];
            $_SESSION['SubCodeED'] = $SubCodeED;

            

            $sqlED = "SELECT DISTINCT register_tb.Cos_code,   course_tb.Sub_Code, subject_tb.Sub_Name, register_tb.Std_code, 
            student_tb.Std_Pname,student_tb.Std_Fname, student_tb.Std_Lname, subject_tb.Sub_code, grade_tb.GPA, grade_tb.grade_font
            FROM course_tb
            INNER JOIN register_tb ON course_tb.Cos_code = register_tb.Cos_code
            INNER JOIN student_tb ON register_tb.Std_code = student_tb.Std_Code
            INNER JOIN subject_tb ON course_tb.Sub_Code = subject_tb.Sub_code
            INNER JOIN grade_tb ON register_tb.Std_code = grade_tb.Std_code
            WHERE course_tb.Sub_Code = '".$_SESSION['SubCodeED']."'" ;

            $queryED = mysqli_query($conn, $sqlED);
            $resultShowED = mysqli_fetch_array($queryED,MYSQLI_ASSOC);

            echo $_SESSION['SubCodeED']." - ".$resultShowED['Sub_Name'];
       
            $GradIDED = $_GET['GradID'];
            $_SESSION['GradID'] = $GradIDED;
            $sqlEditGrade = "SELECT grade_tb.Grad_id, grade_tb.Grad_Term, grade_tb.Std_code, grade_tb.Sub_code, grade_tb.GPA, grade_tb.grade_font, 
            student_tb.Std_Pname, student_tb.Std_Fname, student_tb.Std_Lname

            FROM grade_tb
            INNER JOIN register_tb ON grade_tb.Std_code = register_tb.Std_code
            INNER JOIN student_tb ON grade_tb.Std_code = student_tb.Std_Code
            WHERE grade_tb.Grad_id = '".$_GET['GradID']."'" ;
            
            $queryEditGrade = mysqli_query($conn, $sqlEditGrade);
            $resultEditGrade = $queryEditGrade->FETCH_ASSOC();

            
            
           
            ?>


        <form action="../../control/grade/save_addEdit_score.php" method = "POST" class="form-inline">
            <div class="form-group mb-2">
            <label for="StudentName"><?php echo $resultEditGrade['Std_Pname'].$resultEditGrade['Std_Fname']." ".$resultEditGrade['Std_Lname']?></label>
            </div>
            <div class="form-group mx-sm-3 mb-2">
            
            <!-- Hidden -->
            <input  name="txtGid"type="hidden" id="txtGid" value="<?php $result['Grad_id'];?>">
            <input  name="txtGterm"type="hidden" id="txtGterm" value="<?php $result['Grad_Term'];?>">
            <input  name="txtStdCode"type="hidden" id="txtStdCode" value="<?php $result['Std_code'];?>">
            <input  name="txtSubCode"type="hidden" id="txtSubCode" value="<?php $result['Sub_code'];?>">

            <!-- Grade -->
            <input type="int" class="form-control" id="txtGrade" placeholder="คะแนน" name="txtGrade" 
            min="0" max="3" title = "โปรดกรอกคะแนนตั้งแต่ 0 - 100 !"
            <?php if($_SESSION['GradID']){ ?> value="<?php echo $resultEditGrade['GPA']?>"<?php } 
            else { ?> <?php } ?> required>
            </div>

            <button type="submit" class="btn btn-success mb-2" name="GradeEdit" href="../../control/grade/save_addEdit_score.php?SubED=<?php echo $_SESSION['SubCodeED'];?>&GradID=<?php echo $_SESSION['GradID'];?>">บันทึก</button>
      </form>
      <a type="back" class="btn btn-secondary mb-2" href="./GradeManager.php?ID=<?php echo $_SESSION['ID'];?>">กลับหน้าเดิม</a>

  

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

</body>

</html>