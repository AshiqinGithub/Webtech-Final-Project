<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//print_r($_SESSION['userdata']['Username']); //For debugging purpose
require '../controller/boothaccess.controller.php';
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
  <a href="bm.collect toll.php">Collect Toll</a>
  <a href="bm.history.php">Toll History</a>
  <!-- <a href="#Add your page link here">View Drivers</a> -->
  <a href="bm.view profile.php">View Profile</a>
  <a href="bm.edit profile.php">Edit Profile</a>
  <a href="bm.edit propic.php">Change Profile Picture</a>
  <a href="bm.change password.php">Change Password</a>
  <a href="bm.SearchDriver.php">Search Drivers</a>
  <a href="Logout.view.php">Logout</a>
</div>



</body>
</html>