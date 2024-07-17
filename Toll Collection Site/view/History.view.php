<?php  include '../controller/bm.controller.php' ; ?>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//print_r($_SESSION['userdata']['Username']); //For debugging purpose, comment in when done, comment out when needed
require '../controller/boothaccess.controller.php';
?>

<?php 
include 'Header.view.php'; 
include 'Adminmenu.view.php';
?>

<!DOCTYPE html>  
 <html>  
      <head>
      <!-- <link href="../css/alternate.css" rel="stylesheet"/> -->
      <link href="../css/tables.css" rel="stylesheet"/>     
        <title>History</title>  

      </head>  
      <body>


        <div class="container" style="width:550px;">              
                <div Id="customers" class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>USER NAME</th> 
                               <th>VEHICLE TYPE</th>  
                               <th>TOLL FEE</th>   
                               <th>DATE & TIME</th> 
                               
                          </tr>  
                         <?php

                          $data = fetchAllTolldata();

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
      </body>  
 </html>  
 <?php include 'Footer.view.php'; ?>
