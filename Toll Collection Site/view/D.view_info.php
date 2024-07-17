<?php
include '../controller/D.controller.php';  

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//print_r($_SESSION['userdata']['Username']); //For debugging purpose
require '../controller/driveraccess.controller.php';
?>

<?php include 'Header.view.php'; ?>
<?php include 'D.dashboard.php';
$propic="df.jpg";?>

<!DOCTYPE html>
<html>
<head>
    <link href="../css/alternate.css" rel="stylesheet"/>
</head>
<body>
<fieldset class="fields">
    <legend style = "font-size:25px">DRIVER INFORMATION</legend>

    <div>
        
    
<?php
//include '../controller/D.controller.php';  

$uname= $_SESSION['userdata']['Username'];


if (isset($uname)) {


 $value = fetchuser($uname);
                          if ($value==true) 
                          {

                                if ($value['Username']==$uname) {

                                    if($value['License_no']==null && $value['Vehicle_type']==null )
                                    {
                                        echo "Give Driver information!!!!!!!!!";
                                     include 'D.edit_d_info.php';
                                    }
                                    else{



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

                                echo "<br>License Number     : " .$value['License_no']."<br><br>";
                                echo "Vehicle Type                : " .$value['Vehicle_type']."<br><br>";
                                

                                // echo " | ";
                                echo "<a href='D.driver_info.php'>Edit Driving Information</a>";
                                echo " <br> ";
                                echo str_repeat("&nbsp;", 90);
                                // echo " | ";
                                echo " <br> ";
                                echo "<a href='D.Profile_picture.php'>Edit Profile Picture</a>";
                                // echo " | "."<br>";
                                echo " <br> ";
                                echo str_repeat("&nbsp;", 120);




                                }
                         
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
