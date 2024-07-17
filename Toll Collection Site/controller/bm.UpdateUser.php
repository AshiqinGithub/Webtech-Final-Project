<?php  
require_once '../model/bm.model.php';


if (isset($_POST['Submit4'])) 
{

	$data['fname']    = $_POST['fname'];
	$data['lname']    = $_POST['lname'];
	$data['email']    = $_POST['email'];
	$data['gender']   = $_POST['gender'];
	$data['dob']      = $_POST['dob'];
 


  if (updateProfile($_POST['un'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../view/bm.edit profile.php');
  }
 else {
	echo 'You are not allowed to access this page.';
}
}

?>
