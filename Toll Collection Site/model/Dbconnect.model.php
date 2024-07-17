<?php
session_start();
 //defined ('BASEPATH') OR exit ('No direct script access allowed');

function dbcon()
{
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "webtech";

	try
	{
		$conn = new PDO("mysql:host=$host;dbname=$dbname",$username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

		// echo "Connected successfully";
	}
	catch (PDOException $e)
	{
		echo 'Connection failed: '.$e->getMessage();
	}
	return $conn;
}

