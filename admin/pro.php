<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE-edge"/>
	<meta name="viewport" content="width-device-width"/>
	<title>Hello World</title>
	<meta http-equiv="Content-Type" content="text/html; charset-iso-8859-1"/>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="styesheet" href="css/style.css"/>

</head>
<body>

	<div class="container-fluid">
		
		<div class="container-fluid" style="background-color: black; color:red;">
		
			<div class="container">
				<p class="pull-right">E-mail:bholakumar.7372@gmail.com</p>
			</div>
		
		</div>

		<div class="container">
			<h1><font face="Centaur">My Shop</font></h1>
		</div>
		
		<div class="container">

			<div class="container" style="background-color: green;color:red;">
				<div class="row">
					<div class="col-sm-12 mymanu">
						
						<nav class="navbar">
							
							<div class="navbar-header">
								
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mystyle">
									<span class="icon-bar">--</span>
									<span class="icon-bar">--</span>
									<span class="icon-bar">--</span>
								</button>
							</div>
							<div class="collapse navbar-collapse" id="mystyle">
								<ul class="nav navbar-nav">
									
									<li><a href="ahome.php" class="active"><font color="white">Home</font></a></li>
									<li ><a href="#"><font color="white">Product</font></a></li>
									<li ><a href="sell.php"><font color="white">Sell</font></a></li>
									<li ><a href="index.php"><font color="white">Log out</font></a></li>
								</ul>
								
							</div>
						</nav>
					</div>

				</div>
			</div>


		</div>

		<div class="container">
			<h1><center>Product Home</center></h1><br><br>
			<h2><a href="ip.php" style="color:blue;">Insert Product</a></h2>
			<h2><a href="pl.php" style="color:blue;">Product List</a></h2>
			


		</div>









		<dir class="container" style="background-color: orange;color:purple;">
			<p align="center">copyright</p>
		</dir>

	</div>
	

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>