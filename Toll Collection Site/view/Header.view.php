
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/d8359e8dc1.js" crossorigin="anonymous"></script>
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  font-family: Poppins;
  float: center;
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: left;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

.ul {
  font-family: Poppins;
  float: right;
  color: black;
  text-align: center;
  padding: 0px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: center;
  }
  
  .header-right {
    float: none;
  }

  .ul {
    float: none;
    display: block;
    text-align: center;
  }

}

</style>
</head>
<body>

  <nav>
    <div class="header a">
      <a href="#">
        <img src="cube.png" width="48" height="48"></a>
          <div>
              <ul class="ul">
                
                 
                <a class="<?php if($page=='Home'){echo "active";} else{echo "";} ?>"  href="Home.view.php">Home</a>

                <?php
                if(!isset($_SESSION['userdata']))
                {
                 ?>
                
                 <a class="<?php if($page=='Register'){echo "active";} else{echo "";} ?>" aria-current="page" href="Register.view.php">Sign up</a>
                
                
                 <a class="<?php if($page=='Login'){echo "active";} else{echo "";} ?>" aria-current="page" href="Login.view.php">Sign in</a>

                 <!-- <a class="<?php //if($page=='Search'){echo "active";} else{echo "";} ?>" aria-current="page" href="Ajaxsearch.view.php">Search</a> -->

               
                 <?php
                  }
                  else
                  {
                 ?>


                <a class="<?php if($page=='Dashboard'){echo "active";} else{echo "";} ?>" aria-current="page" href="Dashboard.view.php"><?php echo $_SESSION['userdata']['Username'];?></a>
                
                <a class="<?php if($page=='Logout'){echo "active";} else{echo "";} ?>" aria-current="page" href="Logout.view.php">Logout</a>
               
                 <?php
                  }
                 ?>

              </ul>
            </div>
    </div>
  </nav>
  

</body>
</html>
