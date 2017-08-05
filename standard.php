<?php
// manufacturer_list
include("includes/con.php");

header("Content-type: text/xml");
echo "<?xml version=\"1.0\" ?>\n";
echo "<standards>\n";
$select = mysql_query("SELECT * FROM standard_name");

	while($row = mysql_fetch_array($select)) {
		echo "<standard>\n\t<id>".$row['id']."</id>\n\t<description>".$row['description']."</description>\n</standard>\n";
	}


echo "</standards>";
?>