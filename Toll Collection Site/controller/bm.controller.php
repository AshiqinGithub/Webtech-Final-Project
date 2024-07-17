<?php 

require_once ('../model/bm.model.php');

function fetchAllTolldata(){
	return showAllTollData();

}

function fetchuser($un){
	return showuser($un);

}

function changepass($un, $data){
	
	if( modiPass($un, $data))
	{
		echo "Password has been changed";
		header('Location: ../view/bm.change password.php');
	}
	else
	{
		echo "Change hampered";
	}

}




function collectToll($data){
	return addToll($data);

	

}




