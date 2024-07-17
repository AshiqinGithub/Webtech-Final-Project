<?php $page = 'Login'; ?>

<?php require_once '../controller/Login.controller.php'?>

<!DOCTYPE html>

<html>

<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../css/form.css" rel="stylesheet"/>
    <script src="../validations/login.val.js"></script>
    <title>Login</title>
</head>

<body>

	<?php include 'Header.view.php'; ?>

	&nbsp;
	&nbsp;
	&nbsp;

	<form method="POST" name="loginform" enctype="multipart/form-data" onsubmit="return validateform(this);">
		<div class ="container" align="center">

			<!-- Form Title -->
			<h2 class="text-center">Login</h2>

			<!-- Form Inputs -->

			<!-- UserName -->

			<div class="row">
				<div class="col-25">
					<label for="username">Username</label>
				</div>
				<div class="col-75">
					<input type="text" name="username" id="username" onblur="checkName()" onkeyup="checkName()">
                              <p id="nameErr"></p>
				</div>
			</div>



      <!-- Username: <input type="text" name="username" id="username" onblur="checkName()" onkeyup="checkName()">
      <p id="nameErr"></p>
      <br/> -->

<!-- 			<div class="row">
				<div class="col">
					<div class="form-group">
						<div class="form-floating mb-3">
              <input type="text" class="form-control" id="username" name="username" placeholder="JohnSmith">
              <label for="username">Username</label>
              <div>
              	<p hidden id='usererr'></p>
              </div>
            </div>					
					</div>					
				</div>				
			</div> -->

			<!-- Password -->

			<div class="row">
				<div class="col-25">
					<label for="pass">Password</label>
				</div>
				<div class="col-75">
					<input type="password" id="pass" name="pass" onblur="checkPass()" onkeyup="checkPass()">
                              <p id="passErr"></p>
				</div>
			</div>

			<!-- Password: <input type="password" id="pass" name="pass" onblur="checkPass()" onkeyup="checkPass()">
      <p id="passErr"></p>
      <br/>  -->

<!-- 			<div class="row">
				<div class="col">
					<div class="form-group">
						<div class="form-floating mb-3">
              <input type="Password" class="form-control" id="pass" name="pass" placeholder="">
              <label for="pass">Password</label>
              <div>
              	<p hidden id='passerr'></p>
              </div>
            </div>					
					</div>					
				</div>				
			</div> -->

			<!-- Remember Checkbox -->

<!-- 			<div class="row">
				<div class="col">
					<div class="form-group">
						<div class="form-floating mb-3">
						  <div class="form-check">
                <input class="form-check-input" type="checkbox" value="No" id="remember">
                <label class="form-check-label" for="remember">Remember me</label>
              </div>
            </div>					
					</div>					
				</div>				
			</div> -->

			<!-- Login button -->

			<div class="row">
				<input type="Submit" name="login" id="login" value="Sign in" disabled>
			</div>

			<!-- <button type="Submit" id="login" name ="login" value ="Login" disabled>Login</button>  -->

<!-- 			<div class="row">
				<div class="col">
					<div class="form-group">
						<div class="form-floating mb-3">
						  <div class="d-grid gap-2">
               <button type="Submit"name="login" class="btn btn-outline-primary">Sign In</button>
              </div>
            </div>					
					</div>					
				</div>				
			</div> -->

		</div>

	</form>

    <?php include 'Footer.view.php'; ?>
</body>

</html>