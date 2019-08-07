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
									
									<li><a href="index.php" class="active"><font color="white">Home</font></a></li>
									<li ><a href="#"><font color="white">About us</font></a></li>
									<li ><a href="#"><font color="white">Contact us</font></a></li>
									<li ><a href="#"><font color="white">Help</font></a></li>
								</ul>
								
							</div>
						</nav>
					</div>

				</div>
			</div>


		</div>

		<div class="container">
			<div class="col-sm-2" style="background-color: black; color: white">
				
				<h1 align="center">Brands</h1>
					<center>	<p> <a href="dell.php" style="color:white">Dell</a></p><br>
						<p><a href="hp.php" style="color:white">HP</a></p><br>
						<p><a href="sam.php" style="color:white">Samsung</a></p><br>
						<p><a href="can.php" style="color:white">Canon</a></p><br> </center>

				<h1 align="center">Category</h1>
					<center>	<p><a href="lap.php" style="color:white">Laptop</a></p><br>
						<p><a href="mb.php" style="color:white">Mobile</a></p><br>
						<p><a href="cam.php" style="color:white">Camera</a></p><br>
						<p><a href="tv.php" style="color:white">Television</a></p><br> </center>


			</div>
			<div class="col-sm-10"><br>
				
				<?php
					$dl="can";
					$q="select * from product where brand like '%$dl%'";
					$run=mysqli_query($conn,$q);
					
					while($row=mysqli_fetch_array($run))
					{
						$id=$row['id'];
						$name=$row['name'];
						$price=$row['price'];
						$img=$row['img'];

					?>

					<div class="col-sm-4"><center><?php echo "<img src='admin/c/$img' width='150px' height='150px'>"?></center><br>
						<h4 align="center"><?php echo $name; ?><h4>
							<h4 align="center">Rs. <?php echo $price; ?><h4>
						<center><a href="b.php?id=<?php echo $id;?>" class="btn btn-primary">Buy Now</a></center>
						</div>
							<?php	
						}
					?>

			</div>
		</div>










		<dir class="container" style="background-color: orange;color:purple;">
			<p align="center">copyright</p>
		</dir>

	</div>
	

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>