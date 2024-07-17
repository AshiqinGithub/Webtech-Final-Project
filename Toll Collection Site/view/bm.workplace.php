
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//print_r($_SESSION['userdata']['Username']); //For debugging purpose
require '../controller/boothaccess.controller.php';
?>

<?php include 'Header.view.php'; ?>
<?php include 'bm.dashboard.php';?>

<!DOCTYPE html>
<html>

<body>

<br>
<fieldset>
    <legend>ACCOUNT</legend>

<ul>
       <li><a href='bm.collect toll.php'>COLLECT TOLL</a><br></li><br>
       <li><a href='bm.history.php'>COLLECTION HISTORY</a><br></li>

       <br>View Drivers
     

</ul>  
</fieldset>

</body>
</html>

 <?php include 'Footer.view.php'; ?>
