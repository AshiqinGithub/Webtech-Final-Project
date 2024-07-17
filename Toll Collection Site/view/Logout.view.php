<?php
session_start(); //initiated session so that userdate can be used
$_SESSION = array(); //emptying the session with empty array
session_destroy(); //now we are destroying the empty session

 $page='Logout';?>

<!DOCTYPE html>

<html>

<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="../css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="../css/docs.css"
      rel="stylesheet"
    />
    <script src="../js/bootstrap.bundle.min.js"></script>
    <title>Logout</title>
</head>

<body>

	<?php include 'Header.view.php'; ?>

	<form method="POST" enctype="multipart/form-data">
		<div class ="container">

			<!-- Form Title -->
			<h2 class="text-center"></h2>
      <script type="text/javascript">
        window.location.href = 'Home.view.php';
        </script>
		</div>
	</form>

    <?php include 'Footer.view.php'; ?>
</body>

</html>