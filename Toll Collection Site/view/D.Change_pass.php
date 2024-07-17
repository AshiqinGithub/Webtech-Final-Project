<?php
include '../controller/D.controller.php';  

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//print_r($_SESSION['userdata']['Username']); //For debugging purpose
require '../controller/driveraccess.controller.php';
?>


<?php include 'Header.view.php'; ?>
<?php include 'D.dashboard.php';?>

<!DOCTYPE HTML>  
<head>
  <link href="../css/alternate.css" rel="stylesheet"/>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<br>
<?php
// include '../controller/D.controller.php';   
// define variables and set to empty values

$currentpassword="";
$done=1;

$cpassErr=$cpass="";
$npass=$npassErr=$currpass=$currpassErr="";


   if ($_SERVER["REQUEST_METHOD"] == "POST")
   {      

                         
                          $data = fetchuser($_SESSION['userdata']['Username']);

                          if ($data==true) 
                          {


                              $currentpassword= $data['Password'];
            
                              }
                                         
                         
                          }

                                        ///change password

  if (empty($_POST["currpass"]))
    {
      $currpassErr = "Enter your Password";
      $done=0;
    } 

    else
    {

          if( password_verify($_POST["currpass"], $currentpassword )==false )
          {
            $currpassErr = "Password not mach try again ";
            $done=0;   //REQUARED A FUNCTION TO RESET ALL OR GO BACK FROM BEGNING
          }

   }
    //----


    if (empty($_POST["npass"])) 
    {
      $npassErr = "Enter a new Password";
    }
    else
    { 
          
          if($_POST["npass"]==$currentpassword)
          {
            $npassErr = "Try something new its your old one";
            $done=0;
          }
          else
          {
              $newpassword=$_POST["npass"];

          }

    }
          

//--
     if (empty($_POST["cpass"])) 
        {
          $cpassErr = "Please reenter your password";
          $done=0;
        }
      else
      {
           if($_POST["cpass"] != $newpassword)
           {
            $cpassErr = "Not matched with new password";
            $done=0;
           }
            else
          {
              $newpassword=$_POST["cpass"]; //could be use npass as they are same

          }
      }


      if($done==1)
      {
                          
    

                       changepass($_SESSION['userdata']['Username'], $newpassword);
     }



?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 


 <fieldset class="fields">

  <legend >CHANGE PASSWORD</legend>

  <div class="container" align="center">
    <div class="container">

      <div class="row">
        <div class="col-25">
          <label for="currpass">Current Password</label>
        </div>
        <div class="col-75">
            <input type="password" name="currpass">
            <p class="error">* <?php echo $currpassErr;?></p>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="npass">New Password</label>
        </div>
        <div class="col-75">
            <input type="password" name="npass">
            <p class="error">* <?php echo $npassErr;?></p>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="cpass">Confirm Password</label>
        </div>
        <div class="col-75">
            <input type="password" name="cpass">
            <p class="error">* <?php echo $cpassErr;?></p>
            <br>
            <br>
        </div>
      </div>

      <div class="row">
        <input type="submit" name="submit" value="Submit">
        <br>
        <br> 
        <br> 

      </div>

    </div>
  </div>
    
<!-- 
  Current Password:  <input type="password" name="currpass">
  <span class="error">* <?php // echo $currpassErr;?></span><br><br> -->



 <!--   New Password:  <input type="password" name="npass">
   <span class="error">* <?php //echo $npassErr;?></span><br><br>
 

  Confirm Password:   <input type="password" name="cpass">
  <span class="error">* <?php// echo $cpassErr;?></span><br><br> -->



  <!-- <input type="submit" name="submit" value="Submit">  -->


  </fieldset>
 
  </form>

</body>
</html>
 <?php include 'Footer.view.php'; ?>
