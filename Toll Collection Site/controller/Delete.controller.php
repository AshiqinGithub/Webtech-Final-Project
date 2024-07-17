<?php 
require_once '../model/User.model.php';

if(deletentry($_GET['id']))
{
	header('location:../view/Showallusers.view.php');
}
?>