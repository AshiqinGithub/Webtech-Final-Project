<?php
//$data = file_get_contents("php://input"); //retreives from input

if(count($_POST) > 0)
{
	$text = $_POST['text'];

	include '../model/Dbconnect.model.php';

	$con = dbcon();

	//Reading from database
	//$text = addslashes($text);
	$sql = "SELECT * FROM users WHERE First_name LIKE '$text%' ";
	$stmt = $con->prepare($sql); //if prepare cause issue, switch to query
    $stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($result);
	


}