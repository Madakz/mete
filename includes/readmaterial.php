<?php
	include "dbcontroll.php";

	$db_handle = new DBController();
	$b = $_POST["clas"];
	if(!empty($_POST["keyword"])) 
	{
		$query ="SELECT * FROM materialdesc_list WHERE class_group_id='$b' AND designation_name like '%" . $_POST["keyword"] . "%' ORDER BY id LIMIT 0,6";
		$result = $db_handle->runQuery($query);
		if(!empty($result)) 
		{
?>
			<ul id="material-list">

	<?php
		foreach($result as $country) 
			{
	?>
				<li onClick="selectCountry('<?php echo $country["designation_name"]; ?>');"><?php echo $country["designation_name"]; ?></li>
	<?php   
			} 
	?>
			</ul>
	<?php 
		}else{
			?>
			<ul id="material-list">
				<li>No results Found</li>
			</ul>
			<?php

		}
 	} 
 	?>
