<?php
require_once '../controller/Fetchuserinfo.controller.php';

$user = fetchbyID($_GET['id']);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/tables.css" rel="stylesheet"/>
	<title>User Information</title>
</head>
<body>

	<?php include 'Header.view.php'; ?>
	<?php include_once 'adminmenu.view.php';?>

	<form method="POST" enctype="multipart/form-data">
		<div class ="container" style="overflow-x: auto;">

			<!-- Form Title -->
			<!-- <h2 class="text-center">Hello</h2> -->

		   <!-- Table for Users -->
		   <table class="table">
		   	<thead>
		    <tr>
		   		<th>UserID</th>
		   		<th>First Name</th>
		   		<th>Last Name</th>
		   		<th>Username</th>
		   		<th>Email</th>
		   		<th>Gender</th>
		   		<th>Date of Birth</th>
		   		<!-- <th>Profile Image</th> -->
		   		<!-- <th>Role</th> -->
		   		<!-- <th>Entry Date</th> -->
		   		<th>Password (Hashed)</th>
		   		<!-- <th>Raw Password</th> -->
		   	</tr>
		   	</thead>
		   	
		   	<tr>

		   	<td><a href="Showallusers.view.php?id=<?php echo $user['ID'] ?>"><?php echo $user['ID']?></a></td>
		   	<td><?php echo $user['First_name'] ?></td>
		   	<td><?php echo $user['Last_name'] ?></td>
		   	<td><?php echo $user['Username'] ?></td>
		   	<td><?php echo $user['Email'] ?></td>
		   	<td><?php echo $user['Gender'] ?></td>
		   	<td><?php echo $user['Dob'] ?></td>
		   	<!-- <td><img style="width: 20%; height: 20%;" src="data:image/jpeg;base64,<?php // echo base64_encode( $user['Picture'] )?>" alt ="<?php //echo $user['Username'] ?>"></td>
		   	           <td> -->
		   	<!-- <td><?php //echo $user['RoleID'] ?></td> -->
		   	<!-- <td><?php // echo $user['Entry_Date'] ?></td> -->
		   	<td><?php echo $user['Password'] ?></td>

            </tr>

		   </table>


		</div>
	</form>

    <?php include 'Footer.view.php'; ?>

</body>

</html>