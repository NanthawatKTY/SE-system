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
    <link rel="stylesheet" href="Style.css">

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
                <h3>ตารางเรียน</h3>
            </div>
            <img class=" circle-img mt-4"
                src="https://scontent.fbkk13-1.fna.fbcdn.net/v/t1.0-9/62071969_10216624784104470_275687937776025600_n.jpg?_nc_cat=108&_nc_eui2=AeFlWjrNsKSDZAOkhDiO8Sh9gK_6MxCkO4I7Q7q-kDWjlvHgaQxXXnd_Kdgzvpf12-V57NUXyBmP9tQiXiQDK7h_oUO2uTgBIMIajS4DEgl9rw&_nc_oc=AQnPsBYrLEFJd65Nx-49Wa0az84w5sFxnLpeeeT6v3CGiW6Ct0XMM4l0zk2c3dPGwd8&_nc_ht=scontent.fbkk13-1.fna&oh=4de81c57afef203ee9addf36f5353172&oe=5E0D477F"
                alt="">
            <p class="text-center text-light mt-3">มารุตเทพ ร่มโพธิ์</p>
            <p class="text-center text-light">วิศวกรรมซอฟต์แวร์ 4 ปี</p>
            <ul class="list-unstyled components pl-2">
                <li>
                    <a href="#">ข้อมูลส่วนตัว</a>
                </li>
                <li>
                    <a href="#">ผลการเรียน</a>
                </li>
                <li>
                    <a href="#">แผนการเรียน</a>
                </li>
                <li>
                    <a href="#">สถานะการลงทะเบียน</a>
                </li>
                <li>
                    <a href="#">ตารางสอน</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="./main_admin.php" class="article">กลับเมนูหลัก</a>
                </li>
                <li>
                    <a href="logout.php" class="download">ออกจากระบบ</a>
                </li>

            </ul>
        </nav>
