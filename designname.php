<?php
// list of printer types for specific manufacturer
include("includes/con.php");

header("Content-type: text/xml");

$class_id = $_POST['typ'];

echo "<?xml version=\"1.0\" ?>\n";
echo "<designnames>\n";

$select = mysql_query("SELECT class_group.description AS cDesc, standard_name.description AS sDesc, materialdesc_list.id, materialdesc_list.designation_name FROM standard_name JOIN class_group ON standard_name.id=class_group.standard_name_id JOIN materialdesc_list ON class_group.id=materialdesc_list.class_group_id WHERE materialdesc_list.class_group_id = $class_id");

	while ($row=mysql_fetch_array($select)) {
		echo "<designname>\n\t<id>".$row['id']."</id>\n\t<design_name>".$row['designation_name']."</design_name>\n</designname>\n";
	}

echo "</designnames>";
?>