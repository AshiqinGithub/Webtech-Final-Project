<?php include '../model/Dbconnect.model.php';

$usertype = null;

if(!isset($_SESSION['userdata']))
{
  header("location:../view/Home.view.php");
}

if($_SESSION['userdata']['RoleID']==0)
{
  $usertype = 'Regular';
}
else if ($_SESSION['userdata']['RoleID']==1)
{
  $usertype = 'Admin';
}
else if ($_SESSION['userdata']['RoleID']==2)
{
  $usertype = 'Booth Manager';
}
else 
{
  header("location:../view/Login.view.php");
}


?>