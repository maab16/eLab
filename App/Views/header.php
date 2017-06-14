<!DOCTYPE html>
<html>
<head>
	<title>Next IT Online Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="/images/icon/icon.ico" />
	<link rel="icon" href="/images/icon/animate.gif" type="image/gif" />
	<link rel="stylesheet" type="text/css" href="/styles/style.css"/>
	<link rel="stylesheet" type="text/css" href="/styles/jquery-ui.css"/>
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-theme.css"/>
	<link rel="stylesheet" type="text/html" href="/font-awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="/styles/star-rating.css"/>
	<link rel="stylesheet" type="text/css" href="/styles/star-rating-theme.css"/>
	
	<link rel="stylesheet" type="text/css" href="/styles/slider.css"/>
	<link rel="stylesheet" type="text/css" href="/styles/carousel-multi-img.css"/>
	
	<style type="text/css">
		#linkList .activeLink span{

			background-color: orange;
		}
		.inactiveLink{

			background-color: none;
		}
	</style>
	
</head>
<body>
<div class="container-fluid">
	<div class="container header">
		<div class="col-sm-12">
			<div class="header_top animation" style="position:relative">
				<div class="navbar navbar-default">
					<div class="col-md-4">
						<div class="navbar-header">
							<a id="fontAnimation" class="no-display" href="/">NextIT</a>
							
							<a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							    <span class="icon-bar"></span>
							    <span class="icon-bar"></span>
							    <span class="icon-bar"></span>
							</a>
						</div>
					</div>
					<div class="col-md-8">
						<div class="navbar-collapse collapse" id="slideRight">
						<?php 
							$user = \Blab\Libs\Blab_User::getUserInstance();
						?>
							<ul class="nav navbar-nav cart">
								<?php

									if (!$user->isLoggedIn()) {
										
										echo '<li><a href="/users/register/" ><span class="glyphicon glyphicon-book" aria-hidden="true"></span>Register</a></li>';
									}
								?>
								
								<li><a href="/home/contact/"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Contact Us</a></li>
								<li><a href="/products/checkout/" id="checkout_link"><span class="glyphicon glyphicon glyphicon-send" aria-hidden="true"></span>Checkout</a></li>
								<li><a href="/products/cart/" id="cart_link"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span><span id="cart_item">Cart(0)</span></a></li>
								<?php

		   							if ($user->isLoggedIn()) {
								?>
								<li>
									<a href="/dashboard/">
										<img src="/images/users/abuahsan.jpg" />
										<span class="user_name"><?php echo $user->data()->fname;?></span>
									</a>
								</li>
								<li><a href="/users/logout/"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>Logout</a></li>
								<?php
									}else{
								?>
								<li><a href="/users/login/"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>Login</a></li>
								<?php
									}
								?>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>

		<div class="col-sm-12">
			<form id="search-form">
				<div class="input-group  fixed_search">
					<input type="text" name="search" class="form-control" placeholder="Search">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit" name="submit">
							<span class=" glyphicon glyphicon-search"></span>
						</button>
					</span>
				</div>
			</form>
			
		</div>
	</div>
</div>
	