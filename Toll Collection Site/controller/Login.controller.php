<?php

require_once '../model/User.model.php';


if(isset($_POST['login']))
{
	$data['username'] = $_POST['username'];
	$data['pass'] = $_POST['pass'];

	if(loginUser($data))
	{
	   header('location:../view/Dashboard.view.php');
	}
	else
	{
	   echo '<script>alert("Login Failed");</script>';
	}
}

	        // {
	        // 	echo $data;
	        //     // echo "<script>window.top.location='../view/Dashboard.view.php'</script>"        
		    //      header('location:../view/Dashboard.view.php');
		    //      echo '<script>alert("Login Successfull");</script>';
		    //      exit();
	        // }
	


