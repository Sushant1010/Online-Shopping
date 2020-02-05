<?php
	include "connect.php";
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	session_start();

	if(is_array($_COOKIE['item']))  //this is for check cookies are available or not
	{
		foreach($_COOKIE['item'] as $name1 => $value) //this is for looping as per cookies if 3 cookies then loop move 3 times
		{
			if(isset($_POST["delete$name1"]))   //this is for checking update button pressed or not
			{
				setcookie("item[$name1]", ""  ,time()-1800);
				?>
				<script type="text/javascript">
					window.location.href = window.location.href;
				</script>
				<?php
			}
		}
	}

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
		<div class="bg-primary prodhead">Cart</div>
		<div style="padding-top: 10px;"> </div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<?php
						$d = 0;
						if(is_array($_COOKIE['item'])) //this is for cookie is available or not
						{
							$d = $d+1;

						}

						if($d == 0)
						{
							echo "no record available in cart";
							echo "<br><br><br><br>";
						}
						else
						{
					?>
					<thead>
						<tr align="center" class="cart_menu bg-primary">
							<td class="image ">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php
						foreach($_COOKIE['item'] as $name1 => $value) //this is for looping as per cookies if 3 cookies then loop move
						{
							$values11 = explode("__", $value);
						?>
						<tr align="center">
							<td class="cart_product">
								<a href=""><img src="../admin/image/<?php echo $values11['0'] ?>" alt="" height="100" width="100"></a>
							</td>
							<td class="cart_description">
								<h4><a href="<?php echo $values11['1'] ?>.php"><?php echo $values11['1'] ?></a></h4>
							</td>
							<td class="cart_price">
								<h4><?php echo $currency.$values11['2'] ?></h4>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<h4>
									<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $values11['3'] ?>" autocomplete="off" size="2" style="border: none; background-color: #ebebeb; text-align: center;" readonly>
									</h4>
								</div>
							</td>
							<td class="cart_total">
								<h4 class="cart_total_price"><?php echo $currency.$values11['4'] ?></h4>
							</td>
							<td>
								<form action="" method="post">
									<center style="padding-top: 5px;">
										<input type="submit" class="btn btn-sm btn-danger" name="delete<?php echo $name1; ?>" value="del" id="s3">
									</center>
								</form>
							</td>
						</tr>	

						<?php

						}


					?>	
						<tr align="center" class="text-danger" style="font-size: 16px; font-weight: bold">
							<td colspan="4" class="cart_total"">
								<p class="cart_total_price" style="padding-top: 5px;">Total</p>
							</td>
							<td class="cart_total"><p class="cart_total_price" style="padding-top: 5px;">
								<?php

									}
									$tot = 0;
									if(is_array($_COOKIE['item']))  //this is for check cookies are available or not
									{
										foreach($_COOKIE['item'] as $name1 => $value) //this is for looping as per cookies if 3 cookies then loop move
										{
											$values11 = explode("__", $value);
											$tot = $tot+$values11[4];
										}
										echo $currency.$tot;
										$_SESSION["pay"] = $tot; //use from paypal.php
									}
								?>
							</p>	
							</td>
							<td>
								<center>
									<a href="checkout.php">
									<input type="button" class="btn btn-sm btn-success" name="" value="checkout">
									</a>
								</center>
							</td>
						</tr>	
					</tbody>
				</table>	
			</div>
		</div>

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
