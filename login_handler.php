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
    </li>
  </ul>
  </div>
	<div class="card" margin="auto">
<?php
$email = $_POST["email"];
$password = $_POST["password"];

include "config.php";

$login = "SELECT email,password FROM users WHERE email='$email' and password='$password'";

$result = mysqli_query($con,$login);
$count = mysqli_num_rows($result);

if($count == 1){
	session_start();
	$_SESSION["loggedUser"] = $email;
	header('Location: profile.php');
}
else {
	echo "Invalid Email and Password";
}
?>
<div>
</body>
</html>