<!-- Page Content  -->
<div id="content">
    <!--Menuด้านซ้าย-->
    <div class="container-fluid">
    <br>
    <!--เลือกภาคเรียน-->
    <div class="row">

        <div class="col-sm"></div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <div class="col-sm"><center><select name="term" id="term" onchange="$('#scForm').submit();" class="form-control " style="width: 120px;">
        <optgroup label="ปีการศึกษา 2562"><option value="1/2562" selected=""> 1/2562 </option></optgroup><optgroup label="ปีการศึกษา 2561"><option value="2/2561"> 2/2561 </option><option value="1/2561"> 1/2561 </option></optgroup>
        </select></center></div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;
        <div class="col-sm"><button type="button" class="btn btn-success">Edit</button></div>
        <div class="col-sm"><button type="button" class="btn btn-dark">Back</button></div>
    </div>
    </div><br>

    <!--ตารางบน-->

    <div class="container-fluid">
        <div class="col-md-12">
            <div class=" mt-2 mb-2">
                <table class="table table-bordered table-sm table-responsive-sm tableSchedule newBg">
                <thead>
                    <tr> 
                    <th valign="center">วัน/เวลา</th>
                        <th>
                            <div><center>คาบ 1</center></div>                                        
                            <div><H6>8.00 - 9.00</H6></div>
                        </th>
                        <th>
                            <div><center>คาบ 2</center></div>
                            <div><H6>9.00 - 10.00</H6></div>
                        </th>
                        <th>
                            <div><center>คาบ 3</center></div>                                        
                            <div><H6>10.00 - 11.00</H6></div>
                        </th>
                        <th>
                            <div><center>คาบ 4</center></div>                                        
                            <div><H6>11.00 - 12.00</H6></div>
                        </th>
                        <th>
                            <div><center>คาบ 5</center></div>                                        
                            <div><H6>12.00 - 13.00</H6></div>
                        </th>
                        <th>
                            <div><center>คาบ 6</center></div>                                        
                            <div><H6>13.00 - 14.00</H6></div>
                        </th>
                        <th>
                            <div><center>คาบ 7</center></div>                                        
                            <div><H6>14.00 - 15.00</H6></div>
                        </th>
                        <th>
                            <div><center>คาบ 8</center></div>                                        
                            <div><H6>15.00 - 16.00</H6></div>
                        </th>
                        <th>
                            <div><center>คาบ 9</center></div>                                        
                            <div><H6>16.00 - 17.00</H6></div>
                        </th>
                        <th>
                            <div><center>คาบ 10</center></div>                                        
                            <div><H6>17.00 - 18.00</H6></div>
                        </th>
                        <th>
                            <div><center>คาบ 11</cnter></div>                                        
                            <div><H6>18.00 - 19.00</H6></div>
                        </th>
                </thead>

            <tbody>
                <tr class="Day1"> 
                    <td class="dayOfWeek">จันทร์ </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                 
                        <td class="empty"></td>                                           
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                                                                         
                </tr>

                <tr class="Day2"> 
                    <td class="dayOfWeek">อังคาร</td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                 
                        <td class="empty"></td>                                           
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                             
                </tr>

                <tr class="Day3"> 
                    <td class="dayOfWeek">พุธ</td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                 
                        <td class="empty"></td>                                           
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                             
                </tr>

                <tr class="Day4"> 
                    <td class="dayOfWeek">พฤหัสบดี</td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                 
                        <td class="empty"></td>                                           
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                             
                </tr>

                <tr class="Day5"> 
                    <td class="dayOfWeek">ศุกร์</td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                 
                        <td class="empty"></td>                                           
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                             
                </tr>

                <tr class="Day6"> 
                    <td class="dayOfWeek">เสาร์</td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                 
                        <td class="empty"></td>                                           
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                             
                </tr>

                <tr class="Day7"> 
                    <td class="dayOfWeek">อาทิตย์</td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                 
                        <td class="empty"></td>                                           
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                             
                </tr>
            </tbody>
            </table><br>


    <!--ตารางล่าง-->
    <table class="table table-sm table-responsive-md table-bordered" style="font-size: 0.9rem;"> 
        <tbody><tr>
            <th><center>รหัสวิชา</center></th>
            <th> </th>
                <th><center>ชื่อวิชา</center></th>
                <th><center>หน่วยกิต</center></th>
                <th><center>คาบเรียน</center></th>
                <th><center>ห้องเรียน</center></th>
                <th><center>อาจารย์ผู้สอน</center></th>
        </tr>

        <tr> 
            <td><!--รหัสวิชา--></td>
            <td>.<!--Sec--></td>
            <td><!--ชื่อวิชา--></td>
            <td><!--หน่วยกิต--></td>
            <td><!--คาบเรียน--></td>
            <td><!--ห้องเรียน--></td> 
            <td><!--ผู้สอน--></td>
        </tr>

        <tr> 
            <td><!--รหัสวิชา--></td>
            <td>.<!--Sec--></td>
            <td><!--ชื่อวิชา--></td>
            <td><!--หน่วยกิต--></td>
            <td><!--คาบเรียน--></td>
            <td><!--ห้องเรียน--></td> 
            <td><!--ผู้สอน--></td>
        </tr>

        <tr> 
            <td><!--รหัสวิชา--></td>
            <td>.<!--Sec--></td>
            <td><!--ชื่อวิชา--></td>
            <td><!--หน่วยกิต--></td>
            <td><!--คาบเรียน--></td>
            <td><!--ห้องเรียน--></td> 
            <td><!--ผู้สอน--></td>
        </tr>

        <tr> 
            <td><!--รหัสวิชา--></td>
            <td>.<!--Sec--></td>
            <td><!--ชื่อวิชา--></td>
            <td><!--หน่วยกิต--></td>
            <td><!--คาบเรียน--></td>
            <td><!--ห้องเรียน--></td> 
            <td><!--ผู้สอน--></td>
        </tr>

        <tr> 
            <td><!--รหัสวิชา--></td>
            <td>.<!--Sec--></td>
            <td><!--ชื่อวิชา--></td>
            <td><!--หน่วยกิต--></td>
            <td><!--คาบเรียน--></td>
            <td><!--ห้องเรียน--></td> 
            <td><!--ผู้สอน--></td>
        </tr>

        <tr> 
            <td><!--รหัสวิชา--></td>
            <td>.<!--Sec--></td>
            <td><!--ชื่อวิชา--></td>
            <td><!--หน่วยกิต--></td>
            <td><!--คาบเรียน--></td>
            <td><!--ห้องเรียน--></td> 
            <td><!--ผู้สอน--></td>
        </tr>

        <tr> 
            <td><!--รหัสวิชา--></td>
            <td>.<!--Sec--></td>
            <td><!--ชื่อวิชา--></td>
            <td><!--หน่วยกิต--></td>
            <td><!--คาบเรียน--></td>
            <td><!--ห้องเรียน--></td> 
            <td><!--ผู้สอน--></td>
        </tr>
    </tbody></table>
    </div>
    </div>
    </div>
    </div>
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