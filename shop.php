<!DOCTYPE html>
<html>
<head>
<title>Eve's shop</title>
<link rel="stylesheet" href="Mystyle/Stylesheet.css">
<script src="script/myScript.js"></script>
<meta charset="UTF-8">
<meta name="keywords" content="makeup,skincare,fragrances">
<meta name="description" content="Shop for beauty/makeup products for the best prices and best quality">
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
          <a href="login.php">Login / Sign-up</a>
          <a href="aboutus.php" target="_blank">About us</a>
		  <a href="contactus.php" target="_blank">Contact us</a>
          <a href="Homepage.php"target="_blank">Home</a>
          <a href="profile.php" target="_blank">Profile</a>
        </li>
      </ul>
    </div>
<div class="BestSellers">
	<a id="top">
	<h2>Makeup</h2>
	<br>
	<ul>
	<li><img src="Images/Concealer.jpg" alt="Maybelline Concealer" width="190" height="200"/>
	<div align="center">
	<p class="company">Maybelline</p>
	<p class="product">Fit me concealer</p>
	<p class="price">EGP</p>
	<p class="price" id="1">102</p>
	<br>
	<input type="button" value="+" id="btn1" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "1";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	<li><img src="Images/Benetint.jpg" alt="Benefit benetint" width="180" height="200"/>
	<div align="center">
	<p class="company">Benefit</p>
	<p class="product">Benetint rose lips & cheek tint</p>
	<p class="price">EGP</p>
	<p class="price" id="2">649</p>
	<br>
	<input type="button" value="+" id="btn2" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "2";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	<li><img src="Images/Gimmie.jpg" alt="Benefit Gimmie brow" width="190" height="200"/>
	<div align="center">
	<p class="company">Benefit</p>
	<p class="product">Gimmie brow gel</p>
	<p class="price">EGP</p>
	<p class="price" id="3">585</p>
	<br>
	<input type="button" value="+" id="btn3" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "3";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	<li><img src="Images/Foundation.jpg" alt="L'Oreal Paris Infallible 24h Foundation" width="180" height="200"/>
	<div align="center">
	<p class="company">L'Oreal Paris</p>
	<p class="product">Infallible 24h Foundation</p>
	<p class="price">EGP</p>
	<p class="price" id="4">207</p>
	<br>
	<input type="button" value="+" id="btn4" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "4";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	<li><img src="Images/Burgundy.jpg" alt="The burgundy bar pallette" width="180" height="200"/>
	<div align="center">
	<p class="company">Maybelline</p>
	<p class="product">The burgundy bar pallette</p>
	<p class="price">EGP</p>
	<p class="price" id="5">344</p>
	<br>
	<input type="button" value="+" id="btn5" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "5";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	<li><img src="Images/Toofaced.jpg" alt="Too faced Natural face pallette" width="180" height="200"/>
	<div align="center">
	<p class="company">Too faced</p>
	<p class="product">Natural Face Pallette</p>
	<p class="price">EGP</p>
	<p class="price" id="6">892</p>
	<br>
	<input type="button" value="+" id="btn6" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "6";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	</a>
