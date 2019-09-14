<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editteacher</title>
 <!-- Bootstrap CSS CDN -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="Style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>เพิ่มอาจารย์</h3>
            </div>
            <img class=" circle-img mt-4"
                src="img/pooh.jpg"
                alt="">
            <p class="text-center text-light mt-3">ดิษวการณ์ อินต๊ะขัน</p>
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
        
 <!--ซ้าย--> 
<div class="row">
    <div class="col">
    &emsp; &emsp; &emsp; &emsp; &emsp;  
    </div>


    <!--กลาง-->
    <div class="col"><center><br><br><br>
    <form class="md-form">
  <div class="file-field">
    <div class="mb-4">
    <img src="https://cdn2.vectorstock.com/i/1000x1000/23/81/default-avatar-profile-icon-vector-18942381.jpg"
        class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar">
  </div>
    <div class="d-flex justify-content-center">
      <div class="btn btn-mdb-color btn-rounded float-left">
        <span>Add photo</span>
        <input type="file">
      </div>
    </div></center>
<br><br>

<!--formกรอกข้อมูล-->
<form>
  <div class="form-group row">
    <label for="inputPname" class="col-sm-2 col-form-label">Pname:</label>
    <div class="col-sm-5">
      <input type="Pname" class="form-control" id="inputPname" placeholder="Pname">
    </div>
  </div>

  <div class="form-row">
  <label for="inputFname" class="col-sm-2 col-form-label">Fname:</label>
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <label for="inpuLPname" class="col-sm-2 col-form-label">Lname:</label>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div><br>

  <div class="form-group row">
  <label for="inputBirth" class="col-sm-2 col-form-label">Birth:</label>
    <div class="col-sm-7">
      <input type="Pname" class="form-control" id="inputPname" placeholder="XX-XXXX-XXXX">
    </div>
  </div>

  <div class="form-row">
  <label for="inputAddress" class="col-sm-2 col-form-label">Address:</label>
    <div class="col">
      <input type="text" class="form-control" placeholder="Address">
    </div>
    <label for="inputTel" class="col-sm-1 col-form-label">Tel:</label>
    <div class="col">
      <input type="text" class="form-control" placeholder="0XX-XXX-XXXX">
    </div>
  </div><br>
    
  <div class="form-group row">
  <label for="inputIDcard" class="col-sm-2.5 col-form-label">ID-CARD:</label>
    <div class="col-sm-8">
      <input type="Pname" class="form-control" id="inputPname" placeholder="XXXXX-XXXXX-xxx">
    </div>
  </div>

  <div class="form-row">
  <label for="inputMajor" class="col-sm-2 col-form-label">Major:</label>
    <div class="col">
      <input type="text" class="form-control" placeholder="major">
    </div>
    <label for="inputFaculty" class="col-sm-2 col-form-label">Faculty:</label>
    <div class="col">
      <input type="text" class="form-control" placeholder="faculty">
    </div>
  </div><br><br><br>&emsp; &emsp; 

  <button type="button" class="btn btn-outline-primary btn-lg">แก้ไข</button> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; 
  <button type="button" class="btn btn-outline-danger btn-lg">ยกเลิก</button>

</form>
    </div>
</form>
    </div>
    <!--ขวา-->
     <div class="col">&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
     <button type="button" class="btn btn-danger">Logout</button>

     <div class="form-row align-items-center">
    <div class="col-auto"><br>
      <label class="sr-only" for="inlineFormInput">T_ID</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="T_ID">
    </div>
    </div>
    
    <div class="form-row align-items-center">
    <div class="col-6"><br>
      <label class="sr-only" for="inlineFormInput">T_CODE</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="T_CODE">
    </div>
  </div>
</div>
</body>
</html>