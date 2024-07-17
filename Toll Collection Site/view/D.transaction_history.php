<?php
include '../controller/D.controller.php' ;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//print_r($_SESSION['userdata']['Username']); //For debugging purpose
require '../controller/driveraccess.controller.php';
?>

<!DOCTYPE html>  
 <html>  
      <head>
      <link href="../css/alternate.css" rel="stylesheet"/>
        <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   

    


      </head>  
      <body>
      <?php include 'Header.view.php'; ?>
      <?php include 'D.dashboard.php';?>
      <br>
      <br>
      <fieldset class="fields">
        <legend>TRANSACTION HISTORY</legend>
          
      
        <div class="container" style="width:550px;">              
                <div Id="customers" class="table-responsive" style="align-content: center;"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>USER NAME</th> 
                               <th>VEHICLE TYPE</th>  
                               <th>TOLL FEE</th>   
                               <th>DATE & TIME</th> 
                               
                          </tr>  
                          <?php   
                          // include '../controller/D.controller.php' ;

                          $data = fetchAllTolldata($_SESSION['userdata']['Username']);

                          foreach($data as $row)  
                          {  
                              ?>
                               <tr>
                               <td><?php echo $row['Username'] ?></td>
                               <td><?php echo $row['Vehicle_type'] ?></td>
                               <td><?php echo $row['Toll_fee'] ?></td>
                                <td><?php echo $row['Date'] ?></td>

                               </tr>
                               <?php 
                          }  
                          ?>  
                     </table> 
                     
                   </div>
                 </div>
        </fieldset> 
      </body>  
 </html>  
 <?php include 'Footer.view.php'; ?>
