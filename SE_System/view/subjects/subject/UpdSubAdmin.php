<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Edit menber</title>

</head>
<body>
<body background="http://img.thzhost.com/i/lz/otxku.gif">
<?php
include '../../../model/condb.php';

$ID = $_GET['ID'];
$sql = "SELECT * FROM subject_tb WHERE Sub_id=".$ID;
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query);
?>
<form name='EditSub' method='POST' action='UpdSubAdmin.php'>
<center><h3>Update Subject</h3>
<table class="table table-dark">
    <tbody>
    <input name="MID"type="hidden" id="MID"value="<?php echo $result['Sub_id']?>">
        <tr>
            <td width="125"> &nbsp;ลำดับรายวิชา</td>
            <td widrh="180">
                <input  name="txtName"type="int" id="txtName" value="<?php echo $result['Sub_id'];?>">
               
            </td>
        </tr>
        <tr>
            <td width="125"> &nbsp;รหัสรายวิชา</td>
            <td widrh="100">
            
                <input name="txtUName"type="text" id="txtUName" value="<?php echo $result['Sub_code'];?>">
                </td>
            </td>
        </tr>
        <tr>
            <td width="125"> &nbsp;ชื่อรายวิชา</td>
            <td widrh="500"hight="300">
                
                <textarea name="comment" rows="5" cols="40"><?php echo $result['Sub_Name'];?></textarea>
            </td>
        </tr>
        <tr>
            <td width="125"> &nbsp;หน่วยกิตรายวิชา</td>
            <td widrh="180">
            <input name="txtpasswd"type="text" id="txtpasswd" value="<?php echo $result['Sub_Credit'];?>">
                    </center>
               
            </td>
        </tr>
        </tbody>
        </table>
        <br>
            <center>
                <input type="submit" name="Submit" value="Save">
                </center>
    </form>

    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>