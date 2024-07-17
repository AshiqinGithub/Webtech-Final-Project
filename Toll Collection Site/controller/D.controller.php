<?php 

require_once ('../model/D.model.php');

function fetchAllProducts(){
	return showAllproduct();

}

function fetchuser($un){
	return showuser($un);

}

function changepass($un, $data){
	
	if( modiPass($un, $data))
	{
		echo "Password has been changed";
		header('Location: ../view/D.Change_pass.php');
	}
	else
	{
		echo "Change hampered";
	}

}


function fetchAllTolldata($un){
	return showAllTollData($un);

}