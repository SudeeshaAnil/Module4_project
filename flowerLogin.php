<!doctype html>
<?php include ('function.php')?>

<html>
	<head>

	  <title>Keshu's Flower Shop</title>
	  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
	  <meta content="utf-8" http-equiv="encoding" />
	  <link rel="stylesheet" type="text/css" href="css/flower.css" />
	 
	  
	</head>

	<body>
		<!-- headerlogo -->
		<div id='logo'>
		<img src="pic/logo.png" width='250' height='150' /></div>
		<!-- header -->
	  
	  <div><h2>Keshu's Flower Shop</h2> 
	  </div>
	  
	  <span id="phoneHeader">
	  <p><img src="tel.jpg" align="middle" width='30'height='30' />
	  For Orders, Call us: <b>+91 - 9533064486<b>
	 </p>
	 </span>
	  
     <!-- main menue -->
		  <ul id="tabs">
				<li><a href="index.php">Home</a></li>

				<li><a href="#">About us</a></li>

				<li><a href="#">Contact</a></li>

				
	            <li>
				    <form method="get" action="result.php" enctype="multipart/form-data">
						 <input type="text" name="user_query"/>
						 <input type="submit" name="search" value="search"/>
				<li>
				    </form>
	  
			</ul>	
		
		
		<!-- make a side bar -->
		<div id="sidebar">
					<div id="sidebar_title">Categories</div>
					
					<ul id="cats">
					   <?php 
					   
					   getcat();
					   ?> 
					   
					   </ul>	
					  <div id="sidebar_title1">Price</div>
					  <ul id="cats">
					  <?php 
					   getprice();
					   ?> 
					</ul>	
				</div>
		<!-- make a Footer -->
		<div id='footer1'>
		Copyright© All rights reserved.
		</div>
			
			<div id="login">
			<h2>Sign-in</h2>
			<form action="loginaction.php" method="POST">
			<div>UserName:
			<input type="text" name="Uname" ></div></br>
			<div>Password:
			<input type="password" name="password" ></div></br>
			<input type="Submit" value="login" name="submit">
			<a href="index.php"><button type="button">Cancel</button></a>
			
			</form>
			</div>
			
			
		
    </body>
</html>
	