<?php 
$page = 'Showall';
require_once '../controller/Fetchuserinfo.controller.php';

$users = fetchallUsers();
?>


<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/tables.css" rel="stylesheet"/>
	<script src="../jquery/jquery.min.js"></script>
	<title>All User Information</title>
</head>

<?php include 'Header.view.php'; ?>
<?php include_once 'adminmenu.view.php';?>
<body>

		<div class="container">
			

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
		   		<th>Profile Image</th>
		   		<th>Role</th>
		   		<th>Entry Date</th>
		   		<th style="display: none;">Password</th>
		   		<th>Actions</th>
		   	</tr>
		   	</thead>

		   	<tbody>
		   		<?php foreach ($users as $i => $user): ?>
		   			<tr>
		   	           <td><a href="Showuser.view.php?id=<?php echo $user['ID'] ?>"><?php echo $user['ID']?></a></td>
		   	           <td><?php echo $user['First_name'] ?></td>
		   	           <td><?php echo $user['Last_name'] ?></td>
		   	           <td><?php echo $user['Username'] ?></td>
		   	           <td><?php echo $user['Email'] ?></td>
		   	           <td><?php echo $user['Gender'] ?></td>
		   	           <td><?php echo $user['Dob'] ?></td>
		   	           <td style="width: 200px;"><img style="width: 20%; height: 20%;" src="data:image/jpeg;base64,<?php echo base64_encode( $user['Picture'] )?>" alt ="<?php echo $user['Username'] ?>"></td>
		   	           <td><?php
		   	                    if ($user['RoleID'] == 0) {echo 'Driver';}
		   	               else if ($user['RoleID'] == 1) {echo 'Admin';} 
		   	               else if ($user['RoleID'] == 2) {echo 'Manager';}?></td>
		   	           <td><?php echo $user['Entry_Date'] ?></td>
		   	           <td style="display: none;"><?php echo $user['Password'] ?></td>
		   	           <td><a href = "Edituser.view.php?id=<?php echo $user['ID'] ?>">Edit</a> &nbsp 
							<a href = "../controller/Delete.controller.php?id=<?php echo $user['ID'] ?>" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</a></td>
		   			</tr>
		   		<?php endforeach; ?>
		   	</tbody>

		   </table>


		</div>
		<br>
		<br>

		<div class="container">
			<div></div>
		</div>
		<br>
		<br>
		<br>
	

    

</body>

<?php include 'Footer.view.php'; ?>

<script>
// 	 $(document).ready(function(){  
 //      load_data();  
 //      function load_data(page)  
 //      {  
 //           $.ajax({  
 //                url:"pagination.php",  
 //                method:"POST",  
 //                data:{page:page},  
 //                success:function(data){  
 //                     $('#pagination_data').html(data);  
 //                }  
 //           })  
 //      }  
 //      $(document).on('click', '.pagination_link', function(){  
 //           var page = $(this).attr("id");  
 //           load_data(page);  
 //      });  
 // }); 
</script>
</html>