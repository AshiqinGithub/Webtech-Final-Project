<?php

require_once '../model/Dbconnect.model.php';

$fname      = $_POST['fname'];
$lname      = $_POST['lname'];
$uname      = $_POST['username'];
$mail       = $_POST['email'];
$passenc    = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$pass       = $passenc;
$gender     = $_POST['gender'];
$dob        = $_POST['dob'];

try
{
	$con = dbcon();
	$sqlquery = 'INSERT INTO users (Username, Email, First_name, Last_name, Password, Gender, Dob) VALUES (:username, :email, :fname, :lname, :pass, :gender, :dob)';
	$stmt = $con->prepare($sqlquery);
	
	$stmt->bindParam(':username',$uname);
	$stmt->bindParam(':email',$mail);
	$stmt->bindParam(':fname',$fname);
	$stmt->bindParam(':lname',$lname);
	$stmt->bindParam(':pass',$pass);
	$stmt->bindParam(':gender',$gender);
	$stmt->bindParam(':dob',$dob);
	$stmt->execute();
}
catch(PDOException $e)
{
	echo $e->getMessage();
	exit();
}


///////WORKING PORTION OF CODE IS BELOW///////////
// require_once '../model/Dbconnect.model.php';

// $data = $_POST['username'];

// try
// {
// 	$con = dbcon();
// 	$sqlquery = 'INSERT INTO users (Username) VALUES (:username)';
// 	$stmt = $con->prepare($sqlquery);
// 	$stmt->bindParam(':username',$data);
// 	$stmt->execute();
// }
// catch(PDOException $e)
// {
// 	echo $e->getMessage();
// 	exit();
// }

?>