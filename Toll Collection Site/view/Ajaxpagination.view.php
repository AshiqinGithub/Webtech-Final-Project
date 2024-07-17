<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/tables.css" rel="stylesheet"/>
	<title>Show All Data</title>
</head>
<body>

	<div id="table-data">

		<!-- <table>
			<thead>
				<tr>
				<th>UserID</th>
		   		<th>First Name</th>
		   		<th>Last Name</th>
		   		<th>Username</th>
		   		<th>Email</th>
		   		<th>Gender</th>
		   		<th>Date of Birth</th>
		   		<th>Profile Image</th>
		   		<th>Role</th>
		   		<th>Entry Date</th>
		   		<th style="display: none;">Password</th>
		   		<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
		<div id="pagination">
			
		</div> -->
		
	</div>
    
    <script src="../jquery/jquery.min.js"></script>
    <script type="text/javascript">
    	//Jquery code section
    	$(document).ready(function(){
    		function loadTable(page){
    			$.ajax({
    				url:"../model/Mysqli.connect.php",
    				type: "POST",
    				data: {page_no :page },
    				success: function(data)
    				{
    					$("#table-data").html(data);
    				}
    			});
    		}
    		loadTable();

    		//Pagination's part
    		$(document).on("click","#pagination a",function(e){
    			e.preventDefault();
    			var page_id = $(this).attr("id");

    			loadTable(page_id);
    		})
    	});
    </script>
</body>
</html>