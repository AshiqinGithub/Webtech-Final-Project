<?php
include_once '../model/Dbconnect.model.php';

$con = dbcon();
$sqlquery = 'SELECT * FROM users';
$result = $con->prepare($sqlquery);
$result->execute();

$rows_per_page = 5;

//$rows = $result->fetchAll(PDO::FETCH_DEFAULT);
//print_r($rows);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/tables.css" rel="stylesheet"/>
	<title>All data</title>
</head>
<body>

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
		   	<?php

		    while($rows = $result->fetch(PDO::FETCH_ASSOC))

		   	{
		   		//var_dump($rows['ID']);
		   	?>

		   		<tbody>
		   			<tr>
		   				<td><a href="Showuser.view.php?id=<?php echo $rows['ID'] ?>"><?php echo $rows['ID']?></a></td>
		   				<td><?php echo $rows['First_name'] ?></td>
		   	            <td><?php echo $rows['Last_name'] ?></td>
		   	            <td><?php echo $rows['Username'] ?></td>
		   	            <td><?php echo $rows['Email'] ?></td>
		   	            <td><?php echo $rows['Gender'] ?></td>
		   	            <td><?php echo $rows['Dob'] ?></td>
		   	            <td style="width: 200px;"><img style="width: 20%; height: 20%;" src="data:image/jpeg;base64,<?php echo base64_encode( $rows['Picture'] )?>" alt ="<?php echo $rows['Username'] ?>"></td>
		   	            <td><?php
		   	                    if ($rows['RoleID'] == 0) {echo 'Driver';}
		   	               else if ($rows['RoleID'] == 1) {echo 'Admin';} 
		   	               else if ($rows['RoleID'] == 2) {echo 'Manager';}?></td>
		   	            <td><?php echo $rows['Entry_Date'] ?></td>
		   	            <td style="display: none;"><?php echo $rows['Password'] ?></td>
		   	            <td><a href = "Edituser.view.php?id=<?php echo $rows['ID'] ?>">Edit</a> &nbsp 
							 <a href = "../controller/Delete.controller.php?id=<?php echo $rows['ID'] ?>" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</a></td>
		   			</tr>
		   	    </tbody>

		   	<?php 

		    }

            ?>

        </table>

        <?php

        $sqlquery = 'SELECT * FROM users';
        $result = $con->prepare($sqlquery);
        //$result->execute(); 
        $total_results = $result->fetch(PDO::FETCH_NUM);
        echo $total_results;



        ?>


		   	

		   </table>


		</div>
		<br>
		<br>

		<div class="container">
			<div></div>
		</div>

</body>

</body>
</html>