<?php 

require_once ("../model/User.model.php");

function fetchallUsers()
{
	return showallUsers();
}

function fetchbyID($id)
{
	return browsebyid($id);
}