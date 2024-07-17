<?php
include '../controller/DataController.php';  

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//print_r($_SESSION['userdata']['Username']); //For debugging purpose
require '../controller/driveraccess.controller.php';
?>
<?php include 'Header.view.php'; ?>

<?php

 $message = ''; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     //include '../Controller/DataController.php' ;

         $data = loadData();

         
     if (isset($data)) {

          foreach ($data as $value) {
               if ($value['e-mail'] == $_POST['email']) {
                    $message = "Email matched !";
                    break;
               } else {
                     $message = "No User Found !";
               }
          }
     }
}

?>

<!DOCTYPE html>
<html>

<head>
     <style>
          .error {
               color: #FF0000;
          }
     </style>
</head>

<body>



     <br />
     <div>

          <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

               <?php
               if (isset($error)) {
                    echo $error;
               }
               ?>


               <br />
               <br>

               <fieldset>
                    <legend>FORGOT PASSWORD</legend>

                    <label>E-mail:</label>
                    <input type="text" name="email" />
                    <br><br>


                    <input type="submit" name="submit" value="Submit">

                    <br>
                    <p style="color: red;"><?php echo  $message; ?></p>
                    <br>

                    <?php
                    if (isset($message)) {
                         //echo $message;
                    }
                    ?>


               </fieldset>
          </form>
     </div>
     <br />

</body>

</html>

<?php include 'Footer.view.php'; ?>