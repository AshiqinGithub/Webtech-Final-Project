<?php
//start of session
// do check
if (!isset($_SESSION['userdata']['Username'])) {
    header("location: ../view/Home.view.php");
    exit; // prevent further execution, should there be more code that follows
}
else if ($_SESSION['userdata']['RoleID'] == 0)
{
	header("location: ../view/Home.view.php");
    exit; 
}