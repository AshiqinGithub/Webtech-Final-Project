jQuery(document).ready(function() {

	//1st Method - Shorthand version
/*	$("#ajaxform").submit(function(e){

		e.preventDefault();

		var inputs = $(this).serialize();
        //Shorthand part, using $.post instead of $.ajax
		$.post("../controller/Ajaxappend.controller.php", inputs, function(){
			$('.content').load('../controller/Ajaxappendreplacer.controller.php');
		});
	});*/
	
	//2nd Method
	$("#append").click(function(e){

		e.preventDefault();

		var inputs = $('#ajaxform').serialize();

		$.ajax({
			type: "POST",
			url : "../controller/Ajaxappend.controller.php",
			data: inputs,
			success: function()
			{
				$('.content').load('../controller/Ajaxappendreplacer.controller.php');
			}
		});
	});
});