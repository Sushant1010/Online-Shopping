<!--admin username and password checking-->
<!--admin entered process-->
<?php
	include "admindbcon.php";
	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$result = mysqli_query($link,"SELECT * FROM adminl WHERE  username='$username' and password='$password'");
		$row = mysqli_fetch_assoc($result);
		if(mysqli_num_rows($result) == 1)
		{
			session_start();
			$_SESSION['ID'] = $row['id'];
			header('location:productdisplay.php');
		}
		else
		{
			header('location:index.php');
		}
	}
	
?>