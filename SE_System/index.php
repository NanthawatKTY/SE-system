<?php 
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./Style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Main</title>
</head>

<body class="setfont">
    <div class="img-team">
        <div class="row">
            <div class="col-8">
            </div>
            <?php if($_SESSION['id'] == ""){

             ?>
            <div class="col-4 right-team">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">เข้าสู่ระบบ</h5>
                        <form name="login" method = "POST" action = "control/login/Check_login.php">
                            <div class="form-group">
                              <label>ชื่อผู้ใช้งาน</label>
                              <input type="username" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">รหัสผ่าน</label>
                              <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm btn-block">เข้าสู่ระบบ</button>
                            <a href = "./forgotpassword.php" type="text" class="btn btn-primary btn-sm btn-block">ลืมรหัสผ่าน ?</a>
                          </form>
                    </div>
                </div>
            </div>
<?php } else { ?>

    <div class="col-4 right-team">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">คุณต้องการออกจากระบบหรือไม่?</h5>
                <form name="login" method = "POST" action = "control/login/Check_login.php">
                    <div class="form-group">
                      <label></label>
                    </div>
                    <a href = "./view/profile/Profile.php" type="text" class="btn btn-primary btn-sm btn-block">ดำเนินการต่อ</a>
                    <a href = "./control/login/logout.php" type="text" class="btn btn-danger btn-sm btn-block">ออกจากระบบ</a>
                  </form>
            </div>
        </div>
    </div>
    <?php } ?>

        </div>
    </div>
    <div class="container">
        <h3 class="mt-5">สารสนเทศสาธารณะ [นักศึกษา]</h3>
        <hr>
        <div class="row">
            <div class="col-6"><a href="/SE_System/studentselect_Main.php">สืบค้นนักศึกษา</a></div>
            <div class="col-6">สืบค้นหมู่เรียน</div>

            <div class="col-6"><a href="./view/schedule/editSchedule.html">ตารางเรียนนักศึกษา</a></div>
            <div class="col-6"><a href="#">สถานะการลงทะเบียน</a></div>

            <div class="col-6"><a href="#">แผนการเรียน</a></div>
            <div class="col-6"><a href="./view/manageStudent/editStudent.html">แก้ไขข้อมูลส่วนตัว [นักศึกษา]</a></div>
        </div>
        <h3 class="mt-5">สารสนเทศสาธารณะ [บุคลากร]</h3>
        <hr>
        <div class="row">
            <div class="col-6">สืบค้นบุคลากร</div>
            <div class="col-6"><a href="./view/schedule/editSchedule.html">ตารางสอนบุคลากร</a></div>
            <div class="col-6"><a href="#">จัดการแผนการเรียนนักศึกษา</a></div>
            <div class="col-6"><a href="#">แก้ไขข้อมูลส่วนตัว [บุคลากร]</a></div>
        </div>

        <h3 class="mt-5">จัดการระบบ [ผู้ดูแล]</h3>
        <hr>
        <div class="row">
            <div class="col-6"><a href="#">จัดการนักศึกษา</a></div>
            <div class="col-6"><a href="#">จัดการบุคลากร</a></div>
        </div>
    </div>


    <footer>This footer</footer>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</html>