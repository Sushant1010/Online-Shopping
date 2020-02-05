<!--Admin password change result-->
<html>
<head>
<title>Admin Page | Change Password</title>
<link rel="shortcut icon" href="logo/favicon1.ico">
<link rel="stylesheet" type="text/css" href="admin.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<style type="text/css">
	#changea {
		  position: relative;
		  margin: 5% auto;
		  width: 310px;
		  height: 260px;
		  background-color: rgba(255,0,0,0.1);
		  border-radius: 2px;
		  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
	}
	.changel {
		  position: absolute;
		  top: 0;
		  left: 0;
		  box-sizing: border-box;
		  background-color: rgba(255,255,255,1.00);
		  padding: 40px;
		  width: 300px;
		  height: 250px;
		  box-shadow: 0 2px 4px rgba(0,0,0,0.4);
		}
</style>
</head>

<body>
	<?php include "header.php" ?>
	<div id="changea">
		<div class="changel">
			<center>Password Successfully Changed.....</center><br>
			<center>
				<a href="index.php" class="btn btn-primary" title="">HOME</a>
			</center>	
		</div>
	</div>
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
