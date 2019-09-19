<?php
session_start();
include_once('../../model/connect.php');



?>





<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>จัดการผลการเรียน</title>

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
            <h3>จัดการผลการเรียน</h3>


            <table class="table table-bordered mt-3">
                    <thead>
                      <tr>
                        <th scope="col"><div  align="center">รหัส</th></div>
                        <th scope="col"><div  align="center">ชื่อ - นามสกุล</th></div>
                        <th scope="col"><div  align="center">คะแนน</th></div>
                        <th scope="col"><div  align="center">เกรด</th></div>
                        <th scope="col"><div  align="center">แก้ไข</th></div>
                        <th scope="col"><div  align="center">เพิ่มเกรด</th></div>
                      </tr>
                    </thead>
                    
<!-- 
                      <tr>
                            <td scope="row">60122660103</td>
                            <td>นาย เกิดมาทำไม ไม่รู้เหมือนกัน</td>
                            <td>80</td>
                            <td>A</td>
                            <td><button>แก้ไข</button></td>
                          </tr> -->
    <?php
        
        // $ID = $_GET['ID'];
        // $_SESSION['ID'] = $ID;
        // $sql = "SELECT register_tb.Sub_code, register_tb.Std_code, grade_tb.GPA, student_tb.Std_Fname, student_tb.Std_Lname, subject_tb.Sub_Name
        // FROM (((register_tb
        // INNER JOIN subject_tb ON register_tb.Sub_code = subject_tb.Sub_code)
        // INNER JOIN student_tb ON register_tb.Std_code = student_tb.Std_code) 
        // INNER JOIN grade_tb ON register_tb.Std_code = grade_tb.Std_code)          
        // WHERE subject_tb.Sub_code='".$_SESSION['ID']."'" ;

        $ID = $_GET['ID'];
        $_SESSION['ID'] = $ID;
        $sql = "SELECT register_tb.Cos_code,  register_tb.Std_code,student_tb.Std_Fname, student_tb.Std_Lname, course_tb.Sub_code, subject_tb.Sub_Name, grade_tb.GPA
                FROM ((((course_tb
                INNER JOIN register_tb ON course_tb.Cos_code = register_tb.Cos_code)
                INNER JOIN subject_tb ON course_tb.Sub_code = subject_tb.Sub_code)
                INNER JOIN student_tb ON register_tb.Std_code = student_tb.Std_code) 
                INNER JOIN grade_tb ON register_tb.Std_code = grade_tb.Std_code)         
                WHERE course_tb.Sub_code='".$_SESSION['ID']."'" ;


    
        $query = mysqli_query($conn, $sql);
        echo $_SESSION['Sub_code'];echo"&nbsp&nbsp";echo"-";echo"&nbsp&nbsp";echo $_SESSION['Sub_Name'];


        while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) 
        {
            $_SESSION['Sub_code'] = $result['Sub_code'];
            $_SESSION['Sub_Name'] = $result['Sub_Name'];
            error_reporting(0);
            ?>
            <tr>
           
           
            <td><div align="center">
            <?php echo $result['Std_code'];?></div></td>
            <td><div align="center">
            <?php echo $result['Std_Fname'];echo"&nbsp&nbsp";echo $result['Std_Lname'];?></div></td>
            <td><div align="center">
            <?php echo $result['GPA'];?></div></td>
            <td><div align="center">
            <?php echo $result['grade_font']; ?></div></td>
            <td><div align="center">
            <a class="btn btn-info" href ="./AddScore.php">จัดการ</a></td>
            <td><div align="center">
            <a class="btn btn-info" href ="./AddScore.php">+ เพิ่มเกรด</a></td>
            </tr>
            <?php

        
      }
    ?>
                   
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