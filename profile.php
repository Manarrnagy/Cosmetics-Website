
<?php
	session_start();
	if( !isset($_SESSION["loggedUser"])){
		header('Location: login.php');
	}
?>

<html>
<head>
	<title>User Profile</title>
	  <link rel="stylesheet" href="Mystyle/mystyle1.css">
	<meta charset="UTF-8" />
	<style>
		label {
				font-weight: bold;
		}
	</style>
</head>

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
<div class="card">
<?php
	include "config.php";
	$email = $_SESSION["loggedUser"];
	$viewUser = "SELECT * FROM users WHERE email = '$email'";
	$result = mysqli_query($con,$viewUser);
	if(!$result){
		echo "Error:".mysqli_error($con);
	}
	$row = mysqli_fetch_array($result);
	$firstName = $row["firstName"];
	$lastName = $row["lastName"];
	$age = $row["age"];
	$mobile = $row["mobile"];
?>

<h1>User Profile</h1>

<label>First Name:</label>
<p><?php echo $firstName?></p>
<label>Last Name:</label>
<p><?php echo $lastName?></p>
<label>Email:</label>
<p><?php echo $email?></p>
<label>Age:</label>
<p><?php echo $age?></p>
<label>Mobile:</label>
<p><?php echo $mobile?></p>

<a href="logout.php">Click here to logout</a>
</div>
</body>

</html>
