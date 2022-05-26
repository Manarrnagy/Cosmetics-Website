
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="Mystyle/mystyle1.css">
 <script  src="script\script.js"></script>
  <meta charset="utf-8">
  <title>Eve's Sign-up</title>
</head>
<body>
  <div id="header">
  <img src="Images/Logo.jpg" alt="Logo" width="150" height="75" />
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
      <a href="aboutus.php"target="_blank">About us</a>
	  <a href="contactus.php" target="_blank">Contact us</a>
      <a href="Homepage.php"target="_blank">Home</a>
      </li>
      </ul>
     </div>
 <div align="center">
  <div class="card">
  <h2 >Create a new account</h2>
<form onsubmit="return validation()" method="post" name="regForm" action="signup_handler.php">
 <fieldset style="width:60%">
    <label>First Name: *</label>
    <input type="text" name="firstName" placeholder="Enter Your First Name" size="25px">
    <br>
    <label>Last Name: *</label>
    <input type="text" name="lastName" placeholder="Enter Your Last Name" size="25px">
    <br>
    <label>Email:  *</label>
    <input type="text" name="email" placeholder="Enter Your Email" size="25px">
    <br>
    <label>Password: *</label>
    <input type="password" name="password" placeholder="Enter your password" size="25px">
    <br>
    <label>Age: </label>
    <input type="text" name="age" placeholder="Enter your age" size="25px">
    <br>
    <label>Mobile number: </label>
    <input type="text" name="mobile" placeholder="Enter your Mobile number" size="25px">
  </fieldset>
    <br><br><br>
    <label>Note: fields that have the character * beside them are required.</label>
 <div align="center">
   <input type="submit" name="Signup" value="Register" >
   &nbsp
   <input type="reset" name="clearall" value= "clear" onclick="clear2 () ;">
 </div>
</form>

</div>

</div>
     <p id="footer">©️2020 Eve's,all rights reserved</p>
</body>
</html>
