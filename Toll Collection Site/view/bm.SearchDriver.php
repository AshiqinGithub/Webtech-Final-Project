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
	<title>Search</title>
	<style>
/*		*{
			font-family: Helvetica;
			font-size: 14px;
		}*/

		form{
			font-family: Helvetica;
			font-size: 14px;
			margin: auto;
			width: 300px;
			padding: 10px;
			margin-top: 30px;
			box-shadow: 0px 0px 10px #aaa;
			border-radius: 10px;
		}
		.search{
			width: 280px;
			padding: 10px;
			border-radius: 10px;
			border: solid thin #aaa;
			outline: none;
		}
		.results{
			width: 100%;
			padding-top: 4px;
			border-radius: 10px;
			border: solid thin #aaa;
			outline: none;
		}
		.results div:hover{
			background-color: #00cfff;
			color: white;
			cursor: pointer;
		}

		.hide{
			display: none;
		}

	</style>
</head>
<body>

	<?php require_once 'Header.view.php'; ?>
	<?php include 'bm.dashboard.php';?>

	<form>
		<h3>Search</h3>
		<input class ="search js-search" oninput="get_data(this.value)" type="text" name="" autofocus="true" placeholder="Username"><br>
		<div class="results js-results hide">
			<!-- <div>Mary</div>
			<div>John</div>
			<div>Tony</div> -->
		</div>
		<br>
		<br>
	</form>
	<div>&nbsp;</div>

	<?php require_once 'Footer.view.php'; ?>


</body>

<script src="../validations/bm.search.js" type="text/javascript"></script>
</html>