<?php
	include "connect.php";
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

		<?php
			//define how many results you want per page
			$results_per_page = 8;

			$query = "SELECT * FROM prod";
			$result = mysqli_query($con,$query);

			$number_of_results = mysqli_num_rows($result);
			//determine number of total pages available
			$number_of_pages = ceil($number_of_results/$results_per_page);

			if (!isset($_GET['page']))
			{
				$page = 1;
			}
			else
			{
				$page = $_GET['page'];
			}

			//determine the sql LIMIT starting number for the result on the displaying page
			$this_page_first_result = ($page-1)*$results_per_page;

			//retrieve selected results from database and display them on page
			$sql = "SELECT * FROM prod LIMIT " . $this_page_first_result . ', ' . $results_per_page;
			$result = mysqli_query($con,$sql);
		?>
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
		<div class="bg-primary prodhead">Products</div>
			<?php
				while($row = mysqli_fetch_assoc($result))
				{
			?>
			<div class="col-md-3" style="padding-top: 10px;">
				<div class="mini-detail">
					<img src="../admin/image/<?php echo $row['image']; ?>" height="200px" width="153px">
					<div class="overlay">
	    				<div class="text">
	    					<?php echo $row['pname'] ?><br> <?php echo $row['model']; ?><br>
	    					<?php echo $currency." ".$row['price'];?><br>
	    					<a class="btn btn-danger" style="opacity: 1 !important;" href="itemDisplay.php?id=<?php echo $row['id']; ?>">DETAIL</a>
	    				</div>
	  				</div>
	  			</div>
			</div>

			<?php
				}
			?>
			<div class="clearfix">&nbsp;</div>
			<?php
			//display the links to the pages
			for($page = 1;$page <= $number_of_pages; $page++)
			{
				echo '<a class="btn btn-primary" style="margin-left:5px;" href="index.php?page='.$page.'">'.$page.'</a>';

			}

		?>
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
