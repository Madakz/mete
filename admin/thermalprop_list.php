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
						<th>Maximum Service Tempt</th>
						<th>Minimum Service Tempt</th>
						<th>Melting Point</th>
						<th>Specific Heat</th>
						<th>Thermal condition</th>
						<th>Thermal Expansivity Coefficient</th>
						<th>material designation Id</th>
						<th>Operation</th>
					</thead>
					<tbody>
						<?php
							$sn=1;
							$query=mysql_query("SELECT * FROM thermal_prop");

							while($row = mysql_fetch_array($query))
							{
						?>
								<tr>
									<td><?php echo $sn ?></td>
									<td><?php echo $row['max_service_temp'] ?></td>
							        <td><?php echo $row['min_service_temp'] ?></td>
							        <td><?php echo $row['meltingpoint'] ?></td>
							        <td><?php echo $row['specific_heat'] ?></td>
							        <td><?php echo $row['therm_cond'] ?></td>
							        <td><?php echo $row['therm_exp_coeff'] ?></td>
							        <td><?php echo $row['material_desc_id'] ?></td>
									<td><a  href="delete.php?thermal=<?php echo $row['id'] ?>">delete</a></td> 
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
