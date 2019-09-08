<?php
// $count=0; //ถ้าไม่กำหนดจะไม่สามารถเช็กคำสั่งต่อไปได้
//  require('Singdatabase.php'); //เป็นคำสั่งที่เรียกใช้งานแล้วไฟล์ดังกล่าวจะต้องมีอยู่จริง ถ้าไม่พบไฟล์โปรแกรมก็จะหยุดทำงานในทันที
// if(!empty($_GET)){        //ใช้เพื่อตรวจสอบว่า "ตัวแปรนั้นๆ ได้ถูกกำหนดขึ้น และมีค่าที่ไม่ใช่ null หรือไม่"

//   $x =$_GET['txtsearch']; //เก็บค่าตัวแปลที่ค้นหาในตัวแปล $x

//   $sql="select * from item where itemname like '%$x%'";

//   $query = mysqli_query($link, $sql);

//   $count = mysqli_num_rows($query);


// }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="urf-8">
        <title>  ระบบสารสนเทศ มหาวิทยลัยราชภัฏลำปาง</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta NAME="Author" CONTENT="Lampang Rajabhat University ">
        <meta NAME="keywords" CONTENT="Lampang Rajabhat University,LPRU MIS,ระบบสารสนเทศ มหาวิทยาลัยราชภัฏลำปาง">
        <meta NAME="Keywords"  lang="th" CONTENT="ระบบสารสนเทศ มหาวิทยาลัยราชภัฏลำปาง,Lampang Rajabhat University,Lampang,Thailand,Lampang,Thai,University,lpru,rajabhat,มหาวิทยาลัยราชภัฏลำปาง, ลำปาง, มหาวิทยาลัยราชภัฏ, Lampang,Rajabhat,University,LPRU,lpru,สถาบันอุดมศึกษา">
        <meta name="description" content="ระบบสารสนเทศ มหาวิทยาลัยราชภัฏลำปาง,Lampang Rajabhat University มหาวิทยาลัยเพื่อการพัฒนาท้องถิ่น"/>
        
        <meta property="og:locale" content="th_TH" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content=" ระบบแสดงรายชื่อนักศึกษา - LPRU MIS" />
        <meta property="og:description" content=" ระบบแสดงรายชื่อนักศึกษา - LPRU MIS" />
        <meta property="og:url" content="/" />
        <meta property="og:site_name" content=" ระบบแสดงรายชื่อนักศึกษา - LPRU MIS" />
        <meta property="article:publisher" content="https://www.facebook.com/LampangRajabhatUniversity" />
        <meta name="expires" content="never" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="shortcut icon" href="http://mis.lpru.ac.th/public/favicon/lpru-logo.ico" type="image/x-icon" >
        <link rel="icon" href="http://mis.lpru.ac.th/public/favicon/lpru-logo32X32.png" sizes="32x32" >
        <link rel="icon" href="http://mis.lpru.ac.th/public/favicon/lpru-logo48X48.png" sizes="48x48" >
        <link rel="icon" href="http://mis.lpru.ac.th/public/favicon/lpru-logo96X96.png" sizes="96x96" >
        <link rel="icon" href="http://mis.lpru.ac.th/public/favicon/lpru-logo144X144.png" sizes="144x144" >


        <link href="http://mis.lpru.ac.th/public/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
        <link href="http://mis.lpru.ac.th/public/fontawesome/css/all.min.css" rel="stylesheet" >
        <link href="http://mis.lpru.ac.th/public/css/jquery-confirm.min.css?i=1" rel="stylesheet" >
        <link href="http://mis.lpru.ac.th/public/css/main.css?i=1" rel="stylesheet" >
        <link href="http://mis.lpru.ac.th/public/css/mobie_main.css?i=1" rel="stylesheet" >
    </head>
    <body style="background: #ececec;">

        <header style="border-bottom: 5px solid #114921;border-radius: 0px;margin-bottom: 20px;">
            <div id="bg_header">
                <div  class="container" id="TOPBAR">
                    <div id="LOGO_SYSTEM">
                        <a href="http://mis.lpru.ac.th/">
                            <div id="LOGOANDNAME">
                                <img src="data:image/jpeg;base64,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" title='LPRU LOGO' alt="Logo">
                                <div id="SITE_NAME">
                                    <div id="Head">ระบบแสดงรายชื่อนักศึกษา  </div>     
                                    

                                </div>
                            </div>
                        </a>
                    </div>
                    <nav class="navbar navbar-expand-sm navbar-light " id="MobieOnly">
                        <a class="navbar-brand" href="http://mis.lpru.ac.th/">หน้าแรก</a>
                       
                    </nav>

                    <div id="TOP_MANU">
                        <a href="http://mis.lpru.ac.th/">หน้าแรก</a> 
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>
        <div id="Main">



