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
include 'bm.dashboard.php';
?>

<!DOCTYPE html>  
 <html>  
      <head>
      <link href="../css/alternate.css" rel="stylesheet"/>    
        <title></title>  
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script>
$(document).pagination({
    dataSource: 'https://api.flickr.com/services/feeds/photos_public.gne?tags=cat&tagmode=any&format=json&jsoncallback=?',
    locator: 'items',
    totalNumberLocator: function(response) {
        // you can return totalNumber by analyzing response content
        return Math.floor(Math.random() * (1000 - 100)) + 100;
    },
    pageSize: 20,
    ajax: {
        beforeSend: function() {
            dataContainer.html('Loading data from flickr.com ...');
        }
    },
    callback: function(data, pagination) {
        // template method of yourself
        var html = template(data);
        dataContainer.html(html);
    }
})
</script>


      </head>  
      <body>

      <fieldset class="fields">
        <legend>TOLL HISTORY</legend>

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
                     <a href="bm.collect toll.php" class="btn btn-primary">Collect more toll?</a> 
                   </div>
                 </div>
             </fieldset>
      </body>  
 </html>  
 <?php include 'Footer.view.php'; ?>
