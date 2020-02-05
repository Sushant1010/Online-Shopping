<!--Admin panel first page or admin entered form-->
<?php
	include "admindbcon.php";
	session_start();

	if(isset($_SESSION['ID']))
	{
		header('location:productdisplay.php');
	}
	
?>
<html>
<head>
<title>Admin Page | Login</title>
<link rel="stylesheet" type="text/css" href="admin.css">
<link rel="shortcut icon" href="logo/favicon1.ico">

</head>

<body  style="background-color: rgba(177,177,177,1.00)">
	<div id="header">
		
	</div>
	<div id="admin">
		<div class="log">
		<form method="POST" action="login.php">
			
		  <p>User name<span id="not"></span><input type="text" name="username" required autofocus></p>
			<p>Password<span id="not1"></span><input type="password"  name="password" required ></p>
			<p><input type="submit" name="submit" value="submit">
				<a class="forget" href="changepassword.php">Change Password</a></p>
		</form>		
		</div>
	</div>
</body>
</html>
