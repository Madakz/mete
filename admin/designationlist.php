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
			<div class="col-md-1"></div>
			<div class="col-md-9">
				<table id="myTable" class="table">
					<thead>
						<th>S/n</th>
						<th>Class_group_id</th>
						<th>Designation Name</th>
						<th>Number Name</th>
						<th>Operation</th>
					</thead>
					<tbody>
						<?php
							$sn=1;
							$query=mysql_query("SELECT * FROM materialdesc_list");

							while($row = mysql_fetch_array($query))
							{
						?>
								<tr>
									<td><?php echo $sn ?></td>
									<td><?php echo $row['class_group_id'] ?></td>
							        <td><?php echo $row['designation_name'] ?></td>
							        <td><?php echo $row['number_name'] ?></td>
									<td><a  href="delete.php?designation=<?php echo $row['id'] ?>">delete</a></td> 
								</tr>
								<?php $sn = $sn + 1; ?>
						<?php
							}
						?>
					</tbody>
				</table>
				
			</div>
			<div class="col-md-2"></div>
		</div>

		<script type="text/javascript">
			$('#myTable').DataTable();
			
		</script>
	</body>
</html>
