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
									<li ><a href="pro.php"><font color="white">Product</font></a></li>
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
			<h1 align="center">product List</h1><br><br>
			<table class="table">
				<tr>
					<td style="font-weight: bold";>Product Name</td>
					<td style="font-weight: bold";>Brand</td>
					<td style="font-weight: bold";>Cat</td>
					<td style="font-weight: bold";>Price</td>
					<td style="font-weight: bold";>Edit</td>
					<td style="font-weight: bold";>delete</td>
					
				</tr>
				<?php
				$q="select * from product";
				$run=mysqli_query($conn,$q);
				while($row=mysqli_fetch_array($run))
				{
					$pid=$row['id'];
					$pname=$row['name'];
					$brand=$row['brand'];
					$cat=$row['cat'];
					$price=$row['price'];
					
				?>
				<tr>
					<td><?php echo $pname; ?></td>
					<td><?php echo $brand; ?></td>
					<td><?php echo $cat; ?></td>
					<td><?php echo $price; ?></td>
					<td><?php echo "edit"; ?></td>
					<td><a href="delete.php?id=<?php echo $pid;?>" class="btn btn-primary">delete</a></td>
				</tr>
				<?php


				}

				?>

			</table>

		</div>









		<dir class="container" style="background-color: orange;color:purple;">
			<p align="center">copyright</p>
		</dir>

	</div>
	

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>