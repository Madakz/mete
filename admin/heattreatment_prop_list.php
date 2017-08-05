<?php
 include("../includes/con.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>mete</title>
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./css/dataTables.bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="./css/jquery.dataTables_themeroller.css">
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="../js/dataTables.foundation.min.js"></script> <!-- works -->

	</head>
	<body>
		<div>
			<!-- <div class="col-md-1"></div> -->
			<div class="col-md-12">
				<table id="myTable" class="table">
					<thead>
						<th>S/n</th>
						<th>Hot Working Condition</th>
						<th>Soft Annealing Temperature</th>
						<th>Duration Time</th>
						<th>Hardening Temperature</th>
						<th>Media</th>
						<th>Tempering Temperature</th>
						<th>Notes about Welding</th>
						<th>material designation Id</th>
						<th>Operation</th>
					</thead>
					<tbody>
						<?php
							$sn=1;
							$query=mysql_query("SELECT * FROM heat_treatment_prop");

							while($row = mysql_fetch_array($query))
							{
						?>
								<tr>
									<td><?php echo $sn ?></td>
									<td><?php echo $row['hot_working_temp'] ?></td>
							        <td><?php echo $row['soft_annealing_temp'] ?></td>
							        <td><?php echo $row['duration_time'] ?></td>
							        <td><?php echo $row['hardening_temp'] ?></td>
							        <td><?php echo $row['media'] ?></td>
							        <td><?php echo $row['tempering_temp'] ?></td>
							        <td><?php echo $row['notes_about_welding'] ?></td>
							        <td><?php echo $row['material_desc_id'] ?></td>
									<td><a  href="delete.php?heattreat=<?php echo $row['id'] ?>">delete</a></td> 
								</tr>
								<?php $sn = $sn + 1; ?>
						<?php
							}
						?>
					</tbody>
				</table>
				
			</div>
			<!-- <div class="col-md-2"></div> -->
		</div>

		<script type="text/javascript">
			$('#myTable').DataTable();
			
		</script>
	</body>
</html>
