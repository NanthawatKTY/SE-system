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
            <p class="text-center text-light mt-3">นพดล วงศ์อุดทา</p>
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
                    <a href="#" class="download">ออกจากระบบ</a>
                </li>

            </ul>
        </nav>
<!-- Page Content  -->
<div id="content">
    <!--Menuด้านซ้าย-->
    <div class="container-fluid">
    <br>
   
   <!--ตารางบน-->

    <div class="container-fluid">
        <div class="col-md-12">
            <div class=" mt-2 mb-2">
                <table class="table table-bordered table-sm table-responsive-sm tableSchedule newBg">
                <thead>
                    <tr> 
                    <th valign="center">No</th>
                        <th>
                            <div><center>ภาคเรียน</center></div>                                        
                        </th>
                        <th>
                            <div><center>รหัสวิชา</center></div>
                        </th>
                        <th>
                            <div><center>ชื่อวิชา</center></div>                                        
                        </th>
                        <th>
                            <div><center>กลุ่มวิชา</center></div>                                        
                        </th>
                        <th>
                            <div><center>หน่วยกิต</center></div>                                        
                        </th>
                        <th>
                            <div><center>เกรด</center></div>                                        
                        </th>
                </thead>

            <tbody>  <!--ปี 1 -->
                <tr class="Day1"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">A</td>                                                                                                         
                </tr>

                <tr class="Day2"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>    
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">B</td>                                             
                </tr>

                <tr class="Day3"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">C</td>                                             
                </tr>

                <tr class="Day4"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">D</td>                                             
                </tr>

                <tr class="Day5"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">3.15</td>                                             
                </tr>

                <tr class="Day6"> 
                    <td class="dayOfWeek">------------</td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>    
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                             
                </tr>
            <!--ปี 1/2 -->
                <tr class="Day1"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">A</td>                                                                                                         
                </tr>

                <tr class="Day2"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>    
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">B</td>                                             
                </tr>

                <tr class="Day3"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">C</td>                                             
                </tr>

                <tr class="Day4"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">D</td>                                             
                </tr>

                <tr class="Day5"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">3.15</td>                                             
                </tr>

                <tr class="Day6"> 
                    <td class="dayOfWeek">------------</td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>    
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                             
                </tr>
            <!--ปี 2 -->
                <tr class="Day1"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">A</td>                                                                                                         
                </tr>

                <tr class="Day2"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>    
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">B</td>                                             
                </tr>

                <tr class="Day3"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">C</td>                                             
                </tr>

                <tr class="Day4"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">D</td>                                             
                </tr>

                <tr class="Day5"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">3.15</td>                                             
                </tr>

                <tr class="Day6"> 
                    <td class="dayOfWeek">------------</td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>    
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                             
                </tr>
                <!--ปี 2/2 -->
                <tr class="Day1"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">A</td>                                                                                                         
                </tr>

                <tr class="Day2"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>    
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">B</td>                                             
                </tr>

                <tr class="Day3"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">C</td>                                             
                </tr>

                <tr class="Day4"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">D</td>                                             
                </tr>

                <tr class="Day5"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">3.15</td>                                             
                </tr>

                <tr class="Day6"> 
                    <td class="dayOfWeek">------------</td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>    
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                             
                </tr>
                 <!--ปี 3 -->
                <tr class="Day1"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">A</td>                                                                                                         
                </tr>

                <tr class="Day2"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>    
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">B</td>                                             
                </tr>

                <tr class="Day3"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">C</td>                                             
                </tr>

                <tr class="Day4"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">D</td>                                             
                </tr>

                <tr class="Day5"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">3.15</td>                                             
                </tr>

                <tr class="Day6"> 
                    <td class="dayOfWeek">------------</td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>    
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                             
                </tr>
                 <!--ปี 3/2 -->
                 <tr class="Day1"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">A</td>                                                                                                         
                </tr>

                <tr class="Day2"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>    
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">B</td>                                             
                </tr>

                <tr class="Day3"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">C</td>                                             
                </tr>

                <tr class="Day4"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">D</td>                                             
                </tr>

                <tr class="Day5"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">3.15</td>                                             
                </tr>

                <tr class="Day6"> 
                    <td class="dayOfWeek">------------</td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>    
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                             
                </tr>
                 <!--ปี 4 -->
                 <tr class="Day1"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">A</td>                                                                                                         
                </tr>

                <tr class="Day2"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>    
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">B</td>                                             
                </tr>

                <tr class="Day3"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">C</td>                                             
                </tr>

                <tr class="Day4"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">D</td>                                             
                </tr>

                <tr class="Day5"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">3.15</td>                                             
                </tr>

                <tr class="Day6"> 
                    <td class="dayOfWeek">------------</td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>    
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                             
                </tr>
                 <!--ปี 4/2 -->
                 <tr class="Day1"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">A</td>                                                                                                         
                </tr>

                <tr class="Day2"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>    
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">B</td>                                             
                </tr>

                <tr class="Day3"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">C</td>                                             
                </tr>

                <tr class="Day4"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>   
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">D</td>                                             
                </tr>

                <tr class="Day5"> 
                    <td class="dayOfWeek">test test test </td>
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>                                                               
                        <td class="empty"></td>                                                              
                        <td class="empty"></td>  
                    </td>                                 
                        <td class="empty"></td>                                                              
                        <td class="empty">3.15</td>                                             
                </tr>

                <tr class="Day6"> 
                    <td class="dayOfWeek">------------</td>
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
                <th><center>หน่วยกิตรวม</center></th>
                <th><center>GPA</center></th>
               </tr>
            
        <tr> 
            <td>test test</td>
            <td>test test</td>
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