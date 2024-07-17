<?php

require 'Dbconnect.model.php';

$conn = dbcon(); //declaring as global variable to reduce calls


//All user showcase 
function showallUsers()
{
	global $conn;
	
	$sqlquery = "SELECT * FROM users";

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

//Browse User by ID
function browsebyid($id)
{
	global $conn;
	$sqlquery = "SELECT * FROM users WHERE ID = ?";

	try
	{
		$stmt = $conn->prepare($sqlquery);
		$stmt->execute([$id]);
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	return $row;
}

//Duplicate user check
function existuser($data)
{
	global $conn;

	$sqlquery = "SELECT * FROM users WHERE Username=:username";

	try
	{
		$stmt = $conn->prepare($sqlquery);
	    $stmt->execute([
		':username' => $data['username']
		               ]);
		$row = $stmt->fetch();
		if(!empty($row))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
}


//User registration function
function addUser($data)
{
	global $conn; 
    if(existuser($data))
    {
    	echo '<script>alert("Username already exists");</script>';
    }
    else
    {
    	$sqlquery = "INSERT into users (First_name, Last_name, Username, Email, Password, Gender, Dob) VALUES (:fname, :lname, :username, :email, :pass, :gender, :dob)";
	    try
	    {
		    $stmt = $conn->prepare($sqlquery);
		    $stmt->execute([
			    ':fname' => $data['fname'],
			    ':lname' => $data['lname'],
			    ':username' => $data['username'],
			    ':email' => $data['email'],
			    ':pass' => $data['pass'],
			    ':gender' => $data['gender'],
			    ':dob' => $data['dob']
		    ]);
		    echo '<script>alert("Registration Successful");</script>';
	    }
	    catch(PDOException $e)
	    {
		    echo $e->getMessage();
	    }
    }
    $conn = null;
    return true;
	
}


//Login Function
function loginUser($data)
{
	global $conn;

	$sqlquery = "SELECT * FROM users WHERE Username=:username";

	try
	{
		//Checking whether the user even exists
		$stmt = $conn->prepare($sqlquery);
		$stmt->execute([
			':username' => $data['username']
		]);
		$row = $stmt->fetch();
		if(!empty($row))
		{
			$row['Password'];
			//password_verify($data['pass'], $row['Password']);
			if(password_verify($data['pass'],$row['Password'])==1)
			{
				$_SESSION['userdata'] = $row;
				return true;
				// echo '<script>alert("Login Successful");</script>';
			}
			else
			{
				return false;
				// echo '<script>alert("Login Failed");</script>';
			}

		}
		else
		{
			return false;
			// echo '<script>alert("User does not exist");</script>';
		}
		
	// 	$stmt->execute([
	// 	    ':username' => $data['username'],
	// 	    ':pass' => $data['pass']
	// 	]);
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	$conn = null;
	return true;
}

//Delete entries from database
function deletentry($id)
{
	global $conn;
	$sqlquery = "DELETE FROM users WHERE ID = ?";
	try
	{
		$stmt = $conn->prepare($sqlquery);
		$stmt->execute([$id]);
	}
	catch (PDOException $e)
	{
		echo $e->getMessage();
	}
	$conn = null;
	return true;
}

//User Update function
function updateUser($id, $data)
{
	global $conn; 
    	$sqlquery = "UPDATE users set First_name = ?, Last_name = ?, Username = ?, Email = ?, Password = ?, Gender = ?, Dob = ?, Picture = ? WHERE ID = ?";
	    try
	    {
		    $stmt = $conn->prepare($sqlquery);
		    $stmt->execute([
			    $data['fname'],
			    $data['lname'],
			    $data['username'],
			    $data['email'],
			    $data['pass'],
			    $data['gender'],
			    $data['dob'],
			    $data['image'],
			    $id
		    ]);
		    echo '<script>alert("Update Successful");</script>';
	    }
	    catch(PDOException $e)
	    {
		    echo $e->getMessage();
	    }
	    $conn = null;
	    return true;
}

//User Search function - Unused
function searchUser($username)
{
	global $conn;
	$sqlquery = "SELECT * FROM `users` WHERE Username LIKE '%username%'";

	try
	{
		$stmt = $conn->query($sqlquery);
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $rows;
}

//Entry search - Unused
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
		// 	$row = $data;
		// 	return true;
		// }
		// else
		// {
		// 	echo '<script>alert("No Match");</script>';
		// 	return false;
		// }

	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	$conn = null;
	return $row;
}

//Function used in ajax live search by name match

function livesearchname($data)
{
	global $conn;

	//Reading from database
	//$text = addslashes($text);
	$sql = "SELECT `ID`, `First_name`, `Last_name`, `Username`, `Email`, `Password`, `Gender`, `Dob`, `RoleID`, `Entry_Date`, `Update_Time` FROM `users` WHERE First_name LIKE '$data%' ";
	$stmt = $conn->prepare($sql); //if prepare cause issue, switch to query
    $stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($result);	
}

//Function used in live username check validation during registration
function DuplicateUsercheck($data)
{
	global $conn;	

	$sqlquery = "SELECT * FROM users WHERE Username LIKE '$data'";
	$stmt  = $conn->prepare($sqlquery);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	if(!empty($rows))
	{
		echo "<p style='color:red'>Username already exists</p>";
	}
	else
	{
		echo "<p style='color:green'>Username available</p>";
	}
}

//Function used in live mail check validation during registration
function Duplicatemailcheck($data)
{
	global $conn;	

	$sqlquery = "SELECT * FROM users WHERE Email LIKE '$data'";
	$stmt  = $conn->prepare($sqlquery);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	if(!empty($rows))
	{
		echo "<p style='color:red'>Email already registered</p>";
	}
	else
	{
		echo "<p style='color:green'>Email is available to register</p>";
	}
}

//Function used in live username check validation during edit
function EditUsercheck($data)
{
	global $conn;	

	$sqlquery = "SELECT * FROM users WHERE Username LIKE '$data'";
	$stmt  = $conn->prepare($sqlquery);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	if(!empty($rows))
	{
		echo "<p style='display:none;'></p>";
	}
	else
	{
		echo "<p style='color:green'>Username available</p>";
	}
}

//Function used in live mail check validation during edit
function Editemailcheck($data)
{
	global $conn;	

	$sqlquery = "SELECT * FROM users WHERE Email LIKE '$data'";
	$stmt  = $conn->prepare($sqlquery);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	if(!empty($rows))
	{
		echo "<p style='display:none;'></p>";
	}
	else
	{
		echo "<p style='color:green'>This email has not registered yet</p>";
	}
}





////////////////////////////////////////////////////
///////////BACK END VALIDATION GOES HERE////////////
////////////////////////////////////////////////////