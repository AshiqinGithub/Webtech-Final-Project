<?php
require_once 'Dbconnect.model.php';

function updateProfile($un, $data){
    $conn = dbcon();
    $selectQuery = "UPDATE users set First_name = ?, Last_name = ?, Email = ?, Gender =?, Dob=? where Username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);

        $stmt->execute([$data['fname'], $data['lname'], $data['email'], $data['gender'],$data['dob'], $un]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

//edit profile picture

function updatePic($un, $data){
    $conn = dbcon();
    $selectQuery = "UPDATE users set Picture = ? where Username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);

        $stmt->execute([$data['picture'] ,$un]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

//edit password

function modiPass($un, $data){


              $data= password_hash($data, PASSWORD_DEFAULT);


    $conn = dbcon();
    $selectQuery = "UPDATE users set Password = ? where Username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);

        $stmt->execute([$data ,$un]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function showuser($un){
    $conn = dbcon();
    $selectQuery = "SELECT * FROM `users` where Username = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$un]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}


//----------------------my transections
function showAllTollData($un)
{
    $conn=dbcon();
    
    $sqlquery = "SELECT * FROM accounts where Username = ?";

    try
    {
        $stmt = $conn->prepare($sqlquery);
        $stmt->execute([$un]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $row;
}

////////////////////////-------additional info ---------------////////////////////////

function addExtraData($data,$un)
{
    $conn=dbcon();
   
   
        $sqlquery = "UPDATE users set License_no = ?,Vehicle_type=?  where Username = ?";
        try
        {
            $stmt = $conn->prepare($sqlquery);
            $stmt->execute([$data['ln'],$data['vt'], $un]);

            $error = 'Successfully stored';
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    $conn = null;
    return true;
    
}

?>