<!DOCTYPE html>
<html lang="en">
<head></head>
<meta charset="utf-8"/>
<body>
<?php
$con = mysqli_connect("localhost","root","") or die("Error: Can't Connect to Server");
$db = mysqli_select_db($con,"testt") or die("Error: Can't Connect to Database");
?>
</body>
</html>
