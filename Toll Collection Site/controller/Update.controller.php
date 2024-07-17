<?php
require_once '../model/User.model.php';

if (isset($_POST['edit']))
{
	$data['fname']    = $_POST['fname'];
	$data['lname']    = $_POST['lname'];
	$data['username'] = $_POST['username'];
	$data['email']    = $_POST['email'];
	$data['pass']     = password_hash($_POST['pass'], PASSWORD_DEFAULT);
	$data['gender']   = $_POST['gender'];
	$data['dob']      = $_POST['dob'];
	$data['image']    = $_FILES['image'];
	$data['image'] = file_get_contents($_FILES['image']['tmp_name']);

	if (updateUser($_POST['id'], $data))
	{
		// alert ("Successfully updated");
		header ('location:../view/Showuser.view.php?id='.$_POST['id']);
	}
	else
	{
		echo 'Forbidden access';
	}
}

?>