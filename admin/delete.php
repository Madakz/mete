<?php
	include("../includes/con.php");

	function delete($tablename, $del){
		$query = mysql_query("DELETE FROM $tablename WHERE id='$del'") or die(mysql_error());
	}

	if ($_GET['shekinah']) {
		$del_id = $_GET['shekinah'];
		delete("users",$del_id);
		header("location:userlist.php");
	}
	if ($_GET['material']) {
		$del_id = $_GET['material'];
		delete("materials",$del_id);
		header("location:materiallist.php");
	}
	if ($_GET['standardname']) {
		$del_id = $_GET['standardname'];
		delete("standard_name",$del_id);
		header("location:standard_name_list.php");
	}
	if ($_GET['classification']) {
		$del_id = $_GET['classification'];
		delete("class_group",$del_id);
		header("location:classificationlist.php");
	}
	if ($_GET['designation']) {
		$del_id = $_GET['designation'];
		delete("materialdesc_list",$del_id);
		header("location:designationlist.php");
	}
	if ($_GET['chemical']) {
		$del_id = $_GET['chemical'];
		delete("chemical_prop",$del_id);
		header("location:chemicalprop_list.php");
	}
	if ($_GET['physical']) {
		$del_id = $_GET['physical'];
		delete("physical_prop",$del_id);
		header("location:physicalprop_list.php");
	}
	if ($_GET['general']) {
		$del_id = $_GET['general'];
		delete("general_prop",$del_id);
		header("location:generalprop_list.php");
	}
	if ($_GET['mechanical']) {
		$del_id = $_GET['mechanical'];
		delete("mechanical_prop",$del_id);
		header("location:mechanicalprop_list.php");
	}
	if ($_GET['thermal']) {
		$del_id = $_GET['thermal'];
		delete("thermal_prop",$del_id);
		header("location:thermalprop_list.php");
	}
	if ($_GET['heattreat']) {
		$del_id = $_GET['heattreat'];
		delete("heat_treatment_prop",$del_id);
		header("location:heattreatment_prop_list.php");
	}
	
?>