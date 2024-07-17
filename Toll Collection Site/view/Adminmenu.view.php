<?php 
// session_start();
require '../controller/admpageaccess.controller.php';?>

<!DOCTYPE html>
<html>
<head>
<style>

.adminul {
  font-family: Poppins;
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #1560bd;
  background: rgb(12,175,255);
  background: radial-gradient(circle, rgba(12,175,255,1) 0%, rgba(21,96,189,1) 100%);
  }

.adminli {
  float: left;
}

.adminli a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.adminli a:hover {
  background-color: #0CAFFF;
}

</style>
</head>
<body>
<div>
<ul class="adminul">
  <li class="adminli"><a class="<?php if($page=='Profile'){echo "active";} else{echo "";}?>" href="Adminprofile.view.php">Profile</a></li>
  <li class="adminli"><a class ="<?php if($page=='Showall'){echo "active";} else{echo "";}?>"href="Showallusers.view.php">Show Database</a></li>
  <li class="adminli"><a href="Ajaxinsert.view.php">Append</a></li>
  <li class="adminli"><a href="Ajaxsearch.view.php">Search</a></li>
  <li class="adminli"><a href="History.view.php">History</a></li>

  <!-- <li class="adminli"><a href="#about">About</a></li> -->
</ul>
</div>

</body>
</html>