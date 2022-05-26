<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="Mystyle/mystyle1.css">
</head>
<meta charset="utf-8"/>
<body>
	<div id="header">
  <img src="Images/Logo.jpg" alt="logo" width="150" height="75" />
  <form id="search">
  <input type ="search" placeholder="search..." name="search">
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
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];
$age = $_POST["age"];
$mobile = $_POST["mobile"];

include "config.php";

$insertUser = "INSERT INTO users(firstName,lastName,email,password,age,mobile) values('$firstName','$lastName','$email','$password','$age','$mobile')";

$result = mysqli_query($con,$insertUser);
if($result){
	echo "<h1>User Created Successfully</h1>";
	echo "<a href='login.php'>Click here to login</a>";
}
else {
	echo "Error:".mysqli_error($con);
}

?>
</body>
</html>
