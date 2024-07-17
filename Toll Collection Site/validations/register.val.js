

function validateform(){

var fname     = document.registerform.fname.value;
var lname     = document.registerform.lname.value;  
var username  = document.registerform.username.value;
var email     = document.registerform.email.value;  
var password1 = document.registerform.pass.value;
var password2 = document.registerform.pass2.value;
var gender    = document.registerform.gender.value;
var dob       = document.registerform.dob.value;
var button    = document.getElementById("register");

		  
if (fname == null || fname == "")
{
	alert("First name required");
	button.disabled = true
	return false;
}
else if(lname == null || lname == "")
{
	alert("Last name required");
	button.disabled = true
	return false;
}
else if(username == null || username == "")
{
	alert("Username required");
	button.disabled = true
	return false;
}
else if(email == null || email == "")
{
	alert("Email required");
	button.disabled = true
	return false;
}
else if(password1.length<3)
{
	alert("Password must be 3 characters or longer");
	button.disabled = true
	return false;
}
else if(password2 == null || password2 == "")
{
	alert("Password re-type required");
	button.disabled = true
	return false;
}
else if(gender == null || gender == "")
{
	alert("Gender required");
	button.disabled = true
	return false;
}
else if(dob == null || dob == "" )
{
	alert("Date of Birth required");
	button.disabled = true
	return false;
}

}

/*
Functions needed
function checkfName() - First Name field check
function checklName() - Last Name field check
function checkuName() - User Name field check
function checkEmail() - Email field check
function checkPass1() - Password 1 field check
function checkPass2() - Password 2 field check
function checkGender() - Gender field check
function checkDob() - DOB Field check
*/

function checkfName()
{
	var namepattern = /([A-Z])\w+/g; //Allows spaces, dot, A-Z, a-z
	var fname = document.getElementById("fname");
	var fnameErr = document.getElementById("fnameErr");
	var reg = document.getElementById("register");

	if (fname.value == "")
	{
		fnameErr.style.color = "red";
		fnameErr.innerHTML = "Please enter first name";
		fname.style.borderColor = "red";
		reg.disabled = true;
	}
	else if(!namepattern.test(document.registerform.fname.value))
	{
		fnameErr.style.color = "red";
		fnameErr.innerHTML = "Incorrect first name format";
		fname.style.borderColor = "red";
		reg.disabled = true;
	}
	else
	{
		fnameErr.innerHTML = "";
		fname.style.borderColor = "green";
		reg.disabled = false;
	}
}

function checklName()
{
	var namepattern = /([A-Z])\w+/g; //Allows spaces, dot, A-Z, a-z
	var lname = document.getElementById("lname");
	var lnameErr = document.getElementById("lnameErr");
	var reg = document.getElementById("register");

	if (lname.value == "")
	{
		lnameErr.style.color = "red";
		lnameErr.innerHTML = "Please enter last name";
		lname.style.borderColor = "red";
		reg.disabled = true;
	}
	else if(!namepattern.test(document.registerform.lname.value))
	{
		lnameErr.style.color = "red";
		lnameErr.innerHTML = "Incorrect last name format";
		lname.style.borderColor = "red";
		reg.disabled = true;
	}
	else
	{
		lnameErr.innerHTML = "";
		lname.style.borderColor = "green";
		reg.disabled = false;
	}
}
 
// function checklName()
// {
// 	if (document.getElementById("lname").value == "")
// 	{
// 		document.getElementById("lnameErr").innerHTML = "Please enter last name";
// 		document.getElementById("lname").style.borderColor = "red";
// 	}
// 	else
// 	{
// 		document.getElementById("lnameErr").innerHTML = "";
// 		document.getElementById("lname").style.borderColor = "green";
// 	}
// }

