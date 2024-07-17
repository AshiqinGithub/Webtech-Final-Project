<?php $page="Register"; ?>

<?php require_once '../controller/Register.controller.php'?>


<!DOCTYPE html>

<html>

<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../css/form.css" />
    <script src="../jquery/jquery.min.js"></script>
    <script src="../validations/register.val.js"></script>
    <title>Register</title>

    <style>
    	.hide{
		display: none;
		}
    </style>

</head>

<body>

	<?php require_once 'Header.view.php'; ?>

	&nbsp;
	&nbsp;
	&nbsp;

	<form method="POST" name ="registerform" enctype="multipart/form-data" onsubmit="return validateform(this);">
		<div class ="container" align="center">

			<!-- Form Title -->
			<h2 class="text-center">User Registration</h2>

			<!-- Form Inputs -->

			<!-- First Name -->
<div class="container">
	<div class="row">
		<div class="col-25">
			<label for="fname">First Name</label>
		</div>
		<div class="col-75">
			<input type="text" name="fname" id="fname" placeholder="Your First Name" onblur="checkfName()" onkeyup="checkfName()">

			<p id="fnameErr"></p>
                  
            </div>
			
      <!-- <br> -->
	</div>

	<!-- Last Name -->

	<div class="row">
		<div class="col-25">
			<label for="lname">Last Name</label>
		</div>
		<div class="col-75">
			<input type="text" name="lname" id="lname" placeholder="Your Last Name" onblur="checklName()" onkeyup="checklName()">
                  <p id="lnameErr"></p>
		</div>
	</div>
			
			

			
      <!-- <br/> -->


			<!-- UserName -->

			<div class="row">
				<div class="col-25">
					<label for="username">Username</label>
				</div>
				<div class="col-75">
					<input type="text" name="username" id="username" placeholder="Your Username" oninput="duplicateusercheck()" onblur="checkuName()" onkeyup="checkuName()">
	                        <p name="unameDup" id="unameDup"></p>
                              <p name="unameErr" id="unameErr"></p>
				</div>
			</div>

			
      <!-- <br/> -->


			<!-- Email -->

			<div class="row">
				<div class="col-25">
					<label for="email">E-mail</label>
				</div>
				<div class="col-75">
					<input type="text" name="email" id="email" placeholder="example@mail.com" oninput="duplicatemailcheck()" onblur="checkEmail()" onkeyup="checkEmail()">
                              <p name="emailDup" id="emailDup"></p>
                              <p id="emailErr"></p>
				</div>
			</div>

      <!-- <br/> -->


			<!-- Password -->

			<div class="row">
				<div class="col-25">
					<label for="pass">Password</label>
				</div>
				<div class="col-75">
					<input type="password" id="pass" name="pass" onblur="checkPass1()">
                              <p id="pass1Err"></p>
				</div>
			</div>
 
      <!-- <br/> -->


			<!-- Re-type Password -->

			<div class="row">
				<div class="col-25">
					<label for="pass2">Confirm Password</label>
				</div>
				<div class="col-75">
					<input type="password" id="pass2" name="pass2" onblur="checkPass2()">
                              <p id="pass2Err"></p>
				</div>
			</div>

      <!-- <br/> -->


			<!-- Gender -->

			<!-- <div class="row"> -->
				<div class="col-25">
					<label for="gender">Gender</label>
				</div>
				<div class="col-75">
					<input type="radio" id="Male" name="gender" value ="Male" onblur="checkGender()">
			            <label for="Male">Male</label>
			            <input type="radio" id="Female" name="gender" value ="Female" onblur="checkGender()">
			            <label for="Female">Female</label>
			            <input type="radio" id="NoPref" name="gender" value ="Prefer Not to Say" onblur="checkGender()">
			            <label for="NoPref">Prefer not to say</label>
                              <p id="genderErr"></p>
				</div>
			<!-- </div> -->

			<!-- Gender: 
			<input type="radio" id="Male" name="gender" value ="Male" onblur="checkGender()">
			<label for="Male">Male</label>
			<input type="radio" id="Female" name="gender" value ="Female" onblur="checkGender()">
			<label for="Female">Female</label>
			<input type="radio" id="NoPref" name="gender" value ="Prefer Not to Say" onblur="checkGender()">
			<label for="NoPref">Prefer not to say</label>
      <p id="genderErr"></p> -->
      <!-- <br/> -->


                  <!-- Date of Birth -->

                  <div class="row">
				<div class="col-25">
					<label for="dob">Date of Birth</label>
				</div>
				<div class="col-75">
					<input type="date" id="dob" name="dob" onblur="checkDob()">
                              <p id="dobErr"></p>
				</div>
			</div>

      <!-- <br/> -->


	<!-- Profile Picture -->

<!-- 	Profile Picture: <input type="file" 
	id="image" 
	name="image" 
	onblur="checkImage()"
	accept="image/png, image/jpeg">
      <p id="picErr"></p> -->
      

<!-- 			<div class="row">
				<div class="col">
					<div class="form-group">
						<div class="form-floating mb-3">
              <input type="file" class="form-control" id="image" name="image">
              <label for="image">Upload Picture</label>
            </div>					
					</div>					
				</div>				
			</div> -->				

			<!-- Register button -->
			<div class="row">
				<input type="Submit" name="register" id="register" value="Sign Up" disabled>
			</div>

			<!-- <button type="Submit" name="register" id="register" disabled>Sign up</button> -->
</div>
		</div>

	&emsp;
	&emsp;
	</form>


    <?php require_once 'Footer.view.php'; ?>
</body>

<script>

	// function duplicatecheck()
	// {
	// 	jQuery.ajax({
	// 		url:"../controller/Liveusernamecheck.php",
	// 		data: 'username='+$("#username").val(),
	// 		type: "POST",
	// 		success: function(data)
	// 		{
	// 			$("#unameErr").html(data);
	// 		},
	// 		error:function(){}
	// 	});
	// }
	
</script>

</html>