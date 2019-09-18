<?php
session_start();
include_once('../../../model/connect.php');
$sql = "SELECT * FROM student_tb";
$query = $conn->query($sql);
$result = $query->fetch_assoc()
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>เพิ่ม/แก้ไข ข้อมูลส่วนตัวนักศึกษา</title>

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
                    <button class="btn btn-dark d-inline-block d  -lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>
            <h3>เพิ่ม/แก้ไข ข้อมูลส่วนตัวนักศึกษา</h3>
            <hr>
            <form>
                <!-- ชื่อขึ้นต้น--ชื่อ--นามสกุล  -->
                <div class="form-group row">
                <?php if($_GET['Std_id']){   ?>
                    <label for="colFormLabelSm"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">ชื่อขึ้นต้น
                        :</label>
                    <div class="col-sm-5">     
                        <input type="text" name="txtPname" class="form-control form-control-sm" id="colFormLabelSm"
                            value="<?php echo $result['Std_Pname'];?>" require></div>
                    <label for="colFormLabelSm"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">ชื่อ
                        :</label>
                    <div class="col-sm-5">
                        <input type="text" name="txtFname" class="form-control form-control-sm" id="colFormLabelSm"
                            value="<?php echo $value['Std_Fname'];?>" require></div>
                    <label for="colFormLabelSm"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">นามสกุล
                        :</label>
                    <div class="col-sm-5">
                        <input type="text" name="txtLname" class="form-control form-control-sm" id="colFormLabelSm"
                            value="<?php echo $value['Std_Fname'];?>" require></div>
                <?php }
                        else{ ?>
                    <label for="colFormLabelSm"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">ชื่อขึ้นต้น
                        :</label>
                    <div class="col-sm-5">     
                        <input type="text" name="txtPname" class="form-control form-control-sm" id="colFormLabelSm"
                            value="<?php echo $result['Std_Pname'];?>" require></div>
                    <label for="colFormLabelSm"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">ชื่อ
                        :</label>
                    <div class="col-sm-5">
                        <input type="text" name="txtFname" class="form-control form-control-sm" id="colFormLabelSm"
                            value="<?php echo $value['Std_Fname'];?>" require></div>
                    <label for="colFormLabelSm"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">นามสกุล
                        :</label>
                    <div class="col-sm-5">
                        <input type="text" name="txtLname" class="form-control form-control-sm" id="colFormLabelSm"
                            value="<?php echo $value['Std_Fname'];?>" require></div>
                    </div>
                </div>
                <!-- วันเดือนปีเกิด -->
                <div class="form-group row">
                    <?php if($_GET['Std_id']) { ?>
                    <label for="colFormLabelSm"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">วันเกิด : </label>
                    <div class="col-sm-5">
                        <input type="text" name="txtbirth" class="form-control form-control-sm" id="colFormLabelSm"
                            value="<?php echo $result['Std_Birth']?>" require></div>
                    <?php else{  ?>
                        <label for="colFormLabelSm"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">วันเกิด : </label>
                    <div class="col-sm-5">
                        <input type="text" name="txtbirth" class="form-control form-control-sm" id="colFormLabelSm"
                            placeholder="Please Input Text" require></div>
                    <?php }  ?></div>
                <!-- เลขที่บัตรประจำตัวประชาชน -->
                <div class="form-group row">
                    <?php if($_GET['Std_id']) { ?>
                    <label for="colFormLabelSm"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">เลขที่บัตรประจำตัวประชาชน : </label>
                    <div class="col-sm-5">
                        <input type="text" name="txtcard" class="form-control form-control-sm" id="colFormLabelSm"
                            value="<?php echo $result['Std_Card']?>" require></div>
                    <?php else{  ?>
                        <label for="colFormLabelSm"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">เลขที่บัตรประจำตัวประชาชน : </label>
                    <div class="col-sm-5">
                        <input type="text" name="txtcard" class="form-control form-control-sm" id="colFormLabelSm"
                            placeholder="Please Input Text" require></div>
                    <?php }  ?></div>
                <!-- รหัสนักศึกษา -->
                <div class="form-group row">
                    <?php if($_GET['Std_id']) { ?>
                    <label for="colFormLabelSm"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">รหัสนักศึกษา : </label>
                    <div class="col-sm-5">
                        <input type="text" name="txtcode" class="form-control form-control-sm" id="colFormLabelSm"
                            value="<?php echo $result['Std_Code']?>" require></div>
                    <?php else{  ?>
                        <label for="colFormLabelSm"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">รหัสนักศึกษา : </label>
                    <div class="col-sm-5">
                        <input type="text" name="txtcode" class="form-control form-control-sm" id="colFormLabelSm"
                            placeholder="Please Input Text" require></div>
                    <?php }  ?></div>
                <!-- สาขาวิชา -->
                <div class="form-group row">
                    <?php if($_GET['Std_id']) { ?>
                    <label for="colFormLabelSm"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">สาขาวิชา : </label>
                    <div class="col-sm-5">
                        <input type="text" name="txtmajor" class="form-control form-control-sm" id="colFormLabelSm"
                            value="<?php echo $result['Std_Major']?>" require></div>
                    <?php else{  ?>
                        <label for="colFormLabelSm"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">สาขาวิชา : </label>
                    <div class="col-sm-5">
                        <input type="text" name="txtmajor" class="form-control form-control-sm" id="colFormLabelSm"
                            placeholder="Please Input Text" require></div>
                    <?php }  ?></div>
                <!-- คณะ -->
                <div class="form-group row">
                    <?php if($_GET['Std_id']) { ?>
                    <label for="colFormLabelSm"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">คณะ : </label>
                    <div class="col-sm-5">
                        <input type="text" name="txtfac" class="form-control form-control-sm" id="colFormLabelSm"
                            value="<?php echo $result['Std_Faculty']?>" require></div>
                    <?php else{  ?>
                        <label for="colFormLabelSm"
                        class="col-sm-4 text-right col-form-label col-form-label-sm font-weight-bold">คณะ : </label>
                    <div class="col-sm-5">
                        <input type="text" name="txtfac" class="form-control form-control-sm" id="colFormLabelSm"
                            placeholder="Please Input Text" require></div>
                    <?php }  ?></div>         
            <div class="row">
            <?php if($_GET['Std_id']) { ?>
                <button class="btn btn-sm btn-primary mx-auto col-2"><a
                        href="/SE_System/control/student/save_edit_std.php" >บันทึก</a></button>
            </div>
            <?php }else{  ?>
                <button class="btn btn-sm btn-primary mx-auto col-2"><a 
                        href="SE_System\control\student\save_add_std.php" >เพิ่ม เสร็จสิ้น</a></button>
            </div>
            <?php }?>
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