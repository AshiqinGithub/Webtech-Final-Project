<?php

require_once '../model/User.model.php';

if(!empty($_POST['username']))
{
	$username = $_POST['username'];

	if(strlen($username) >= 5 && strlen($username) <= 20)
	{

		return EditUsercheck($username);
	}

}

?>