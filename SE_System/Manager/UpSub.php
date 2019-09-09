<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Edit Subject</title>

</head>
<body>
<body background color = "white">

<?php
include 'condb.php'; 

$ID = $_GET['Sub_id'];
$sql = "SELECT * FROM subject_tb WHERE Sub_id=".$ID;
$query = mysqli_query($con, $sql);
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))

?>

<form name='Edit_Sub' method='POST' action='UpSub.php'>
<center><h3>Edit Subject</h3>
<table class="table table-dark"style="height: 500px; width: 900px;">
    <tbody>
    <input name="MID"type="hidden" id="MID"value="<?php echo $result['Sub_id']?>">
        <tr>
            <td width="125"> &nbsp;รหัสวิชา</td>
            <td widrh="180">
                <input name="txtName"type="text" id="txtName" value="<?php echo $result['Sub_code'];?>">
               
            </td>
        </tr>
        <tr>
            <td width="125"> &nbsp;ชื่อวิชา</td>
            <td widrh="100">
                <input name="txtUName"type="text" id="txtUName" value="<?php echo $result['Sub_Name'];?>">
                </td>
            </td>
        </tr>
        <tr>
            <td width="125"> &nbsp;หน่วยกิต</td>
            <td widrh="180">
                <input name="txtpasswd"type="text" id="txtpasswd" value="<?php echo $result['Sub_Credit'];?>">
               
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