<?php require "../controller/bm.cngPic.php" ?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//print_r($_SESSION['userdata']['Username']); //For debugging purpose
require '../controller/boothaccess.controller.php';
?>
<?php include 'Header.view.php'; ?>
<?php include 'bm.dashboard.php';?>
<?php
$propic="df.jpg";

include '../controller/bm.controller.php';  



$uname= $_SESSION['userdata']['Username'];


 $value = fetchuser($uname);

?>

<!DOCTYPE html>
<html>
<head>
   <link href="../css/alternate.css" rel="stylesheet"/> 
</head>
<body>
<!-- <form action="../controller/bm.cngPic.php" method="POST" enctype="multipart/form-data"> -->
<form method="POST" enctype="multipart/form-data">


<fieldset class="fields">
    <legend >PROFILE PICTURE</legend>

<?php

if (isset($value))    {      

                   
                          
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
            
                         
                              }          
                          }

?>


        <img src="<?php echo $propic;?>" alt= "Image" style="width:100px;height:100px";> 
        <br>
        <input type="file" name="fileToUpload" id="fileToUpload"><br> <br>
        <input type="submit" value="Upload Image" name="submit">

 </fieldset>
    </form>
</body>
</html>
 <?php include 'Footer.view.php'; ?>
