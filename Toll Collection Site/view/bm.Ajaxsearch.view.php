
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require '../controller/boothaccess.controller.php';
$page='Search';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search</title>
	<style>
/*		*{
			font-family: Helvetica;
			font-size: 14px;
		}*/

		form{
			font-family: Poppins;
			font-size: 14px;
			margin: auto;
			width: 300px;
			padding: 10px;
			margin-top: 30px;
			box-shadow: 0px 0px 10px #aaa;
			border-radius: 10px;
		}
		.search{
			width: 280px;
			padding: 10px;
			border-radius: 10px;
			border: solid thin #aaa;
			outline: none;
		}
		.results{
			width: 100%;
			padding-top: 4px;
			border-radius: 10px;
			border: solid thin #aaa;
			outline: none;
		}
		.results div:hover{
			background-color: #00cfff;
			color: white;
			cursor: pointer;
		}

		.hide{
			display: none;
		}

	</style>
</head>
<body>

	<?php require_once 'Header.view.php'; ?>
	

	<form>
		<h3>Search</h3>
		<input class ="search js-search" oninput="get_data(this.value)" type="text" name="" autofocus="true" placeholder="Type a username to search"><br>
		<div class="results js-results hide">
			<!-- <div>Mary</div>
			<div>John</div>
			<div>Tony</div> -->
		</div>
		<br>
		<br>
	</form>
	<div>&nbsp;</div>

	<?php require_once 'Footer.view.php'; ?>


</body>

<script src="../validations/search.val.js" type="text/javascript">
/*	function get_data(text)
	{
		//var text = document.querySelector(".js-search").value; //replaced with 'this.value' in form section. multiple variables will stil require this method of declaration

		if(text.trim() =="")
			return

		if(text.trim().length < 2) //will only results after 2 characters have been input
			return


		var form = new FormData(); //creating a new form as object
		form.append('text',text);

		var ajax = new XMLHttpRequest();

		ajax.addEventListener('readystatechange', function(e)
			{
				if(ajax.readyState == 4 && ajax.status == 200)
				{
					//results will be retreived here
					handle_result(ajax.responseText);
				}
			});
		ajax.open('post','testfile.php',true);
		ajax.send(form);

	}

	function handle_result(result)
	{
		//console.log(result); //for error debugging purpose

		var result_div = document.querySelector(".js-results");
		var str ="";
		var obj = JSON.parse(result); //although it seems like an object but it will be an array once parsed
		for (var i = obj.length - 1; i >= 0; i--) {

			//console.log(obj[i].Username); //obj[index number], column name
			str += `<a href='Searchresult.view.php?id=${obj[i].ID}'><div>` + obj[i].First_name + `</div></a>`;
		}
		result_div.innerHTML = str;

		if(obj.length > 0)
		{
			show_results();
		}
		else
		{
			hide_results();
		}
		
	}

	function show_results()
	{
		var result_div = document.querySelector(".js-results");
		result_div.classList.remove("hide");
	}

	function hide_results()
	{
		var result_div = document.querySelector(".js-results");
		result_div.classList.add("hide");
	}
*/
</script>
</html>