<?php
	include("dbhelp.php");
	include("modalQuestion.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<link rel="stylesheet" type="text/css" href="./style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	</head>
	<body>

		<div class="container">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Question</th>
						<th scope="col">Action</th>
					</tr>
				</thead>

				<tbody>
					<div class="d-flex justify-content-end">
						<button id = "addQuestion" class="btn btn-success">+</button>
					</div>

					<?php
						
						$sql 	= "SELECT * FROM question";

						$questions = executeResult($sql);
						foreach($questions as $question) {
							echo "<tr id=".$question['id'].">";
							echo "<td scope = 'row'>" . $question["id"] . "</td>";
							echo "<td class = 'text-primary'>" . $question["description"] . "</td>";
							echo "<td scope = 'row'>";
							// echo "<a href='./detail.php?id=".$question['id']."'>View</a></button>&nbsp";
							echo "<input type='button' name='view' class='btn btn-xs btn-info' value='Xem'>&nbsp";

							echo "<input type='button' name='edit' class='btn btn-xs btn-warning' value='Sửa'>&nbsp";

							echo "<input type='button' name='delete' class='btn btn-xs btn-danger' value='Xóa'>&nbsp";

							echo "</td>";
							echo "</tr>";

						}
					?>
				</tbody>
			</table>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('#addQuestion').click(function() {
					$('#mdlQuestion').modal('show');
				});

				// pop-up modal if user click to the view button
				$("input[name='view']").click(function() {
					let trid = $(this).closest('tr').attr('id'); 
					// console.log(trid);

					$.ajax({
						url: './detail.php',
						type: 'get',
						data: {
							id:trid
						},
						success: function(data) {
							data = JSON.parse(data);
							console.log(data);
							$('#question-area').val(data['description']);
							$('#txtOptA').val(data['option_a']);
							$('#txtOptB').val(data['option_b']);
							$('#txtOptC').val(data['option_c']);
							$('#txtOptD').val(data['option_d']);
							$('textarea').prop('readonly', true);
							$('input[type=radio]').prop('disabled', true);
							$('#btnSubmit').hide();

							switch(data['answer']) {
								case 'A':
									$('#optA').prop('checked', true);
									break;
								case 'B':
									$('#optB').prop('checked', true);
									break;
								case 'C':
									$('#optC').prop('checked', true);
									break;
								case 'D':
									$('#optD').prop('checked', true);
									break;

							}
							$('#mdlQuestion').modal('show');
						}
					});
				});
			});
			
		</script>
	</body>
</html>
