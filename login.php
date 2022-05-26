<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="Mystyle/mystyle1.css">
    <script  src="script\lscript.js"></script>
    <meta charset="utf-8">
    <title>Eve's Login</title>

    <meta name="viewport" content="width=device-width , initial-scale: 1.0">

  </head>
  <body>
    <div id="header">
    <img src="Images/Logo.jpg" alt="logo" width="150" height="75" />
    <form id="search">
    <input type ="search" placeholder="search..." name="search">
  </form >
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
    <br>
     <div class="lefttcolumn">
       <div class="card">
  <form onsubmit="return validation()" method="post" name="logForm" action="login_handler.php">
  <fieldset>

      <legend>Login</legend>
        <label>Email :</label>
        <input type="text" name="email" placeholder="Enter Your username" >
        <br><br>
        <label>Password: </label>
        <input type="password" name="password" placeholder="Enter your password">
        <br><br>
      	<input type="submit" value="Login">
        <label>&nbsp</label>
        <input type="reset" value="Clear" onclick="clear2();">
        <label>&nbsp</label>

          </fieldset>
          <br><br>
             <label> Or </label>
             <a href="signup.php"> Create a new account</a>
      </form>
       </div>
        </div>
                <p id="footer">©️2020 Eve's,all rights reserved</p>
  </body>
</html>
