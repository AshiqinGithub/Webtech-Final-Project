<?php

if(isset($_GET['id']))
{
	$id = $_GET['id'];

	include '../model/Dbconnect.model.php';

	$con = dbcon();

	//Reading from database
	$id = (int)$id;
	$sql = "SELECT * FROM users WHERE ID = '$id' limit 1";
	$stmt = $con->prepare($sql); //if prepare cause issue, switch to query
    $stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	//echo json_encode($result);

}