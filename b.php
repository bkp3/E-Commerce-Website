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
					$dl=$_GET['id'];
					$q="select * from product where id=$dl";
					$run=mysqli_query($conn,$q);
					
					$row=mysqli_fetch_array($run);
					
						//$id=$row['id'];
					$name=$row['name'];
					$brand=$row['brand'];
					$cat=$row['cat'];
					$price=$row['price'];
					$img=$row['img'];

					?>

					<div class="col-sm-4"><center><?php echo "<img src='admin/c/$img' width='150px' height='150px'>"?></center>
						
						<h4 align="center">Name :- <?php echo $name; ?><h4>
						<h4 align="center">Brand :- <?php echo $brand; ?><h4>
						<h4 align="center">Price :- <?php echo $price; ?><h4>
						
					</div>
					<form action="" method="POST">
					<table class="table">
						<tr>
							<td>Full Name</td>
							<td><input type="text" name="n1" placeholder="Enter your name" class="form-control" required="required"></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><input type="text" name="add" placeholder="Enter your address" class="form-control" required="required"></td>
						</tr>
						<tr>
							<td>City</td>
							<td><input type="text" name="city" placeholder="Enter your city" class="form-control" required="required"></td>
						</tr>
						<tr>
							<td>State</td>
							<td><input type="text" name="state" placeholder="Enter your state" class="form-control" required="required"></td>
						</tr>
						<tr>
							<td>Mobile Number</td>
							<td><input type="text" name="mno" placeholder="Enter your mobile number" class="form-control" required="required"></td>
						</tr>
						<tr>
							<td>Pin Code</td>
							<td><input type="text" name="pin" placeholder="Enter your pincode" class="form-control" required="required"></td>
						</tr>

						<tr>
							<td colspane="2" align="right"><input type="submit" name="sub" value="Buy Now" class="btn btn-primary"></td>
						</tr>
					</table>
				</form>
				<?php
				if(isset($_POST['sub']))
				{
					$n1=$_POST['n1'];
					$add=$_POST['add'];
					$city=$_POST['city'];
					$state=$_POST['state'];
					$mno=$_POST['mno'];
					$pin=$_POST['pin'];
					$q="INSERT INTO sell (pname,brand,cat,price,name,address,city,state,mno,pin) VALUES('$name','$brand','$cat','$price','$n1','$add','$city','$state','$mno','$pin')";
					

					if(mysqli_query($conn,$q))
					{
						echo "<script>alert('Data Save')</script>";
					}
					else
					{
						echo mysqli_error($conn);
	
						//echo "<script>alert('Data not Save')</script>";
					}
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