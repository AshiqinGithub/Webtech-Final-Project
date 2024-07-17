<?php

require_once '../model/User.model.php';

if(!empty($_POST['username']))
{
	$username = $_POST['username'];

	if(strlen($username) >= 5 && strlen($username) <= 20)
	{

		return DuplicateUsercheck($username);

		// $con = dbcon();
	    // $sqlquery = "SELECT * FROM users WHERE Username LIKE '$username'";
	    // $stmt  = $con->prepare($sqlquery);
	    // $stmt->execute();
	    // $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	    // if(!empty($rows))
	    // {
		//     echo "<p style='color:red'>Username already exists</p>";
	    // }
	    // else
	    // {
		//     echo "<p style='color:green'>Username available</p>";
	    // }
	}

}

?>