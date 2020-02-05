<!--Admin password change form-->
<html>
<head>
<title>Admin Page | Change Password</title>
<link rel="shortcut icon" href="logo/favicon1.ico">
<link rel="stylesheet" type="text/css" href="admin.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

</head>

<body  style="background-color: rgba(177,177,177,1.00)">
	<div id="header">

	</div>
	<div id="changeadmin">
		<div class="changelog">
			<form method="POST" action="changephp.php">
				<p>Email<span id="not"></span><input type="text" name="email" ></p>
			  	<p>Old Password<span id="not"></span><input type="text" name="oldpass" required autofocus></p>
				<p>New Password<span id="not1"></span><input type="password"  name="newpass" required ></p>
				<p><input type="submit" name="submit" value="Change">
				<a href="index.php"><button type="button" class="btn btn-primary">BACK</button></a></p>
			</form>		
		</div>
	</div>
</body>
</html>
