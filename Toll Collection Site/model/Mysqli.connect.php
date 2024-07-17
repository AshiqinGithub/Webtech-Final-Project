<?php

$conn = mysqli_connect("localhost","root","","webtech") or die("Connection failed");

$sql = 'SELECT * FROM users';

$result = mysqli_query($conn,$sql) or die ("Something went wrong");
$output = "";
if(mysqli_num_rows($result > 0))
{
	$output .= '<table>
			<thead>
				<tr>
				<th>UserID</th>
				</tr>
			</thead>';
			while($row = mysqli_fetch_assoc($result))
			{
				
			}
			
}

?>