<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require '../controller/admpageaccess.controller.php';
$page = 'Profile';
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  font-family: Poppins;
  box-sizing: border-box;
}


/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  color: white;
  background: linear-gradient(90deg, #00d2ff 0%, #3a47d5 100%);

}
</style>
</head>
<body>

	<?php require_once 'Header.view.php'; ?>
	<?php include_once 'adminmenu.view.php';?>

<br>
<br>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <h3 style="font-size: 30px;">Total Users</h3>
      <p>31</p>
      <p>Last added: 11 Dec 2022</p>
      <p><?php //echo $_SESSION['userdata']['Username']?></p>
      <p><?php //echo $_SESSION['userdata']['First_name'], '&nbsp', $_SESSION['userdata']['Last_name']?></p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3 style="font-size: 30px;">Current Session</h3>
      <p><?php echo $_SESSION['userdata']['Username']?></p>
      <p><?php echo $_SESSION['userdata']['First_name'], '&nbsp', $_SESSION['userdata']['Last_name']?></p>
    </div>
  </div>
  
 <div class="column">
    <div class="card">
      <h3 style="font-size: 30px;">Session Status</h3>
      <p><?php  if(session_status()==2){echo 'Session is running';} ?></p>
      <p><?php echo $_SESSION['userdata']['First_name'], '&nbsp', $_SESSION['userdata']['Last_name']?></p>
    </div>
  </div>
</div>

</body>
<?php include 'Footer.view.php'; ?>
</html>
