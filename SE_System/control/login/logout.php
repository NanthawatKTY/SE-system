<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOgout</title>
    <script type="text/javascript">
            function noBack(){
                window.history.forward()
            }
             
            noBack();
            window.onload = noBack;
            window.onpageshow = function(evt) { if (evt.persisted) noBack() }
            window.onunload = function() { void (0) }


</head>
<body>
    
</body>
</html>
<?php
echo "ขอบคุณที่ใช้บริการ";
session_start();
session_destroy();
echo "<META HTTP-EQUIV='Refresh' CONTENT ='3;URL=../../index.html'>";

?>
        </script>
        <script type="text/javascript">
window.history.go(-2);
</script>