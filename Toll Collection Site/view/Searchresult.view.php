<?php

$page = '';

require_once '../controller/Searchresult.controller.php';

// if(isset($_GET['id']))
// {
// 	$id = $_GET['id'];

// 	include '../model/Dbconnect.model.php';

// 	$con = dbcon();

// 	//Reading from database
// 	$id = (int)$id;
// 	$sql = "SELECT * FROM users WHERE ID = '$id' limit 1";
// 	$stmt = $con->prepare($sql); //if prepare cause issue, switch to query
//     $stmt->execute();
// 	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 	//echo json_encode($result);

// }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Result</title>
</head>
<style>
		/**{
			font-family: Helvetica;
			font-size: 14px;
		}*/

		.form{
			font-family: Poppins;
			font-size: 14px;
			margin: auto;
			width: 300px;
			padding: 10px;
			margin-top: 30px;
			box-shadow: 0px 0px 10px #aaa;
			border-radius: 10px;
		}
</style>
<body>
	<?php require_once 'Header.view.php'; ?>
	<?php include_once 'adminmenu.view.php';?>
	<?php include_once 'Ajaxsearch.view.php';?>

	<div class="form">
		<?php if(isset($result) && is_array($result)):?>
		<br>
		<div>First Name: <?=$result[0]['First_name']?></div><br>
		<div>Last Name: <?=$result[0]['Last_name']?></div><br>
		<div>Username: <?=$result[0]['Username']?></div><br>
		<div>Email: <?=$result[0]['Email']?></div><br>
		<div>Gender: <?=$result[0]['Gender']?></div><br>
		<div>Date of Birth: <?=$result[0]['Dob']?></div><br>
	    <?php else:?>
	    	<div>Sorry, the searched record no longer exists</div>
	    <?php endif;?>
	</div>

	<div>&nbsp;</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<?php require_once 'Footer.view.php'; ?>
</body>
</html>