function checkuName()
{
	var user = document.getElementById("username");
	var usererr = document.getElementById("unameErr");
	var uformat = /^(?=.{5,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/;
	var reg = document.getElementById("register");

	if (user.value == "")
	{
		usererr.style.color = "red";
		usererr.innerHTML = "Please enter username";
		user.style.borderColor = "red";
		reg.disabled = true;
	}
	else if(!uformat.test(document.registerform.username.value))
	{
		usererr.style.color = "red";
		usererr.innerHTML = "Incorrect format. Use letters & underscore, 5-20 charactes long";
		user.style.borderColor = "red";
		reg.disabled = true;
	}
	else
	{
		usererr.innerHTML = "";
		user.style.borderColor = "green";
		reg.disabled = false;
	}
}

function checkEmail()
{
	var emailpattern = /^[a-zA-Z\d\._]+@[a-zA-Z\d\._]+[\.][a-zA-Z\d\._]+$/;
	var email = document.getElementById("email");
	var emailErr = document.getElementById("emailErr");
	var reg = document.getElementById("register");

	if (email.value == "")
	{
		emailErr.style.color = "red";
		emailErr.innerHTML = "Please enter email";
		email.style.borderColor = "red";
		reg.disabled = true;
	}
	else if(!emailpattern.test(document.registerform.email.value))
	{
		emailErr.style.color = "red";
		emailErr.innerHTML = "Invalid email format";
		email.style.borderColor = "red";
		reg.disabled = true;
	}
	else
	{
		emailErr.innerHTML = "";
		email.style.borderColor = "green";
		reg.disabled = false;
	}
}  

function checkPass1()
 {
 	var pass1 = document.getElementById("pass");
 	var passerr = document.getElementById("pass1Err");
 	var reg = document.getElementById("register");

 	if(pass1.value == "")
 	{
 		pass1Err.style.color = "red";
 		passerr.innerHTML = "Please enter password";
 		pass1.style.borderColor = "red";
 		reg.disabled = true;
 	}
 	else if(pass1.value.length<3)
 	{
 		pass1Err.style.color = "red";
 		passerr.innerHTML = "Password must be 3 characters or longer";
 		pass1.style.borderColor = "red";
 		reg.disabled = true;
 	}
 	else
 	{
 		passerr.innerHTML = "";
 		pass1.style.borderColor = "green";
 		reg.disabled = false;
 	}
 }

 function checkPass2()
 {
 	var pass1 = document.getElementById("pass");
 	var pass2 = document.getElementById("pass2");
 	var pass2err = document.getElementById("pass2Err");
 	var reg = document.getElementById("register");

 	if(pass2.value == "")
 	{
 		pass2Err.style.color = "red";
 		pass2err.innerHTML = "Please confirm password";
 		pass2.style.borderColor = "red";
 		reg.disabled = true;
 	}
 	else if(pass1.value != pass2.value)
 	{
 		pass2Err.style.color = "red";
 		pass2err.innerHTML = "Password did not match";
 		pass2.style.borderColor = "red";
 		reg.disabled = true;
 	}
 	else
 	{
 		pass2err.innerHTML = "";
 		pass2.style.borderColor = "green";
 		reg.disabled = false;
 	}
 }

function checkGender()
{
	var male = document.getElementById("Male");
	var female = document.getElementById("Female");
	var nopref = document.getElementById("NoPref");
	var genderr = document.getElementById("genderErr");
	var gender = document.registerform.gender.value;
	var reg = document.getElementById("register");


    if(gender=="")
    {
    	genderr.style.color = "red";
    	genderr.innerHTML="Gender must be selected";
    	reg.disabled = true;
    }
	else if(male.Checked)
	{
		genderr.innerHTML="";
		reg.disabled = false;
	}
	else if(female.Checked)
	{
		genderr.innerHTML="";
		reg.disabled = false;
	}
	else if(nopref.Checked)
	{
		genderr.innerHTML="";
		reg.disabled = false;
	}
}

function checkDob()
{
	var dob = document.getElementById("dob");
	var doberr = document.getElementById("dobErr");
	var reg = document.getElementById("register");

	if(dob.value == "")
	{
		doberr.style.color = "red";
		doberr.innerHTML = "Please select date of birth";
		dob.style.borderColor = "red";
		reg.disabled = true;
	}
	else
	{
		doberr.innerHTML = "";
		dob.style.borderColor = "green";
		reg.disabled = false;
	}
}

//Live username check during registration
function duplicateusercheck()
	{
		//Start of Jquery AJAX part. We can also type $.ajax instead of jQuery.ajax & it will do the exact same thing.
		jQuery.ajax({
			url:"../controller/Liveusernamecheck.controller.php", //link to the controller file
			data: 'username='+$("#username").val(), //Here 'username' is replacement of var username & '#username' is the id of form input
			type: "POST", //data passing method

			// success is a callback function, it only executes when request succeeds
			//if we compare it with try-catch method, success will be equivalent to the try part
			success: function(data)  
			{
				$("#unameDup").html(data); //if request succeeds, we can manipulate the specified html element using the data from file in url.
			},
			error:function(){}
			//error callback function if previous request fails
		});
	}

//Live email check during registration
function duplicatemailcheck()
{
	jQuery.ajax({
			url:"../controller/Liveemailcheck.controller.php",
			data: 'email='+$("#email").val(),
			type: "POST",
			success: function(data)
			{
				$("#emailDup").html(data);
			},
			error:function(){}
		});
}


//Username Check Regex Explanation
// ^(?=.{8,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$
//  └─────┬────┘└───┬──┘└─────┬─────┘└─────┬─────┘ └───┬───┘
//        │         │         │            │           no _ or . at the end
//        │         │         │            │
//        │         │         │            allowed characters
//        │         │         │
//        │         │         no __ or _. or ._ or .. inside
//        │         │
//        │         no _ or . at the beginning
//        │
//        username is 8-20 characters long



