<?php
session_start();
include_once('../../../model/connect.php');
error_reporting(0);
$_SESSION['IdEditProgram'] = $_GET["ID"];
$sql = "SELECT * FROM `course_tb` WHERE `Cos_code`= '".$_SESSION['IdEditProgram']."'";
$query = $conn->query($sql);

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
                    <a href="/SE_System/logout.php" class="download">ออกจากระบบ</a>
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
            <h3>จัดการแผนการเรียน / แผนการเรียน</h3> 
            <h5>แผนการเรียน : วิศวกรรมซอฟต์แวร์ 2560</h5>
            <!-- if ระหว่าง admin / อจ / นศ  -->


<form action="./AddEditProgram.php" method="POST">
                <!-- รหัสวิชา  -->
                <div class="form-group">
                    <label for="subCode"
                        class="col-sm-4 col-form-label col-form-label-sm font-weight-bold">รหัสวิชา :</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-sm" id="subCode" name="subCode" value="">
                    </div>
                </div>

                                <!-- ชื่อวิชา  -->
                                <div class="form-group">
                    <label for="subName"
                        class="col-sm-4 col-form-label col-form-label-sm font-weight-bold">ชื่อวิชา :</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-sm" id="subName" value="">
                    </div>
                </div>

                                     <!-- กลุ่มวิชา  -->
                                     <div class="form-group">
                    <label for="secName"
                        class="col-sm-4 col-form-label col-form-label-sm font-weight-bold">กลุ่มวิชา :</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-sm" id="secName" value="">
                    </div>
                </div>

                                     <!-- รหัสอาจารย์  -->
                                     <div class="form-group">
                    <label for="TeacName"
                        class="col-sm-4 col-form-label col-form-label-sm font-weight-bold">รหัสอาจารย์ผู้สอน :</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-sm" id="TeacName" value="">
                    </div>
                </div>

                                     <!-- คาบเรียน  -->
                                     <div class="form-group">
                    <label for="cosTime"
                        class="col-sm-4 col-form-label col-form-label-sm font-weight-bold">คาบเรียน :</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-sm" id="cosTime" value="">
                        <small>เช่น จ(1-4), อ(6-10)</small>
                    </div>
                </div>
                                                     <!-- ห้องเรียน  -->
                                                     <div class="form-group">
                    <label for="cosRoom"
                        class="col-sm-4 col-form-label col-form-label-sm font-weight-bold">ห้องเรียน :</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-sm" id="cosRoom"  value="">
                    </div>
                </div>

                <div class="form-group">
                <select class="col-sm-3 col-form-label col-form-label-sm ml-3" id="inputGroupSelect01">
        <option selected>เลือกภาคเรียน</option>
        <option value="1">1/2560</option>
        <option value="2">2/2560</option>
        <option value="3">1/2561</option>
        <option value="3">2/2561</option>
        <option value="3">1/2562</option>
        <option value="3">2/2562</option>
        <option value="3">1/2563</option>
        <option value="3">2/2563</option>
      </select>
 <button type="submit" name="Submit">เพิ่มรายวิชา</button>
                </div>           
</form>

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
            $sql_1_2560 = "SELECT DISTINCT course_tb.Sub_code,subject_tb.Sub_name,
            sect_tb.Sect_Name,teacher_tb.Teach_Pname,teacher_tb.Teach_Fname,
            teacher_tb.Teach_Lname,course_tb.Cos_Time,course_tb.Cos_Room FROM course_tb
            INNER JOIN subject_tb 
             ON course_tb.Sub_code = subject_tb.Sub_code
             INNER JOIN sect_tb 
              ON course_tb.Sect_code = sect_tb.Sect_code
             INNER JOIN teacher_tb
            ON course_tb.Teach_code = teacher_tb.Teach_code WHERE `Cos_term`= '1/2560'";
            $query_1_2560 = $conn->query($sql_1_2560);
            while($result_1_2560  = $query_1_2560->fetch_assoc())  {?>
            <tr>
            <td scope="row"><?php echo $result_1_2560['Sub_code'] ?></td>
            <td><?php echo $result_1_2560['Sub_name'] ?></td>
            <td><?php echo $result_1_2560['Sect_Name'] ?></td>
            <td><?php echo $result_1_2560['Teach_Pname']." ".$result_1_2560['Teach_Fname']." ".$result_1_2560['Teach_Lname'] ?></td>
            <td><?php echo $result_1_2560['Cos_Time'] ?></td>
            <td><?php echo $result_1_2560['Cos_Room'] ?></td>
            <td><button>แก้ไข</button></td>
            <td><button>ลบ</button></td>
          </tr>
            <?php } ?>
            <tr>
            <th colspan="9">ภาคเรียนที่ 2/2560</th>
            </tr>
          


        <tr>
        <th colspan="9">ภาคเรียนที่ 1/2561</th>
    </tr>
    <tr>
        <th colspan="9">ภาคเรียนที่ 2/2561</th>
    </tr>
    <tr>
        <th colspan="9">ภาคเรียนที่ 1/2562</th>
    </tr>
    <tr>
        <th colspan="9">ภาคเรียนที่ 2/2562</th>
    </tr>
    <tr>
        <th colspan="9">ภาคเรียนที่ 1/2563</th>
    </tr>
    <tr>
        <th colspan="9">ภาคเรียนที่ 2/2563</th>
    </tr>

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