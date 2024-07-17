<?php
include '../controller/bm.controller.php';  
?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//print_r($_SESSION['userdata']['Username']); //For debugging purpose, comment in when done, comment out when needed
require '../controller/boothaccess.controller.php';
?>
<?php include 'Header.view.php'; ?>
<?php include 'bm.dashboard.php';
$propic="df.jpg";?>

<!DOCTYPE html>
<html>
<head>
  <link href="../css/alternate.css" rel="stylesheet"/>  
</head>
<body>
<fieldset class="fields">
    <legend>PROFILE</legend>

    <div>
<?php
//include '../controller/bm.controller.php';  
?>
<?php
$uname= $_SESSION['userdata']['Username'];


if (isset($uname)) {


 $value = fetchuser($uname);
                          if ($value==true) 
                          {

                                if ($value['Username']==$uname) {

                                $existgender = $value['Gender'];

                              	if($value['Picture']!="")
		                           {
		                              $propic= $value['Picture'];
		                           }
		                           else
                              {

                              if($existgender=="male")
                                 {$propic="../uploads/df.jpg";}
                              else{$propic="../uploads/dff.jpg";} 
                              }     

                                echo "Name     :" .$value['First_name']." ".$value['Last_name']."<br>";
                                echo "Email    :" .$value['Email']."<br>";
                                echo "Gender   : " .$value['Gender']."<br>";
                                echo "DOB      : " .$value['Dob']."<br><br>";

                                // echo " | ";
                                echo "<a href='bm.edit profile.php'>Edit Profile</a>";
                                // echo " | ";
                                echo str_repeat("&nbsp;", 90);
                                // echo " | ";
                                echo " <br> ";
                                echo "<a href='bm.edit propic.php'>Edit Profile Picture</a>";
                                echo "<br>";
                                echo str_repeat("&nbsp;", 120);




                                
                         
                              }           
                          } 
                          }

                          else
                          {
                            echo "not found";
                          }
                       
?>
</div>
<img src="<?php echo $propic;?>" alt= "Image" style="width:100px;height:100px";> 
</fieldset>
</body>
</html>
 <?php include 'Footer.view.php'; ?>