<?php

require_once '../model/Dbconnect.model.php';

		try
		{
			$con = dbcon();
			$sqlquery = 'SELECT * FROM users ORDER BY ID ASC';
			$stmt = $con->prepare($sqlquery);
			$stmt->execute();
			$names = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$stmt->closeCursor();
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			exit();
		}

		if($names == true) 
		{
			?>

			<ul class="group">
				<?php
				foreach ($names as $name) {

					$name = $name['Username']; ?>

					<li><?php echo $name;?></li>

		  <?php } ?>

			</ul>
  <?php } ?>

  <p class="success">Entry added successfully.</p>