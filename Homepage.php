<!DOCTYPE html>
<html>
<head>
<title>Eve's Homepage</title>
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
          <a href="login.php"target="_blank">Login / Sign-up</a>
          <a href="aboutus.php" target="_blank">About us</a>
		  <a href="contactus.php" target="_blank">Contact us</a>
          <a href="Homepage.php"target="_blank">Home</a>
            <a href="profile.php" target="_blank">Profile</a>
        </li>
      </ul>
    </div>
<h2 class="Products">Brands</h2>
<div id="slideshow-container">
	<div>
		<img src="Images/1.jpg" alt="Brands" id="slideshow"/>
	</div>
	<a class="prev" onclick="prev()">&#10094;</a>
	<a class="next" onclick="next()">&#10095;</a>
</div>

<div id="imgs">
	<h2 class="Products">Products</h2>
	<a target="_blank" href="shop.php#bottom"><img src="Images/Skincare1.jpg" alt="Skincare" width="490" height="300"/></a>
	<a target="_blank" href="shop.php#top"><img src="Images/Makeup1.jpg" alt="Makeup" width="490" height="300"/></a>
	<a target="_blank" href="shop.php#middle"><img src="Images/Fragrances1.jpg" alt="Fragrances" width="490" height="300"/></a>
</div>
<div class="BestSellers" align="center">
	<h2>Best Sellers</h2>
	<br>
	<ul>
	<li><img src="Images/Chanel.jpg" alt="Chanel no.5" width="190" height="200"/>
	<p class="company">Chanel</p>
	<p class="product">No.5 Eau de Parfum Spray</p>
	<p class="price">EGP 2,990</p>
	</li>
	<li><img src="Images/Benetint.jpg" alt="Benefit benetint" width="180" height="200"/>
	<p class="company">Benefit</p>
	<p class="product">Benetint rose lips & cheek tint</p>
	<p class="price">EGP 649</p>
	</li>
	<li><img src="Images/Gimmie.jpg" alt="Benefit Gimmie brow" width="190" height="200"/>
	<p class="company">Benefit</p>
	<p class="product">Gimmie brow gel</p>
	<p class="price">EGP 585</p>
	</li>
	<li><img src="Images/Foreo.jpg" alt="Foreo Luna play" width="180" height="200"/>
	<p class="company">Foreo</p>
	<p class="product">Luna play</p>
	<p class="price">EGP 1,761</p>
	</li>
	<li><img src="Images/Burgundy.jpg" alt="The burgundy bar pallette" width="180" height="200"/>
	<p class="company">Maybelline</p>
	<p class="product">The burgundy bar pallette</p>
	<p class="price">EGP 344</p>
	</li>
	<li><img src="Images/Ordinary.jpg" alt="Ordinary niacinamide" width="180" height="200"/>
	<p class="company">The Ordinary</p>
	<p class="product">Niacinamide</p>
	<p class="price">EGP 507</p>
	</li>
</div>
<div id="communication">
	<ul>
	<li><p class="contact">Contact us:</p>
	<p class="contact">Returns and Exchanges</p>
	<p class="contact"><img src="Images/Email.jpg" alt="Email us" width="35" height="20"/>&nbsp info@eves_egypt.com</p>
	<p class="contact">Customer Service</p>
	<p class="contact"><img src="Images/Contact.jpg" alt="Contact us" width="35" height="20"/>&nbsp 020***********</p>
	</li>
	<li>
	<a href="https://www.Facebook.com" target="_blank" class="social"><img src="Images/Facebook.png" alt="Facebook" width="55" height="40"/></a>
	<a href="https://www.instagram.com" target="_blank" class="social"><img src="Images/Instagram.png" alt="Instagram" width="55" height="40"/></a>
	<a href="https://www.twitter.com" target="_blank" class="social"><img src="Images/Twitter.png" alt="Twitter" width="55" height="40"/></a>
	</li>
	</ul>
</div>
<p id="footer">©2020 Eve's,all rights reserved</p>
</body>

</html>
