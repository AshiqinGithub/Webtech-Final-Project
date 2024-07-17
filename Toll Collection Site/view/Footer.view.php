<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.footer {
  font-family: Poppins;
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  float: center;
  overflow: hidden;
/*  background-color: #f1f1f1;*/
  padding: 20px 10px;
}

/*.footer a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.footer a.logo {
  font-size: 25px;
  font-weight: bold;
}

.footer a:hover {
  background-color: #ddd;
  color: black;
}

.footer a.active {
  background-color: dodgerblue;
  color: white;
}

.footer-right {
  float: right;
}

@media screen and (max-width: 1920px) {
  .footer a {
    float: none;
    display: block;
    text-align: center;
  }
  
  .footer-right {
    float: none;
  }*/
}
</style>
</head>
<body>
<footer>
    <div class="footer", align="center">
<?php
        if(isset($_SESSION['userdata']))
        {
          if($_SESSION['userdata']['RoleID']==0)
            {
              echo'Logged in as Driver';
              echo str_repeat('&nbsp;',2);
              echo '||';
             }
            else if ($_SESSION['userdata']['RoleID']==1)
            {
              echo 'Logged in as Admin';
              echo str_repeat('&nbsp;',2);
              echo '||';
            }
            else if ($_SESSION['userdata']['RoleID']==2)
            {
              echo 'Logged in as Booth Manager';
              echo str_repeat('&nbsp;',2);
              echo '||';
            }
        }
        echo str_repeat('&nbsp;',2);
        echo 'Web Tech Group 5';
        echo str_repeat('&nbsp;',2);
        echo '||';
        echo str_repeat('&nbsp;',2); 
        echo 'Copyright ©';
        echo str_repeat('&nbsp;',2);
        echo date("d-m-Y");
?>
  </div>
</footer>
</body>
</html>
