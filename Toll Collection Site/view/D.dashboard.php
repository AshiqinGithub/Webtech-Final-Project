<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//print_r($_SESSION['userdata']['Username']); //For debugging purpose
require '../controller/driveraccess.controller.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/sidebar.css" />
	<title></title>
</head>
<body>

<div class="sidebar">
  <!-- <a href="Dashboard.view.php">Dashboard</a> -->
  <a href="D.Profile.php">View Profile</a>
  <a href="D.Edit_Profile.php">Edit Profile</a>
  <a href="D.Profile_picture.php">Change Profile Picture</a>
  <a href="D.Change_pass.php">Change Password</a>
  <a href="D.transaction_history.php">View Transactions</a>
  <a href="D.view_info.php">Personal Informations</a>
  <a href="Logout.view.php">Logout</a>

</div>

</body>
</html>