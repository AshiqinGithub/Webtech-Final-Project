<?php

require_once '../model/User.model.php';

if(!empty($_POST['email']))
{
	$email = $_POST['email'];

    return Duplicatemailcheck($email);	
}

?>