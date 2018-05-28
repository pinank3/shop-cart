<?php 
	require_once "../models/db_project.php";
?>	
	<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="../assets/css/style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
  </head>
<body>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse ">
	<div class="topNav">
		<div class="container">
			<div style="text-align:right;">
				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>
				<a class="active" href="index.php"> <span class="icon-home"></span> Home</a>   
				<a href="contact.html"><span class="icon-envelope"></span> Contact us</a>
				<a href="cart.php"><span class="icon-shopping-cart"></span>Cart</a>
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="index.php"> 
		<img src="../assets/img/logo-bootstrap-shoping-cart.png" alt="bootstrap sexy shop">
	</a>
	</h1>
	</div>
	<div class="span4">
	<div class="offerNoteWrapper">
	<h1 class="dotmark">
	<i class="icon-cut"></i>
		Shopping cart PHP
	</h1>
	</div>
	</div>
</div>
</header>


<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav ">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="#">User Panel<i class="fa fa-angle-down"></i></a>
                                    	<?php
                                    		if(!isset($_SESSION['project_name'])):
                                    	?>
                                       	<li><a href="login.php">Login</a></li>
                                       	<?php
                                       	endif;
                                       	?>
                                       	<?php
                                    		if(isset($_SESSION['project_name'])):
                                    	?>
                                       	<li><a href="add-category.php">Add Category</a></li>
                                       	<li><a href="add-product.php">Add Product</a></li>
                                       	<li><a href="change-password.php">Change Password</a></li>
                                       	<li><a href="logout.php">Logout</a></li>
                                       	 <?php
                                       	endif;
                                       	?>
                                </li> 
								
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			
		  </div>
		</div>
	  </div>
	</div>