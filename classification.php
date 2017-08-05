<?php
// list of printer types for specific manufacturer
 include("includes/con.php"); 

header("Content-type: text/xml");

$std = $_POST['stan'];

echo "<?xml version=\"1.0\" ?>\n";
echo "<classifications>\n";
$select = mysql_query("SELECT id, description FROM class_group WHERE standard_name_id = '$std'");

	while($row = mysql_fetch_array($select)) {
		echo "<classification>\n\t<id>".$row['id']."</id>\n\t<description>".$row['description']."</description>\n</classification>\n";
	}

echo "</classifications>";
?>