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

<?php include 'bm.dashboard.php';?>
<!DOCTYPE html>
<html>
      <head>
      <link href="../css/alternate.css" rel="stylesheet"/>    
<style>
.error {color: #FF0000;}
</style>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../css/form.css" />
    <script src="../jquery/jquery.min.js"></script>
    <script src="../validations/register.val.js"></script>
      </head> 
<body>
<?php

//include '../controller/bm.controller.php';  

 $nameErr = $emailErr = $genderErr  = $DBerr= "";

 /*

 $data = loadData();

//////////////////////////////////////////////----change name
	 if(isset($_POST["Submit1"]))  
	 {  
			    

							        	$name = $_POST["name"];
							    
				                          if (isset($data)) 
				                          {

				                              foreach($data as $key => $value)  
				                          {  
				                              if ($value['username']==$_SESSION['uname']) {

				                              $data[$key]['name']= $name;
				            
				                         
				                              }           
				                          } 

				                          modifyprof($data);

				                

			  }}

//////////////////////////////////////////////////////change email

if(isset($_POST["Submit2"]))  
	 {  
			    

		           $email = $_POST["email"];

							        
				                          if (isset($data)) 
				                          {

				                              foreach($data as $key => $value)  
				                          {  
				                              if ($value['username']==$_SESSION['uname']) {

				                              $data[$key]['e-mail']= $email ;
				            
				                         
				                              }           
				                          } 
													modifyprof($data);

        } }




//////////////////////////////////////////////////////---GENDER

if(isset($_POST["Submit3"]))  
	 {  
			    
						        $gender = $_POST["gender"];

				                          if (isset($data)) 
				                          {

				                              foreach($data as $key => $value)  
				                          {  
				                              if ($value['username']==$_SESSION['uname']) {

				                              $data[$key]['gender']= $gender ;
				            
				                         
				                              }           
				                          } 

										modifyprof($data);
	    }}

//////////////////////////////////////////////////////---DOB

if(isset($_POST["Submit4"]))  
	 {  
			    

							
						        $dob = $_POST["dob"];

							        	
				                          if (isset($data)) 
				                          {

				                              foreach($data as $key => $value)  
				                          {  
				                              if ($value['username']==$_SESSION['uname']) {

				                              $data[$key]['dob']=   $dob ;
				            
				                         
				                              }           
				                          } 

				                       modifyprof($data);
 
	    }}

*/
	
	  $uname= $_SESSION['userdata']['Username'];

 $name =  $email = $gender = $dob= "";
 $default1=$default2=$default3=$default4="";

                       $value = fetchuser( $uname);

                          if (isset($data) || true) 
                          {

                               
                              if ($value['Username']==$uname) {

                               	$default1 = $value['First_name'];
	                            $default2 = $value['Email'];
	                            $default3 = $value['Gender'];
	                            $default4 = $value['Dob'];
	                            $default5 = $value['Last_name'];
                         
                              }          
                          }

                      
?>



 <fieldset class="fields">
    <legend >EDIT PROFILE</legend>

 <form action="../controller/bm.UpdateUser.php" method="POST" enctype="multipart/form-data" onsubmit="return validateform(this);">

 	<div class="container" align="center">
 		<div class="container">
 			

 			<div class="row">
 				<div class="col-25">
 					
 				</div>
 				<div class="col-75">
 					
 				</div>
 			</div>

 			<div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" name="fname"  onblur="checkfName()" onkeyup="checkfName() placeholder="First name" value =  <?php echo $default1;?> />
                      <span class="error">* <?php echo $nameErr;?></span> <br>
      </div>
    </div>

             <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" name="lname" onblur="checklName()" onkeyup="checklName() placeholder="Last name" value =  <?php echo $default5;?> />
                      <span class="error">* <?php echo $nameErr;?></span> <br>
      </div>
    </div>

               <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" name = "email"value =  <?php echo $default2;?> />
                     <span class="error">* <?php echo $emailErr;?></span><br>
      </div>
    </div>

                <div class="row">
      <div class="col-25">
        <label for="gender">Gender</label>
      </div>
      <div class="col-75">
        <input type="radio" id="male" name="gender" value="male" <?php echo ($default3=='male'?' checked=checked':''); ?>onblur="checkGender()">
                     <label for="male">Male</label>   

<input type="radio"id="female" name="gender"value="female" <?php echo($default3=='female'?' checked=checked':''); ?>onblur="checkGender()">                  <label for="female">Female</label>

<input type="radio" id="other" name="gender" value="other" <?php echo ($default3=='other'?' checked=checked':''); ?>onblur="checkGender()">                   <label for="other">Other</label>
                      <span class="error">* <?php echo $genderErr;?></span><br>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="dob">Date of Birth</label>
      </div>
      <div class="col-75">
        <input type="date" name="dob" value =  <?php echo $default4;?> > 
                     <span class="error">* <?php echo $DBerr;?></span><br>

                       <input type="hidden" name="un" value="<?php echo $uname ?>">
      </div>
    </div>

    <div class="row">
    	<br><br>
        <input type="Submit" name="Submit4" id="Submit4" value="Change">
      </div>
      <br><br>




 		</div>
 	</div>

<!-- <label>First Name</label>  
                     <input type="text" name="fname" value =  <?php //echo $default1;?> />
                      <span class="error">* <?php //echo $nameErr;?></span> <br>
<label>Last Name</label>  
                     <input type="text" name="lname" value =  <?php //echo $default5;?> />
                      <span class="error">* <?php //echo $nameErr;?></span> <br>

<label>E-mail</label>
                     <input type="text" name = "email"value =  <?php //echo $default2;?> />
                     <span class="error">* <?php //echo $emailErr;?></span><br>
                  
  


<legend>Gender</legend>

<input type="radio" id="male" name="gender" value="male" <?php //echo ($default3=='male'?' checked=checked':''); ?>>
                     <label for="male">Male</label>   

<input type="radio"id="female" name="gender"value="female" <?php// echo($default3=='female'?' checked=checked':''); ?>>                  <label for="female">Female</label>

<input type="radio" id="other" name="gender" value="other" <?php //echo ($default3=='other'?' checked=checked':''); ?>>                   <label for="other">Other</label>
                      <span class="error">* <?php //echo $genderErr;?></span><br>

<legend>Date of Birth:</legend>
                     <input type="date" name="dob" value =  <?php //echo $default4;?> > 
                     <span class="error">* <?php //echo $DBerr;?></span><br>

                       <input type="hidden" name="un" value="<?php //echo $uname ?>">
                     <input type="Submit" name="Submit4" value="Change"><br><br> -->



  </fieldset> 
 


</body>
</html>
 <?php include 'Footer.view.php'; ?>
