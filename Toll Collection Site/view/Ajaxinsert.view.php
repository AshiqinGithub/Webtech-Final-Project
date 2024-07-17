<?php
require_once '../model/Dbconnect.model.php';
?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require '../controller/admpageaccess.controller.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/form.css" rel="stylesheet"/>
	<link href="../css/cardhalf.css" rel="stylesheet"/>
	<title>Live Append</title>
</head>
<body>

	<?php include_once 'Header.view.php';?>
	<?php include_once 'adminmenu.view.php';?>

	&nbsp;
	&nbsp;
	&nbsp;


	<div>
		<form id="ajaxform" name="ajaxform" method="POST">

			<div class="row">
				<div class="column">
                  <div class="card">
                    
                    <!-- Input Fields -->
                    <!-- First Name -->

                    <input type="text" name="fname" id="fname" placeholder="Enter First Name" onblur="checkfName()" onkeyup="checkfName()">
			        <p id="fnameErr"></p>

                    <!-- Last Name -->

                    <input type="text" name="lname" id="lname" placeholder="Enter Last Name" onblur="checklName()" onkeyup="checklName()">
                    <p id="lnameErr"></p>


                    <!-- Username -->

                    <input type="text" name="username" id="username" placeholder="Enter Username" oninput="duplicateusercheck()" onblur="checkuName()" onkeyup="checkuName()">
	                <p name="unameDup" id="unameDup"></p>
                    <p name="unameErr" id="unameErr"></p>

                    <!-- Email -->

                    <input type="text" name="email" id="email" placeholder="Enter valid email" oninput="duplicatemailcheck()" onblur="checkEmail()" onkeyup="checkEmail()">
                    <p name="emailDup" id="emailDup"></p>
                    <p id="emailErr"></p>

                    <!-- Password -->

                    <input type="text" id="pass" name="pass" placeholder="Enter Password" onblur="checkPass1()">
                    <p id="pass1Err"></p>


                    <!-- Confirm Password -->

                    <input type="text" id="pass2" name="pass2" placeholder="Confirm Password" onblur="checkPass2()">
                    <p id="pass2Err"></p>


                    <!-- Gender -->

                    <input type="radio" id="Male" name="gender" value ="Male" onblur="checkGender()">
			        <label for="Male">Male</label>
			        <input type="radio" id="Female" name="gender" value ="Female" onblur="checkGender()">
			        <label for="Female">Female</label>
			        <input type="radio" id="NoPref" name="gender" value ="Prefer Not to Say" onblur="checkGender()">
			        <label for="NoPref">Prefer not to say</label>
                    <p id="genderErr"></p>


                    <!-- Date of Birth -->

                    <input type="date" id="dob" name="dob" onblur="checkDob()">
                    <p id="dobErr"></p>

                    <!-- Append Button -->

                    <input type="submit" name="append" id="append" value="Append">

                  </div>
                </div>

                <div class="column">
                  <div class="card">
                    

                    	<div class="content">

		<?php

		try
		{
			$con = dbcon();
			$sqlquery = 'SELECT * FROM users ORDER BY ID ASC';
			$stmt = $con->prepare($sqlquery);
			$stmt->execute();
			$names = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$stmt->closeCursor();
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			exit();
		}

		if($names == true) 
		{
			?>

			<ul class="group">
			Appended User List:
				<?php
				foreach ($names as $name) {

					$name = $name['Username']; ?>
					<li><?php echo $name;?></li>

		  <?php } ?>

			</ul>
			<br>
			<br>
			<br>
			
  <?php } ?>

	</div>


       </div>
  </div>

</div>


			<!-- <input type="text" name="username" id="username" placeholder="Your Username">
			<input type="submit" name="append" id="append" value="Append">
		</form> -->
	</div>

	

<script src="../jquery/jquery.min.js"></script>
<script src="../validations/ajaxappend.val.js"></script>

</body>

<?php include 'Footer.view.php'; ?>
</html>