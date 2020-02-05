<?php
	$id = $_GET['id'];
	include "connect.php";
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	if(isset($_POST['submit1']))
	{
		$d = 0;
		if(is_array($_COOKIE['item'])) //this is for cookie is available or not
		{
			foreach($_COOKIE['item'] as $name => $value)//if item is already available in cart
			{
				$d = $d+1;
			}
			$d = $d+1;
		}
		else
		{
			$d = $d+1;
		}

		//to get item description from table
		$res3 = mysqli_query($con,"select * from prod where id = '$id'");
		while($row3 = mysqli_fetch_array($res3))
		{
			$img1 = $row3["image"];
			$nm = $row3["pname"];
			$price = $row3["price"];
			$qty = "1";
			$total = $price*$qty;
		}
		if(is_array($_COOKIE['item'])) //this is for cookie is available or not
		{
			foreach($_COOKIE['item'] as $name1 => $value) //this is for looping as per cookies if 3 cookies then loop move
			{
				$values11 = explode("__", $value);
				$found = 0;
				if($img1 == $values11[0]) //this is for check same cookies available or not if available then increase quantity
				{
					//check here for quantity add in the cart for more than available quantity
					$found = $found+1;
					$qty = $values11[3]+1;

					$tb_qty;
					$res = mysqli_query($con,"select * from prod where image = '$img1'");
					while($row = mysqli_fetch_array($res))
					{
						$tb_qty = $row["quantity"];
					}

					if($tb_qty < $qty)
					{
						?>
							<script type="text/javascript">
								alert("This much quantity not available.");
							</script>

						<?php
					}
					else
					{
						$total = $values11[2]*$qty;
						setcookie("item[$name1]",$img1."__".$nm."__".$price."__".$qty."__".$total,time()+1800);//item['$name1'] is cookies position
					}
				}
			}

			if($found == 0)
			{
				$tb_qty;
				$res = mysqli_query($con,"select * from prod where image = '$img1'");
				while($row = mysqli_fetch_array($res))
				{
					$tb_qty = $row["quantity"];
				}

				if($tb_qty < $qty)
				{
					?>
						<script type="text/javascript">
							alert("This much quantity not available.");
						</script>

					<?php
				}
				else
				{
					setcookie("item[$d]",$img1."__".$nm."__".$price."__".$qty."__".$total,time()+1800); //new
				}
			}
		}
		else
		{
			$tb_qty;
			$res = mysqli_query($con,"select * from prod where image = '$img1'");
			while($row = mysqli_fetch_array($res))
			{
				$tb_qty = $row["quantity"];
			}

			if($tb_qty < $qty)
			{
				?>
					<script type="text/javascript">
						alert("This much quantity not available.");
					</script>

				<?php
			}
			else
			{
				setcookie("item[$d]",$img1."__".$nm."__".$price."__".$qty."__".$total,time()+1800); //new
			}
		}
	}

	if(isset($_POST['submit1']))
	{
		header('location:cart.php');
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
<link rel="stylesheet" href="css1/mystyle.css">
<link rel="stylesheet"  href="css1/bootstrap.min.css">
<script type="text/javascript" src="slide.js"></script>
</head>

<body>
<?php include "slide.php" ?>
<?php include "header.php" ?>	

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
		<?php
			$id = $_GET['id'];
			$db = mysqli_connect("localhost","root","","admin");
			$sql = "SELECT * FROM prod WHERE id='$id' ";
			$result = mysqli_query($db,$sql);
			while($row = mysqli_fetch_assoc($result))
			{	
		?>
		<div class="bg-primary prodhead"><?php echo $row['pname']." : ".$row['model']?></div>
		<?php
			}
		?>
		<div style="padding-top: 10px;">
			<table class='table table-striped table-hover'>
			<tbody>
				<tr>
				<!-- For product details -->
					<?php
						$id = $_GET['id'];
						$db = mysqli_connect("localhost","root","","admin");
						$sql = "SELECT * FROM prod WHERE id='$id' ";
						$result = mysqli_query($db,$sql);
						while($row = mysqli_fetch_assoc($result))
						{	
					?>
					<td>
						<div style="height: 365px; width: 420px;">
							<img src="../admin/image/<?php echo $row['image'] ?>" style="height: 365px; width: 450px;">					
						</div>
						<div class="text text-danger" style="font-weight: bold;">
							<table class='table table-striped table-hover'>
								<tr>
									<td align="right">
										<p><h5 style="font-weight: bold;">Price:</h5></p>
									</td>
									<td align="right">
										<p><h5 style="font-weight: bold;">Rs.<?php echo $row['price']?>/-</h5></p>
									</td>
									<td align="right">
										<form name="form1" action="" method="POST">
											<button class="btn btn-success btn-sm" type="submit" name="submit1">ADD TO BAG</button>
										</form>
									</td>
								</tr>
							</table>
						</div>
					</td>
					<?php
						}
					?>
					
				<!-- For product specification -->
					<?php
						$id = $_GET['id'];
						$db = mysqli_connect("localhost","root","","admin");
						$sql = "SELECT * FROM product_specification WHERE id='$id' ";
						$result = mysqli_query($db,$sql);
						while($row = mysqli_fetch_assoc($result))
						{	
					?>
					<td>
						<table class='table table-striped table-hover'>
							<tr>
								<td>
									<p><h5 style="font-weight: bold;">Released Date:</h5></p>
								</td>
								<td>
									<p><h5 style="font-weight: bold;"><?php echo $row['released_date']?></h5></p>
								</td>
							</tr>
							<tr>
								<td>
									<p><h5 style="font-weight: bold;">Thickness: </h5></p>
								</td>
								<td>
									<p><h5 style="font-weight: bold;"><?php echo $row['weight']?>, <?php echo $row['thickness']?> thickness</h5></p>
								</td>
							</tr>
							<tr>
								<td>
									<p><h5 style="font-weight: bold;">OS Version: </h5></p>
								</td>
								<td>	
									<p><h5 style="font-weight: bold;"><?php echo $row['os_version']?></h5></p>
								</td>
							</tr>
							<tr>
								<td>
									<p><h5 style="font-weight: bold;">RAM: </h5></p>
								</td>
								<td>
									<p><h5 style="font-weight: bold;"><?php echo $row['ram']?></h5></p>
								</td>
							</tr>
							<tr>
								<td>							
									<p><h5 style="font-weight: bold;">ROM: </h5></p>
								</td>
								<td>
									<p><h5 style="font-weight: bold;"><?php echo $row['rom']?></h5></p>
								</td>
							</tr>
							<tr>
								<td>									
									<p><h5 style="font-weight: bold;">Screen Size: </h5></p>
								</td>
								<td>
									<p><h5 style="font-weight: bold;"><?php echo $row['screen']?>", <?php echo $row['resolution']?></h5></p>
								</td>
							</tr>
							<tr>
								<td>
									<p><h5 style="font-weight: bold;">Camera: </h5></p></h5></p>
								</td>
								<td>
									<p><h5 style="font-weight: bold;">Rear: <?php echo $row['rear_camera']?> | Front: <?php echo $row['front_camera']?></h5></p>
								</td>
							</tr>
							<tr>
								<td>
									<p><h5 style="font-weight: bold;">Battery Capacity: </h5></p>
								</td>
								<td>
									<p><h5 style="font-weight: bold;"><?php echo $row['battery']?> mAh</h5></p>
								</td>
							</tr>
	
						</table>
					</td>
					<?php
						}
					?>
					
				</tr>
			</tbody>		
			</table>
			</div>
		</div>
	<?php include "new.php"; ?>
</center>
</div>

<?php include "footer.php" ?>
	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
	<!-- <script>window.jQuery || document.write('<script src="../../assets/js/jquery.min.js"><\/script>')</script> -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
