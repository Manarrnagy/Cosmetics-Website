<!DOCTYPE html>
<html>
<head>
<title>View Product</title>
<link rel="stylesheet" href="Mystyle/Stylesheet.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width , initial-scale: 1.0">
</head>
<body>
<div id="header">
  <img src="Images/logo.jpg" alt="logo" width="150" height="75"/>
  <form id="search">
  <input type ="search" placeholder="search..." name="search">
  </form>
</div>

<div id="menu">
      <ul>
        <li>
          <div class="dropdown">
            <span>My Cart</span>
            <div class="dropdown-content">
              <p>You have no items in your shopping cart.</p>
            </div>
          </div>
          <a href="login.php"target="_blank">Login / Sign-up</a>
          <a href="aboutus.php" target="_blank">About us</a>
		  <a href="contactus.php" target="_blank">Contact us</a>
          <a href="Homepage.php"target="_blank">Home</a>
          <a href="profile.php" target="_blank">Profile</a>
        </li>
      </ul>
</div>

<?php
$PID = $_GET["PID"];
$con = mysqli_connect("localhost","root","") or die("Error: Can't Connect to Server");
$db = mysqli_select_db($con,"products") or die("Error: Can't Connect to Database");
$viewProducts = "SELECT * FROM products WHERE PID ='$PID'";
$result = mysqli_query($con,$viewProducts);
if(!$result){
	die("Error: ".mysqli_errno($con));
}
$row = mysqli_fetch_array($result);
$Image = $row["Image"];
$Brand = $row["Brand"];
$Pname = $row["Pname"];
$Description = $row["Description"];
$Price = $row["Price"];
?>

<div class="BestSellers" align = "center">
<h1>Product</h1>
<ul>
<li>
<a href="Images/<?php echo $Image;?>.jpg"><img src="Images/<?php echo $Image;?>.jpg" height="300" ></a>
<h3> Brand : </h3>
<p><?php echo $Brand; ?> </p>
<h3> Product name : </h3>
<p><?php echo $Pname; ?> </p>
<h3> Description : </h3>
<p><?php echo $Description; ?> </p>
<h3> Price : </h3>
<p><?php echo $Price; ?> </p>
</li>
</ul>
</div>

<p id="footer">©2020 Eve's,all rights reserved</p>
</body>
</html>