
<?php 

	session_start();

	if (isset($_SESSION['userdata']['Username'])) {
		session_destroy();
		header("location:login.php");
	}
	else{
		header("location:login.php");
	}

 ?>
