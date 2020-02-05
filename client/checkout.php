<?php
	include "connect.php";
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="image/favicon1.ico">
<link rel="stylesheet" type="text/css" href="index1.css">
<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<link rel="stylesheet" type="text/css" href="slide.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css1/mystyle.css">
<link rel="stylesheet"  href="css1/bootstrap.min.css">
<script type="text/javascript" src="slide.js"></script>
<style type="text/css">
	tr {
  height: 15px !important;
}

input[type="text"],
input[type="password"] {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 300px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}
input[type="submit"]:hover,
input[type="submit"]:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

input[type="submit"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}
</style>
</head>

<body>
<?php include "header.php" ?>
<?php include "slide.php" ?>	

<div id="content" style="padding-top: 5px;">
<div class="clearfix"></div>
<div>
	<center>
	<div class="row" style="width: 100%;">
		<div class="col-md-2"><div class="list-group">
		<div class="bg-primary prodhead" style="margin-bottom: 10px;">Category</div>
				<a href="index.php" class="list-group-item">All</a>
				<a href="category_product.php?product=<?php echo 'Apple' ?>" class="list-group-item ">Apple</a>
				<a href="category_product.php?product=<?php echo 'Samsung' ?>" class="list-group-item">Samsung</a>
				<a href="category_product.php?product=<?php echo 'Xiaomi' ?>" class="list-group-item">Xiaomi</a>
				<a href="category_product.php?product=<?php echo 'Nokia' ?>" class="list-group-item">Nokia</a>
				<a href="category_product.php?product=<?php echo 'LG' ?>" class="list-group-item">L.G.</a>
				<a href="category_product.php?product=<?php echo 'HTC' ?>" class="list-group-item">HTC</a>
				<a href="category_product.php?product=<?php echo 'Lenevo' ?>" class="list-group-item">Lenevo</a>
				<a href="category_product.php?product=<?php echo 'Sony' ?>" class="list-group-item">Sony</a>
				<a href="category_product.php?product=<?php echo 'Micromax' ?>" class="list-group-item">Micromax</a>
				<a href="category_product.php?product=<?php echo 'Huawei' ?>" class="list-group-item">Huawei</a>

			</div>
		</div>
		<div class="col-md-8">
			<div class="bg-primary prodhead">Checkout</div>
				<div class="form-group" style="width: 300px; padding-top: 10px;">
					<form name="form1" action="" method="POST">
						<label class="text text-primary font-weight-bold form-control-static" style="font-size: 19px;" >Enter your information</label>
						<p><input type="text" class="form-control" name="firstname" placeholder="First Name" required pattern="[A-Za-z]+" title="Enter only alfabate"></p>
						<p><input type="text" class="form-control" name="lastname" placeholder="Last Name" required pattern="[A-Za-z]+" title="Enter only alfabate"></p>
						<p><input type="text" class="form-control" name="email" placeholder="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please enter valid email address"></p>
						<p><input type="text" class="form-control" name="resi" placeholder="Resi. Address" required ></p>
						<p><input type="text" class="form-control" name="city" placeholder="City" required pattern="[A-Za-z]+" title="Please enter valid city"></p>
						<p><input type="text" class="form-control" name="pincode" placeholder="Pincode" required pattern="[0-9]{6}" title="Please enter valid 6 digit pincode"></p>
						<p><input type="text" class="form-control" name="cno" placeholder="Contact no." required pattern="[0-9]{10}" title="Please enter valid 10 digit contact number"></p>
						<p><input type="submit" style="width: 300px; color: white; font-weight: bold; font-size: 16px;" class="btn btn-primary" name="submit1" value="CONTINUE"></p>
					</form>
				</div>
			</div>
			<?php
				if(isset($_POST['submit1']))
				{
					$firstname = $_POST['firstname'];
					$lastname = $_POST['lastname'];
					$email = $_POST['email'];
					$resi = $_POST['resi'];
					$city = $_POST['city'];
					$pincode = $_POST['pincode'];
					$cno = $_POST['cno'];
					$query = "INSERT INTO checkout_address(firstname,lastname,email,address,city,pincode,contactno ) VALUES('$firstname','$lastname','$email','$resi','$city','$pincode','$cno')";
					$result = mysqli_query($con,$query);

					$res = mysqli_query($con, "SELECT id FROM checkout_address ORDER BY id DESC LIMIT 1"); //
					while($row = mysqli_fetch_array($res))												   //
					{																						//
						$_SESSION["order_id"] = $row['id'];													//
					}
					?>
					<script type="text/javascript">
						alert("click ok to transferring to you in Payment System");

						setTimeout(function(){
							window.location = "transferring.php";
						});
					</script>	
					<?php																					// from paypal.php
				}
			?>
		<?php include "new.php" ?>
	</div>
</center>
</div>

<?php include "footer.php" ?>
	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
	<!-- <script>window.jQuery || document.write('<script src="../../assets/js/jquery.min.js"><\/script>')</script> -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
