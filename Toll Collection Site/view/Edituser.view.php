<?php

require_once '../controller/Fetchuserinfo.controller.php';
$user = fetchbyID($_GET['id']);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/form.css" rel="stylesheet"/>
	<script src="../validations/edit.val.js"></script>
	<title>Edit User</title>
</head>
<body>

	<?php require 'Header.view.php';
	      require '../controller/Update.controller.php'; ?>
	      <?php include_once 'adminmenu.view.php';?>

	&nbsp;
	&nbsp;
	&nbsp;

	 <form method="POST" name ="updateform" enctype="multipart/form-data" onsubmit="return validateform(this);"> <!-- Add after js validation<onsubmit="return validateform(this);"> -->
<div class ="container" align="center">

	<!-- <h1 class="text-center">Update user</h2> -->

    <div class="container">
    	

    	<!-- First Name -->

    	<div class="row">
				<div class="col-25">
					<label for="username">First Name</label>
				</div>
				<div class="col-75">
					<input type="text" name="fname" id="fname" value="<?php echo $user['First_name']?>" onblur="checkfName()" onkeyup="checkfName()">
	                <p id="fnameErr"></p>
				</div>
			

		<!-- Last Name -->

		<div class="row">
				<div class="col-25">
					<label for="lname">Last Name</label>
				</div>
				<div class="col-75">
					<input type="text" name="lname" id="lname" value="<?php echo $user['Last_name']?>" onblur="checklName()" onkeyup="checklName()">
	                <p id="lnameErr"></p>
				</div>
			

		<!-- UserName -->

			<div class="row">
				<div class="col-25">
					<label for="username">Username</label>
				</div>
				<div class="col-75">
					<input type="text" name="username" id="username" value="<?php echo $user['Username']?>" oninput="duplicateusercheck()" onblur="checkuName()" onkeyup="checkuName()">
	                <p name="unameDup" id="unameDup"></p>
                    <p name="unameErr" id="unameErr"></p>
				</div>
			

		<!-- Email -->

			<div class="row">
				<div class="col-25">
					<label for="email">E-mail</label>
				</div>
				<div class="col-75">
					<input type="text" name="email" id="email" value="<?php echo $user['Email']?>" oninput="duplicatemailcheck()" onblur="checkEmail()" onkeyup="checkEmail()">
	                <p name="emailDup" id="emailDup"></p>
                    <p name="emailErr" id="emailErr"></p>
				</div>
			

		<!-- Password -->

			
				<div class="col-25">
					<label for="pass">Password</label>
				</div>
				<div class="col-75">
					<input type="password" id="pass" name="pass" onblur="checkPass1()">
                    <p id="pass1Err"></p>
				</div>
			

		<!-- Re-type Password -->

			
				<div class="col-25">
					<label for="pass2">Confirm Password</label>
				</div>
				<div class="col-75">
					<input type="password" id="pass2" name="pass2" onblur="checkPass2()">
                    <p id="pass2Err"></p>
				</div>
			

		<!-- Gender -->

			
				<div class="col-25">
					<label for="gender">Gender</label>
				</div>
				<div class="col-75">
					<input type="radio" id="Male" name="gender" value ="Male" <?php echo ($user['Gender']=='Male')?'checked':''?>>
			        <label for="Male">Male</label>
			        <input type="radio" id="Female" name="gender" value ="Female" <?php echo ($user['Gender']=='Female')?'checked':''?>>
			        <label for="Female">Female</label>
			        <input type="radio" id="NoPref" name="gender" value ="Prefer Not to Say" <?php echo ($user['Gender']=='Prefer Not to Say')?'checked':''?>>
			        <label for="NoPref">Prefer not to say</label>
                    <p id="genderErr"></p>
				</div>
			


		
			

		<!-- Date of Birth -->

           
				<div class="col-25">
					<label for="dob">Date of Birth</label>
				</div>
				<div class="col-75">
					<input type="date" id="dob" name="dob" value="<?php echo $user['Dob']?>" onblur="checkDob()">
                    <p id="dobErr"></p>
				</div>

		<!-- Profile Picture -->

          
				<div class="col-25">
					<label for="image">Profile Picture</label>
				</div>
				<div class="col-75">
					<input type="file" 
	                       id="image" 
	                       name="image" 
	                       onblur="checkImage()"
	                       accept="image/png, image/jpeg">
                    <p id="picErr"></p> 
				</div>

                &nbsp;
				&nbsp; 
			<!-- Update button -->

			<div class="col-75">
				<input type="Submit" name="edit" id="edit" value="Update">
				<br>
				<br>
				<br>
				<br>
			</div>	


		<!-- Hidden entry -->
			<input type="hidden" name="id" value="<?php echo $_GET['id']?>">

		

    </div>

</div>

&emsp;
&emsp;



			

			<!-- Form Inputs -->

			<!-- First Name -->

			


		<!-- 	First Name: <input type="text" name="fname" id="fname" onblur="checkfName()" onkeyup="checkfName()"> onblur="checkfName()" onkeyup="checkfName()"
      <p id="fnameErr"></p>
      <br>
 -->

			<!-- Last Name -->

			

			<!-- Last Name: <input type="text" name="lname" id="lname" onblur="checklName()" onkeyup="checklName()">  onblur="checklName()" onkeyup="checklName()"
      <p id="lnameErr"></p>
      <br/> -->


			

			<!-- Username: <input type="text" name="username" id="username" oninput="duplicateusercheck()" onblur="checkuName()" onkeyup="checkuName()">onblur="checkuName()" onkeyup="checkuName()"> 
      <p name="unameDup" id="unameDup"></p>
      <p id="unameErr"></p>
      <br/> -->


			<!-- Email -->


			<!-- E-mail: <input type="text" name="email" id="email" oninput="duplicatemailcheck()" onblur="checkEmail()" onkeyup="checkEmail()">onblur="checkEmail()" onkeyup="checkEmail()"
      <p name="emailDup" id="emailDup"></p>
      <p id="emailErr"></p>
      <br/> -->


			<!-- Password -->



	

	</form>

    <?php include 'Footer.view.php'; ?>
</body>
</html>