<div class=" container" >
    <div class="row">
        <div class="col-md-12" style="padding-top: 10px;">
            <div  class="page-title">
                <a class="btn btn-link pull-right btn-info-gradiant btn-ex  " href="http://mis.lpru.ac.th/"  ><i class="fas fa-angle-left"></i> กลับ</a>
                <div class="page-title-ch">

                   ค้นหารายชือนักศึกษา
                </div>
            </div> 
            <div class="card mt-2 mb-2"  >
                <div class="card-body">
                    <div >
                        <form class="row">
                            <div class="col-md-9">

                                <label >ค้นหาจาก  ชื่อ / นามสกุล / รหัสนักศึกษา /&nbsp; <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    ชั้นปี
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">1</a>
    <a class="dropdown-item" href="#">2</a>
    <a class="dropdown-item" href="#">3</a>
    <a class="dropdown-item" href="#">4</a>


  </div>
</div></label>

                                <input type="text" name="txt" class="form-control" value="">
                               
                            </div>
                            <div class="col-md-3">
                                <label > &nbsp;</label>
                                <div>
                                    <button type="submit" name="txtsearch" class="btn btn-info-gradiant btn-ex"><i class="fas fa-search"></i> ค้นหา</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <center>    <table class="table table-dark "style="height: 500px; width: 900px;">
           
           <thead>
             <tr>
               <th scope="col",width = "90"><div align = "center">id</div></th></th>
               <th scope="col",width = "90"><div align = "center">รหัสสินค้า</div></th></th>
               <th scope="col",width = "90"><div align = "center">ชื่อสินค้า</div></th></th>
               <th scope="col",width = "90"><div align = "center">ราคาสินค้า</div></th></th>
               <th scope="col",width = "90"><div align = "center">ตัวอย่างสินค้า</div></th></th>
             </tr>
           </thead>
         
             </tr>
                  <?php
         
                    if($count>0){
                     while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
                     {
                         ?>
                         <tr>
                         <td><div align="center"> <!--ใช้สำหรับครอบวัตถุที่เราต้องการ เพื่อจัดรูปแบบต่างๆ ให้กับวัตถุในตำแหน่งนั้นๆ สามารถใส่ค่าไปตรงๆได้-->
                     <?php echo $result['id'];?></div></td>
                     <td><div align="center">
                     <?php echo $result['codename'];?></div></td>
                     <td><div align="center">
                     <a href="infoitem.php?id=<?php echo $result['id'];?>"><?php echo $result['itemname'];?></a></td>
                     <td><div align="center">
                     <?php echo $result['price'];?></div></td>
                     <td><div align="center">
                     <?php  echo $result['img'];?></div></td>
                     <td><div align="center">  
                     
                   
                     <?php
                        }
                    }
                    
         
                    ?>
                    </table>
                    <?php
                    mysqli_close($link);
                    ?>
                    </center>
                 
        </div>
    </div>
</div></div>

<footer style="    background: #343a40;margin-top: 20px;
        color: #ffffff;
        padding: 20px;
        position: sti;
        bottom: 0px;
        width: 100%;">
    <div class="container">
        <div>ระบบสารสนเทศ มหาวิทยาลัยราชภัฏลำปาง  </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>