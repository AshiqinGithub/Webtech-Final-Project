<?php
session_start();
require '../controller/admpageaccess.controller.php';
$page = 'Profile';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Profile</title>
	<style>
		.admpdiv{
			font-family: Poppins;
		}
		.div1{
			font-weight: bold;
			float: left;
			margin: auto;
			width: 500px;
			padding: 20px 100px 20px 20px;
			margin-top: 30px;
			box-shadow: 0px 0px 10px #aaa;
			border-radius: 10px;
		}
		.div2{
			font-weight: bold;
			float: right;
			padding: 20px 20xpx 20px 100px;
			margin: auto;
			width: 500px;
			padding: 10px;
			margin-top: 30px;
			box-shadow: 0px 0px 10px #aaa;
			border-radius: 10px;
		}
	</style>
	<script src="../css/card.css"></script>
</head>
<body class="cardbody cardbox">

	<?php require_once 'Header.view.php'; ?>
	<?php include_once 'adminmenu.view.php';?>

	<div class="container admpdiv">
		<?php if(isset($_SESSION['userdata'])):?>
			<div>
				<!-- Profile Name -->
				<!-- <div class="div1"> Hello <?php //echo $_SESSION['userdata']['First_name']; echo'&nbsp'; echo $_SESSION['userdata']['Last_name'];?></div> -->
			</div>
			<div>
				<!-- Profile Picture -->
				<!-- <div class="div2"> <img src="uploads/<?php // echo $_SESSION['userdata']['Picture']?>"></div> -->
			</div>

		<br>
	<!-- 	<div>First Name: <?//=$_SESSION['userdata']['First_name']?></div><br>
		<div>Last Name: <?//=$_SESSION['userdata']['Last_name']?></div><br>
		<div>Username: <?//=$_SESSION['userdata']['Username']?></div><br>
		<div>Email: <?//=$_SESSION['userdata']['Email']?></div><br>
		<div>Gender: <?//=$_SESSION['userdata']['Gender']?></div><br>
		<div>Date of Birth: <?//=$_SESSION['userdata']['Dob']?></div><br> -->
	    <?php else:?>
	    	<div>Sorry, something went wrong</div>
	    <?php endif;?>
	</div>

	<div>&nbsp;</div>

	<div class="row">
  <div class="column">
    <div class="card">
      <h3>Card 1</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Card 2</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Card 3</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Card 4</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
</div>

	
	<?php require_once 'Footer.view.php'; ?>

</body>
</html>