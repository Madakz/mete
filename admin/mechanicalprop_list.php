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
						<th>Condition</th>
						<th>Yield Strength</th>
						<th>Endurance Limit</th>
						<th>Tensile Strength</th>
						<th>Fracture Toughness</th>
						<th>Young's Modulus</th>
						<th>Poisson Ratio</th>
						<th>Hardness</th>
						<th>Shear Modulus</th>
						<th>Elongation</th>
						<th>Impact Value</th>
						<th>Reduction Area</th>
						<th>Remark</th>
						<th>material designation Id</th>
						<th>Operation</th>
					</thead>
					<tbody>
						<?php
							$sn=1;
							$query=mysql_query("SELECT * FROM mechanical_prop");

							while($row = mysql_fetch_array($query))
							{
						?>
								<tr>
									<td><?php echo $sn ?></td>
									<td><?php echo $row['condition'] ?></td>
							        <td><?php echo $row['yield_strength'] ?></td>
							        <td><?php echo $row['endurance_limit'] ?></td>
							        <td><?php echo $row['tensile_strength'] ?></td>
							        <td><?php echo $row['fracture_toughness'] ?></td>
							        <td><?php echo $row['youngs_modulus'] ?></td>
							        <td><?php echo $row['poisons_ratio'] ?></td>
							        <td><?php echo $row['hardness'] ?></td>
							        <td><?php echo $row['shear_modulus'] ?></td>
							        <td><?php echo $row['elongation'] ?></td>
							        <td><?php echo $row['impact_value'] ?></td>
							        <td><?php echo $row['reduction_of_area'] ?></td>
							        <td><?php echo $row['remark'] ?></td>
							        <td><?php echo $row['material_desc_id'] ?></td>
									<td><a  href="delete.php?mechanical=<?php echo $row['id'] ?>">delete</a></td> 
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
