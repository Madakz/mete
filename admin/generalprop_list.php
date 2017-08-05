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
						<th>Equivalence</th>
						<th>Country</th>
						<th>Group of Steel</th>
						<th>Application</th>
						<th>material designation Id</th>
						<th>Operation</th>
					</thead>
					<tbody>
						<?php
							$sn=1;
							$query=mysql_query("SELECT * FROM general_prop");

							while($row = mysql_fetch_array($query))
							{
						?>
								<tr>
									<td><?php echo $sn ?></td>
									<td><?php echo $row['equivalence'] ?></td>
							        <td><?php echo $row['country'] ?></td>
							        <td><?php echo $row['group_of_steel'] ?></td>
							        <td><?php echo $row['application'] ?></td>
							        <td><?php echo $row['material_desc_id'] ?></td>
									<td><a  href="delete.php?general=<?php echo $row['id'] ?>">delete</a></td> 
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
