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





//----------------collect toll-----------------


function addToll($data)
{
    $conn=dbcon();
   
   
        $sqlquery = "INSERT into accounts (Username,Vehicle_type,Toll_fee) VALUES (:un, :vt, :tf)";
        try
        {
            $stmt = $conn->prepare($sqlquery);
            $stmt->execute([
                ':un' => $data['un'],
                ':vt' => $data['vt'],
                ':tf' => $data['tf'],
            ]);
            $error = 'Successfully stored';
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    $conn = null;
    return true;
    
}


//showw all Collected rtoll

function showAllTollData()
{
    $conn=dbcon();
    
    $sqlquery = "SELECT * FROM accounts";

    try
    {
        $stmt = $conn->prepare($sqlquery);
        $stmt->execute();
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $row;
}


//------------SEARCHG DRIVER

function searchentry($data)
{
    global $conn;

    $sqlquery = "SELECT * FROM users WHERE Username=:username";

    try
    {
        //Checking whether the user even exists
        $stmt = $conn->prepare($sqlquery);
        $stmt->execute([$data['username']]);
        $row = $stmt->fetch();
        //var_dump($row);

        // if(!empty($row))
        // {
        //  $row = $data;
        //  return true;
        // }
        // else
        // {
        //  echo '<script>alert("No Match");</script>';
        //  return false;
        // }

    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return $row;
}



?>