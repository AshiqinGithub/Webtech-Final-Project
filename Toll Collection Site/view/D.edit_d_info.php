<?php
include '../controller/D.info_controller.php';  

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//print_r($_SESSION['userdata']['Username']); //For debugging purpose
require '../controller/driveraccess.controller.php';
?>

          <?php

          // include '../controller/D.controller.php';   
  
// define variables and set to empty values
   
                                                        
 $flag=1;      
 
 $message = '';  
 $error = '';  

$vehicleErr=$licenseErr="";


 if(isset($_POST["submit"]))  
 {  
      

      if(empty($_POST["license"]))  
      {  
          $licenseErr = "<label>Driving License field cannot be empty</label>";  
          $flag=0;
      }
      else {
    $license = $_POST["license"];
    //^[a-zA-Z]{2}-\d\d-(19\d\d|20[01][0-9])-\d{7}$
    //^[a-zA-Z0-9']*$
    if (!preg_match("/^[a-zA-Z0-9']*$/",$license))
    {
      $licenseErr = "Invalid Driving License Number";
      $flag=0;
    }
    

    else{$license = $_POST["license"];} 
    
    }
   

    
    //////////////




      if(empty($_POST["vehicle"]))  
      {  
            $vehicleErr = "<label>Vehicle field cannot be empty</label>"; 
              $flag=0; 
      } 
         else {
        $vehicle = $_POST["vehicle"];
       }


      



        if($flag==1){
             
                
                $new_data['ln']= $_POST["license"];
                 $new_data['vt']=  $_POST["vehicle"];
                 


             if(  addData($new_data, $_SESSION['userdata']['Username']))
                {
                    $message = 'Successfull';  
                header($_SERVER["PHP_SELF"]);
                }

               //return $new_data;
                
           } 
           else  
           {  
                //$error = 'JSON File not exits';  
           }
      

             }
          
      
   
 ?>

 <?php

 $vehicle =  $license= "";
?>  

 <!DOCTYPE html>  
 <html>  
      <head>  

         <link href="../css/alternate.css" rel="stylesheet"/>
<style>
.error {color: #FF0000;}
</style>
      </head>  
      <body>  



           <br />  
           <div>  
                               
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

               <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  


                     <br />  
                     <br>
                     <fieldset  class="fields">
                    <legend>DRIVER INFORMATION</legend>
                     <br>

                      <label>Driving License No:</label>  
                     <input type="text" name="license" />
                      <span class="error">* <?php echo $licenseErr;?></span><br />  <br>


                     
                    <fieldset>
                    <legend>Vehicle Type</legend>
                    <input type="radio" id="car" name="vehicle" value="car">
                     <label for="car">Car</label>                     
                     <input type="radio" id="Bus" name="vehicle" value="Bus">
                     <label for="Bus">Bus</label>
                     <input type="radio" id="Truck" name="vehicle" value="Truck">
                     <label for="Truck">Truck</label>
                     <input type="radio" id="Bike" name="vehicle" value="Bike">
                     <label for="Bike">Bike</label>
                     <input type="radio" id="Gov" name="vehicle" value="Gov">
                     <label for="Gov">Government Vehicle</label>
                      <span class="error">* <?php echo $vehicleErr;?></span><br><br>
                      </fieldset> 

                     
                    <br>
                     
                     <input type="submit" name="submit" value="Proceeding for Payment"/><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                      </fieldset>
                </form>  
           </div>  
           <br />  

      </body>  
 </html>  

