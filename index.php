<?php
	include("connect.php")
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<table class="table caption-top table-striped table-hover">
				<caption>List of users</caption>
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Question</th>
						<th scope="col">Option A</th>
						<th scope="col">Option B</th>
						<th scope="col">Option C</th>
						<th scope="col">Option D</th>
						<th scope="col">Answer</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql 	= "SELECT * FROM question";
						$result = $conn->query($sql);
						
						while($row = $result->fetch_assoc()) {

							echo "<tr>";
							echo "<th scope = 'row'>" . $row["id"] . "</th>";
							echo "<th scope = 'row'>" . $row["description"] . "</th>";
							echo "<th scope = 'row'>" . $row["option_a"] . "</th>";
							echo "<th scope = 'row'>" . $row["option_b"] . "</th>";
							echo "<th scope = 'row'>" . $row["option_c"] . "</th>";
							echo "<th scope = 'row'>" . $row["option_d"] . "</th>";
							echo "<th scope = 'row'>" . $row["answer"] . "</th>";
							echo "</tr>";

						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>