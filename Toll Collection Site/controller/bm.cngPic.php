<?php
require_once '../model/bm.model.php';
if(isset($_POST["submit"]))
{

               $target_dir="../uploads/";
         $target_file=$target_dir. basename($_FILES["fileToUpload"]["name"]);
         $uploadOK=1;
         $imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


         if(isset($_POST["submit"]))
         {
             $check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                
                 if($check !== false)
                 {
                     echo "File is an image - " . $check["mime"] . ".";
                     $uploadOK = 1;
                 }
                 else
                 {
                     echo "File is not an image.";
                     $uploadOK =0;
                 }
         }

         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") 
             {
               echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
               $uploadOK = 0;
             }

         if ($_FILES["fileToUpload"]["size"] > 400000) 
             {
               echo "Sorry, your file is too large.";
               $uploadOK = 0;
             }

         if ($uploadOK == 0) 
         {
           echo "Sorry, your file was not uploaded.";
         }
         else 
         {
           if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
            {
             
                                $data['picture']=$target_file;
                                
                                if (updatePic($_SESSION['userdata']['Username'], $data)) {
                                  echo 'Successfully updated!!';
                                  header('Location: ../view/bm.edit propic.php');
                                }
                               else
                                {
                                echo 'You are not allowed to access this page.';
                                }


            } 
            else {
             echo "Sorry, there was an error uploading your file.";
           }
         }


}

?>