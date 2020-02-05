<!--Admin Password change process-->
<?php
	include "admindbcon.php";
	if(isset($_POST['submit']))
	{
		$oldpass = $_POST['oldpass'];
		$newpass = $_POST['newpass'];

		$result = mysqli_query($link,"UPDATE adminl SET password = '$newpass' where password = '$oldpass'");
		$row = mysqli_fetch_assoc($result);
		if($result)
		{
			session_start();
			$_SESSION['ID'] = $row['id'];
			header('location:change.php');
		}
		else
		{
			header('location:changepassword.php');
		}
	}
?>