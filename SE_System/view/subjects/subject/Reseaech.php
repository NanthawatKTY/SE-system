<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

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
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
            <h3>รายวิชาทั้งหมด</h3>
            <a href="ADDSubAdmin.php"><button class="btn btn-success btn-sm m-1">+ เพิ่มรายวิชา</button></a> 

            <a><input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
            <button class="btn btn-secondary btn-sm m-1" type="submit" value="Search" >ค้นหา</button></a>

            <table class="table table-bordered">
        <meta charset = "UTF-8">
        <script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>
        <center>
            
           <table class="table"style="height: 500px; width: 900px;">
        <thead>
          <tr>
            
            <th scope="col",width = "90"><div align = "center">รหัสวิชา</div></th></th>
            <th scope="col",width = "90"><div align = "center">ชื่อวิชา</div></th></th> 
            <th scope="col",width = "90"><div align = "center">หน่วยกิต</div></th></th>
            <th scope="col",width = "90"><div align = "center">แก้ไข</div></th></th>
            <th scope="col",width = "90"><div align = "center">ลบ</div></th></th>
           
           </tr>
     
        </thead>
        </center>
 <?php 
     include '../../../model/condb.php';

        $sql = "SELECT * FROM subject_tb WHERE Sub_code LIKE '%".$strKeyword."%' ";
        $query = mysqli_query($conn, $sql);
        while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) 
        {
            ?>
            <tr>
           
            
            <td><div align="center">
            <?php echo $result['Sub_code'];?></div></td>
            <td><div align="left">
            <?php echo $result['Sub_Name'];?></div></td>
            <td><div align="center">
            <?php echo $result['Sub_Credit'];?></div></td>
            <td><div align="center">
            <a href="UpdSubAdmin.php?ID=<?php echo $result['Sub_id'];?>"><ion-icon style="color:orange" name="construct"></ion-icon></a></td>
            <td><div align="center"><a href="JavaScript:if(confirm('Confirm Delete?')== true){window.location='DelMem.php?ID=<?php echo $result['ID'];?>';}"><ion-icon style="color:red" name="trash"></ion-icon></a></td>
            </tr>
            <?php

        
      }
    ?>
       
    </table>
</div> 
</table>

<!--
<button class="btn btn-success btn-sm m-1">+ เพิ่มรายวิชา</button> 
<input type="text">
<button class="btn btn-secondary btn-sm m-1">ค้นหา</button> 
            <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">รหัสวิชา</th>
                        <th scope="col">ชื่อรายวิชา</th>
                        <th scope="col">หน่วยกิต</th>
                        <th scope="col">กลุ่มวิชา</th>
                        <th scope="col">แก้ไข</th>
                        <th scope="col">ลบ</th>
                      </tr>
                    </thead>
                    <tbody>

                        <td scope="row">9011103</td>
                        <td>ภาษาอังกฤษเพื่อทักษะการเรียน</td>
                        <td>3(3-0-6)</td>
                        <td>พื้นฐานภาษา</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td scope="row">9011202</td>
                        <td>สุนทรียภาพของชีวิต</td>
                        <td>3(3-0-6)</td>
                        <td>พื้นฐานมนุษย์</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                            <td scope="row">9011403</td>
                            <td>เทคโนโลยีสารสนเทศเพื่อการเรียนรู้</td>
                            <td>3(3-0-6)</td>
                            <td>พื้นฐานวิทย์-คณิต</td>
                            <td></td>
                            <td></td>
                          </tr>
                    </tbody>
                  </table>


        </div> 
-->

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