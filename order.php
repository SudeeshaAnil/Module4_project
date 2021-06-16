<!doctype html>
<?php include ('function.php')?>
<?php include ('flower.php')  ?>
<?php include ('tableOrder.php') ?>

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
				<li><a href="admin.php">Home</a></li>

				<li><a href="admin.php">New Item</a></li>
				
	            <li>
				    <form method="get" action="result.php" enctype="multipart/form-data">
						 <input type="text" name="user_query"/>
						 <input type="submit" name="search" value="search"/>
				<li>
				    </form>
	  
			</ul>	
			<table id="table_order">
				<thead>
				<tr>
				<th>Name</th>
				<th>LastName</th>
				<th>Email</th>
				<th>Address</th>
				<th>Phone</th>
				</tr>
				</thead>
				<tbody>
			    <tr>&nbsp;</tr>	
			    <tr>&nbsp;</tr>		
				<?php
				order_table();
				?>
				</tbody>
			</table>
				
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
		
		
	</body>
</html>
	
	