</div>
<div class="BestSellers">
	<a id="middle">
	<h2>Fragrances</h2>
	<br>
	<ul>
	<li><img src="Images/Chanel.jpg" alt="Chanel no.5" width="190" height="200"/>
	<div align="center">
	<p class="company">Chanel</p>
	<p class="product">No.5 Eau de Parfum Spray</p>
	<p class="price">EGP</p>
	<p class="price" id="7">2990</p>
	<br>
	<input type="button" value="+" id="btn7" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "7";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	<li><img src="Images/Si.jpg" alt="Giorgio Armani Si" width="180" height="200"/>
	<div align="center">
	<p class="company">Giorgio Armani</p>
	<p class="product">Si</p>
	<p class="price">EGP</p>
	<p class="price" id="8">1450</p>
	<br>
	<input type="button" value="+" id="btn8" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "8";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	<li><img src="Images/Lancome.jpg" alt="Lancome La vie est belle" width="190" height="200"/>
	<div align="center">
	<p class="company">Lancome</p>
	<p class="product">La vie est belle</p>
	<p class="price">EGP</p>
	<p class="price" id="9">2699</p>
	<br>
	<input type="button" value="+" id="btn9" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "9";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	<li><img src="Images/Yves.jpg" alt="Yves Saint Laurent Mon Paris" width="180" height="200"/>
	<div align="center">
	<p class="company">Yves Saint</p>
	<p class="product">Mon Paris</p>
	<p class="price">EGP</p>
	<p class="price" id="10">1650</p>
	<br>
	<input type="button" value="+" id="btn10" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "10";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	<li><img src="Images/Gucci.jpg" alt="Gucci bloom for her" width="180" height="200"/>
	<div align="center">
	<p class="company">Gucci</p>
	<p class="product">Bloom for her</p>
	<p class="price">EGP</p>
	<p class="price" id="11">1540</p>
	<br>
	<input type="button" value="+" id="btn11" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "11";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	<li><img src="Images/Opium.jpg" alt="Yves Saint Black Opium" width="180" height="200"/>
	<div align="center">
	<p class="company">Yves Saint</p>
	<p class="product">Black Opium</p>
	<p class="price">EGP</p>
	<p class="price" id="12">1838</p>
	<br>
	<input type="button" value="+" id="btn12" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "12";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	</a>
</div>
<div class="BestSellers">
	<a id="bottom">
	<h2>Skin care</h2>
	<br>
	<ul>
	<li><img src="Images/Vichy.jpg" alt="Vichy Mineral hyaluronic acid gel" width="180" height="200"/>
	<div align="center">
	<p class="company"> Vichy</p>
	<p class="product">Mineral hyaluronic acid gel</p>
	<p class="price">EGP</p>
	<p class="price" id="13">515</p>
	<br>
	<input type="button" value="+" id="btn13" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "13";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	<li><img src="Images/VitaminC.jpg" alt="La Roche Posay vitamin c serum" width="180" height="200"/>
	<div align="center">
	<p class="company">La Roche Posay</p>
	<p class="product">Vitamin c serum</p>
	<p class="price">EGP</p>
	<p class="price" id="14">824</p>
	<br>
	<input type="button" value="+" id="btn14" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "14";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	<li><img src="Images/Neutrogena.jpg" alt="Neutrogena Hydro Boost gel cream" width="180" height="200"/>
	<div align="center">
	<p class="company">Neutrogena</p>
	<p class="product">Hydro Boost gel cream</p>
	<p class="price">EGP</p>
	<p class="price" id="15">150</p>
	<br>
	<input type="button" value="+" id="btn15" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "15";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	<li><img src="Images/Foreo.jpg" alt="Foreo Luna play" width="180" height="200"/>
	<div align="center">
	<p class="company">Foreo</p>
	<p class="product">Luna play</p>
	<p class="price">EGP</p>
	<p class="price" id="16">1761</p>
	<br>
	<input type="button" value="+" id="btn16" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "16";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	<li><img src="Images/Mario.jpg" alt="Mario Badesco facial spray" width="180" height="200"/>
	<div align="center">
	<p class="company">Mario Badescu</p>
	<p class="product">Fascial spray with aloe-herbs</p>
	<p class="price">EGP</p>
	<p class="price" id="17">280</p>
	<br>
	<input type="button" value="+" id="btn17" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "17";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	<li><img src="Images/Ordinary.jpg" alt="Ordinary niacinamide" width="180" height="200"/>
	<div align="center">
	<p class="company"> &nbsp The Ordinary</p>
	<p class="product">Niacinamide</p>
	<p class="price">EGP</p>
	<p class="price" id="18">507</p>
	<br>
	<input type="button" value="+" id="btn18" onclick="cart(this.value,this.id)">
	<br>
	<br>
	<?php
	$PID = "18";
		echo" <a href='viewProduct.php?PID=$PID'>View Product Details</a>";
		?>
	</div>
	</li>
	<div class="total" align="center">
	<h3>Total</h3>
	<input type="button" value="=" id="btn19" onclick="cart(this.value,this.id)">
	</div>
	</a>
</div>
<p id="footer">©2020 Eve's,all rights reserved</p>
</body>
</html>
