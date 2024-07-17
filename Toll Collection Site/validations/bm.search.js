	function get_data(text)
	{
		//var text = document.querySelector(".js-search").value; //replaced with 'this.value' in form section. multiple variables will stil require this method of declaration

		if(text.trim() =="")
			return

		if(text.trim().length < 2) //will only results after 2 characters have been input
			return


		var form = new FormData(); //creating a new form as object
		form.append('text',text); //passing the text input in form to object

		var ajax = new XMLHttpRequest();

		ajax.addEventListener('readystatechange', function(e)
			{
				if(ajax.readyState == 4 && ajax.status == 200)
				{
					//results will be retreived here
					handle_result(ajax.responseText);
				}
			});
		ajax.open('post','../controller/bm.Livesearch.php',true);
		ajax.send(form);

	}

	function handle_result(result)
	{
		//console.log(result); //for error debugging purpose

		var result_div = document.querySelector(".js-results");
		var str ="";
		var obj = JSON.parse(result); //although it seems like an object but it will be an array once parsed
		for (var i = obj.length - 1; i >= 0; i--) {

			//console.log(obj[i].First_name); //obj[index number], column name
			str += `<a href='bm.Searchresult.view.php?id=${obj[i].ID}'><div>` + obj[i].Username + `</div></a>`;
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