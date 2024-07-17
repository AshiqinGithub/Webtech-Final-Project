<?php
include '../controller/bm.controller.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//print_r($_SESSION['userdata']['Username']); //For debugging purpose
require '../controller/boothaccess.controller.php';
?>

<?php include 'Header.view.php'; ?>
<?php include 'bm.dashboard.php';?>
<?php
       
$vtypeerr = $unameErr=$fee="";
 $done=1; 


if(isset($_POST["submit"]))  
 { 

        if(empty($_POST["un"]))  
      {  
           $unameErr = "<label>Enter a username</label>";
           $done=0;    
      }  
      else {
    
      $un = $_POST["un"];
    
    }


    if(empty($_POST["vtype"]))  
      {  
           $vtypeerr = "<label>Vehicle Type not selected</label>";  
           $done=0;  
      } 
    else 
    {
        $vtype = $_POST["vtype"];
    }
    
    if($_POST["vtype"]=="Bus")
    {
     $fee=1500;
    }
    else if($_POST["vtype"]=="Truck")
    {
     $fee=1000;
    }
     else if($_POST["vtype"]=="Car")
    {
     $fee=800;
    }
      else if($_POST["vtype"]=="Bike")
    {
     $fee=200;
    }
    else{$fee=0;}


    if($done==1){
   

               
                $new_data['un' ] =   $_POST["un"];
                $new_data[ 'vt' ] =   $_POST["vtype"];
                $new_data[ 'tf'] =  $fee ;
               
                if(collectToll($new_data))
                {
                    $error = 'Successfully stored';  
                header($_SERVER["PHP_SELF"]);
                }
               
    
      
           else  
           {  
                $error = 'fail to store';  
                header($_SERVER["PHP_SELF"]);

           }



}}







$vtype = $un= "";

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
          

<script> 
        function addValue() {

           var a = document.getElementById("para");var b = a.innerHTML;

        document.getElementById("un").value = b;
        }

    </script> 

           <br />  
           <div>                 
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 


                     <fieldset class="fields">
                    <legend> TOLL COLLECTING : BOOTH1 </legend>

 <label>User Name</label><br>
 <input type="text" name = "un" id= "un" value= "" class ="search js-search" oninput="get_data(this.value)" autofocus="true" placeholder="Username"  />





<div class="results js-results hide"> </div>

<span class="error">* <?php echo $unameErr;?></span><br>


<label>Vehicle Type</label><br>
                      <input type="radio" id="Bus" name="vtype" value="Bus">
                     <label for="Bus">Bus</label>                     
                     <input type="radio" id="Truck" name="vtype" value="Truck">
                     <label for="female">Truck</label>
                     <input type="radio" id="Car" name="vtype" value="Car">
                     <label for="Car">Car</label>
                     <input type="radio" id="Bike" name="vtype" value="Bike">
                     <label for="Bike">Bike</label>
                     <input type="radio" id="Government Vehicle" name="vtype" value="Government Vehicle">
                     <label for="Government Vehicle">Government Vehicle</label>
                      <span class="error">* <?php echo $vtypeerr;?></span><br><br>

                      <?php echo "<div>Added Toll Fee= ".$fee."</div>"; ?>

                      <br> 
                      <br> 


                       <input type="submit" name="submit" value="SUBMIT"/><br />      

                       </fieldset>                  
                </form>  
                <div>&nbsp;</div>
           </div>  


      </body>  
    
<script src="../validations/bm.findUser.js" type="text/javascript">

      </script>

 </html>  


 <?php include 'Footer.view.php'; ?>
