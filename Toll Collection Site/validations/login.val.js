function validateform(){  
var name=document.loginform.username.value;  
var password=document.loginform.pass.value;
		  
if (name==null || name==""){  
		alert("Username required");  
		return false;  
}else if(password.length<2){  
	    alert("Password must be at least 2 characters long.");  
		return false;  
		}  
}
function checkName() {
	if (document.getElementById("username").value == "") {
		document.getElementById("nameErr").style.color = "red";
	  	document.getElementById("nameErr").innerHTML = "Username cannot be empty";
	  	document.getElementById("username").style.borderColor = "red";
	  	document.getElementById("login").disabled = true;
	}else{
	  	document.getElementById("nameErr").innerHTML = "";
	  	document.getElementById("username").style.borderColor = "green";
	  	document.getElementById("login").disabled = false;
	}
	
}

      function checkPass(){
      if (document.getElementById("pass").value == "") {
      	document.getElementById("passErr").style.color = "red";
	  	document.getElementById("passErr").innerHTML = "Password can't be blank";
	  	document.getElementById("pass").style.borderColor = "red";
	  	document.getElementById("login").disabled = true;
	}else{
		document.getElementById("passErr").innerHTML = "";
	  	document.getElementById("pass").style.borderColor = "green";
	  	document.getElementById("login").disabled = false;
	}
}



///////////////////////////////////////Trial and errors/////////////////////////
// function UsernameValidation()
// {
//     var pattern = /^[a-zA-Z_0-9]*$/; 
// 	var username = document.getElementById("username");
// 	var usererr = document.getElementById("usererr");

// 	if(username.value !== '')
// 	{
// 		if(pattern.test(username.value))
// 		{
// 			usererr.innerHTML='';
// 		}
// 		else
// 		{
// 			usererr.innerHTML = 'Invalid Username';
// 		}
// 	}
// 	else
// 	{
// 		usererr.innerHTML = 'Username required';
// 	}
// }

// document.loginform.username.addEventListener('keyup',UsernameValidation);

// function PasswordValidation()
// {
// 	var pass = document.getElementById("pass");
// 	var passerr = document.getElementById("passerr");

// 	if(pass.value == "")
// 	{
// 		passerr.innerHTML = "Password required"
// 	}
// 	else
// 	{
// 		passerr.innerHTML='';
// 	}
// }

// document.loginform.pass.addEventListener('keyup',PasswordValidation);

// function LoginformValidation()
// {
// 	let userval = document.forms["loginform"]["username"].value;
// 	let passval = document.forms["loginform"]["pass"].value;

// 	if(userval == '' && passval == '')
// 	{
// 		document.getElementById('usererr').innerHTML = 'Username required';
// 		document.getElementById('passerr').innerHTML = 'Password required';
// 		return false;
// 	}
// 	// else
// 	// {
// 	// 	document.getElementById('usererr').innerHTML = '';
// 	// 	document.getElementById('passerr').innerHTML = '';
// 	// }
// }