<?php
session_start();
include_once('../../model/connect.php');
$sql = "SELECT * FROM `student_tb` ";
$query = $conn->query($sql);
error_reporting(0);
$sqlCourseName = "SELECT * FROM `coursename_tb` ";
$queryCourseName = $conn->query($sqlCourseName);
// $resultCourseName = $queryCourseName->FETCH_ASSOC();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>จัดการลงทะเบียน</title>

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
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>
            <h3>จัดการลงทะเบียน</h3>
            <form class="form-inline">
            <div class="form-group mr-2 mb-2">
                <label for="inputPassword2" class="sr-only">Password</label>
                <input type="password" class="form-control form-control-sm" id="inputPassword2" placeholder="รหัส หรือ หมู่เรียน">
              </div>
              <button type="submit" class="btn btn-secondary btn-sm mb-2">ค้นหา</button>
            </form>


            <script language="JavaScript">
	function ClickCheckAll(vol)
	{
		for(var i=2;i<=document.frmMain.hdnCount.value;i++)
		{
            console.log(i);
            
			if(vol.checked == true)
			{
				eval("document.frmMain.Chk"+i+".checked=true");
			}
			else
			{
				eval("document.frmMain.Chk"+i+".checked=false");
			}
		}
	}
</script>


<form action="../../control/register/AddRegister.php" method="post" name="frmMain" id="frmMain">

<div class="form-group">
        <select name="CosCode" class="form-control-sm" required>
                <option value="">เลือกแผนการเรียน</option>
<?php while($rowCsName = $queryCourseName->FETCH_ASSOC()){ ?>
                <option value="<?php echo $rowCsName['Cos_code'] ?>"><?php echo $rowCsName['Cos_name'] ?></option>
<?php } ?>
              </select>
              <button class="btn btn-sm btn-success">+ เพิ่ม/แก้ไข</button>
</div>

<?php if($_GET['susccess'] == 1){ ?>
    <div class="alert alert-success" role="alert">
  สำเร็จ
</div>

<?php }else if($_GET['susccess'] == 2) { ?>
    <div class="alert alert-danger" role="alert">
  มีบางอย่างผิดพลาด กรุณาตรวจสอบ
</div> <?php } ?>


            <table class="table table-bordered mt-3 ">
                    <thead>
                      <tr>
                      <td width="34"><div align="center">
        <input name="CheckAll" type="checkbox" id="CheckAll" onClick="ClickCheckAll(this);">
      </div></td>
                        <th scope="col">รหัส</th>
                        <th scope="col">ชื่อ - นามสกุล</th>
                        <th scope="col">แผนการเรียน</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; while($row = $query->FETCH_ASSOC()) {
                             $i = $i+1; 
                             $sqlNameCourse = "  SELECT * FROM `register_tb`
                    INNER JOIN coursename_tb
                    ON register_tb.Cos_code = coursename_tb.Cos_code
                    WHERE `Std_code` = '".$row['Std_Code']."' ";
                    $queryNameCourse = $conn->query($sqlNameCourse);
                    $resultNameCourse = $queryNameCourse->FETCH_ASSOC();
                             ?>
                            
                        <tr>
                        <td><div align="center">
                            <input name="Chk<?php echo $i; ?>" type="checkbox" id="Chk1" value="<?php echo $row['Std_Code']; ?>">
                        </div></td>
                        <td scope="row"><?php echo $row['Std_Code'] ?></td>
                        <td><?php echo $row['Std_Pname'].$row['Std_Fname']." ".$row['Std_Lname'] ?></td>
                        <td><?php echo $resultNameCourse['Cos_name'] ?></td>
                      </tr>
                      
                        <?php  } ?>
                    </tbody>
                  </table>
                  <input type="hidden" name="hdnCount" value="<?php echo $i ?>">
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