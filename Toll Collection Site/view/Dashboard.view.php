<?php $page='Dashboard';?>

<?php
include '../controller/Sessioncheck.controller.php';
//include '../controller/D.controller.php';

// $usertype = null;

// if(!isset($_SESSION['userdata']))
// {
//   header("location:../view/Login.view.php");
// }

// if($_SESSION['userdata']['RoleID']==0)
// {
//   $usertype = 'Regular';
// }
// else if ($_SESSION['userdata']['RoleID']==1)
// {
//   $usertype = 'Admin';
// }
// else if ($_SESSION['userdata']['RoleID']==2)
// {
//   $usertype = 'Booth Manager';
// }
// else
// {
//   header("location:../view/Login.view.php");
// }


?>

<!DOCTYPE html>

<html>

<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   <!--  <link
      href="../css/bootstrap.min.css"
      rel="stylesheet"
    /> -->
    <!-- <link
      href="../css/docs.css"
      rel="stylesheet"
    /> -->
    <!-- <script src="../js/bootstrap.bundle.min.js"></script> -->
    <title><?php echo $usertype; ?> Dashboard</title>
</head>

<body>

	<?php require_once 'Header.view.php'; ?>

	<form method="POST" enctype="multipart/form-data">
		<div class ="container">

      <!-- <h2 class="text-center">Welcome <?php echo $_SESSION['userdata']['Username'];?></h2> -->

			<!-- Form Title -->
      <?php if($_SESSION['userdata']['RoleID']==0)
      {
      ?>
      <!-- <h2 class="text-center">You are visiting as Regular User</h2>
			<h2 class="text-center">Login Successful</h2> -->
      <?php include "D.dashboard.php";?>

      <script type="text/javascript">
      window.location.href = 'D.profile.php';
      </script>

      <?php 
       }
       else if($_SESSION['userdata']['RoleID']==1)
       {
       ?>
      <!-- <h2 class="text-center">You are visiting as admin</h2>
      <h3 class ="text-center">This is page is work in progress</h3> -->
      <?php include_once 'adminmenu.view.php';?>
      
      <script type="text/javascript">
      window.location.href = 'Adminprofile.view.php';
      </script>

      <?php 
       }
       else if($_SESSION['userdata']['RoleID']==2)
       {
       ?>
      <!-- <h2 class="text-center">You are visiting as Booth Manager</h2>
      <h3 class ="text-center">This is page is work in progress</h3> -->

      <?php include "bm.dashboard.php";?>
      
      <script type="text/javascript">
        window.location.href = 'bm.view profile.php';
        </script>

      <?php 
       }
       ?>
		</div>
	</form>

    <?php require_once 'Footer.view.php'; ?>
</body>

</html>