<?php

require_once '../model/User.model.php';


if(isset($_POST['register']))
{

	$data['fname']    = $_POST['fname'];
	$data['lname']    = $_POST['lname'];
	$data['username'] = $_POST['username'];
	$data['email']    = $_POST['email'];
	$data['pass']     = password_hash($_POST['pass'], PASSWORD_DEFAULT);
	$data['gender']   = $_POST['gender'];
	$data['dob']      = $_POST['dob'];

	   try
	    {
		    if(addUser($data))
	        {	
	        //None of these seems to work
	        // echo "<script>window.top.location='../view/Home.view.php'</script>";   
		    header('location:../view/Home.view.php');
		    //echo '<script>alert("Registration Successful");</script>';
		    exit();
	        }
	    }
	    catch(PDOException $e)
	    {
		 echo $e->getMessage();
	    }

}

