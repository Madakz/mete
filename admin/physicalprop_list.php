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
						<th>Density</th>
						<th>Specific electrical resistance</th>
						<th>Magnetizable</th>
						<th>Weldable</th>
						<th>Toughness Degree</th>
						<th>Corrosion Resistance</th>
						<th>Cutting Property</th>
						<th>material designation Id</th>
						<th>Operation</th>
					</thead>
					<tbody>
						<?php
							$sn=1;
							$query=mysql_query("SELECT * FROM physical_prop");

							while($row = mysql_fetch_array($query))
							{
						?>
								<tr>
									<td><?php echo $sn ?></td>
									<td><?php echo $row['density'] ?></td>
							        <td><?php echo $row['specific_elect_resist'] ?></td>
							        <td><?php echo $row['magnetizable'] ?></td>
							        <td><?php echo $row['weldable'] ?></td>
							        <td><?php echo $row['toughness_degree'] ?></td>
							        <td><?php echo $row['corrosion_resistance'] ?></td>
							        <td><?php echo $row['cutting_property'] ?></td>
							        <td><?php echo $row['material_desc_id'] ?></td>
									<td><a  href="delete.php?physical=<?php echo $row['id'] ?>">delete</a></td> 
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
