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

			<div class="row">
				
				<div class="col-sm-4">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search" id="txtSearch">
						<div class="input-group-btn">
							<button class="btn btn-primary" type="submit" id="btnSearch">
								<span class="glyphicon glyphicon-search">Search</span>
							</button>
						</div>
					</div>
				</div>

				<div class="col-sm-6">
					
				</div>
				<div class="col-sm-2 text-end">
					<button id = "addQuestion" class="btn btn-success">+</button>
				</div>

			</div>

			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Question</th>
						<th scope="col">Action</th>
					</tr>
				</thead>

				<tbody id = "questions">
				</tbody>
			</table>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

		<script type="text/javascript">

			$(document).ready(function() {
				$('#btnSearch').click();
			});

			$('#txtSearch').on('keypress', function(e) {
				if(e.which == 13) {
					$('#btnSearch').click();
				}
			});

			$('#addQuestion').click(function() {

				$('textarea').prop('readonly', false);
				$('input[type=radio]').prop('disabled', false);
				$('#btnSubmit').show();

				$('#txtQuestionId').val('');

				$('#question-area').val('');
				$('#txtOptA').val('');
				$('#txtOptB').val('');
				$('#txtOptC').val('');
				$('#txtOptD').val('');
				$('input[type="radio"]').prop('checked', false);

				$('#mdlQuestion').modal('show');

			});

			$('#btnSearch').click(function() {
				let content = $('#txtSearch').val().trim();
				readData(content);
			});

			function readData(search) {

				$.ajax({
					url: './view_ques.php',
					type: 'get',
					data: {
						search: search
					},
					success: function(data) {
						$('#questions').empty();
						$('#questions').append(data);
					}
				});
			};

			function getDetail(id) {
				$.ajax({
					url: './detail.php',
					type: 'get',
					data: {
						id:id
					},
					success: function(data) {
						data = JSON.parse(data);
						console.log(data);
						$('#question-area').val(data['description']);
						$('#txtOptA').val(data['option_a']);
						$('#txtOptB').val(data['option_b']);
						$('#txtOptC').val(data['option_c']);
						$('#txtOptD').val(data['option_d']);

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
			}

			// pop-up modal if user click to the view button
			$(document).on('click', "input[name='view']", function() {
				let trid = $(this).closest('tr').attr('id'); 
				// console.log(trid);
				getDetail(trid);
				$('textarea').prop('readonly', true);
				$('input[type=radio]').prop('disabled', true);
				$('#btnSubmit').hide();
			});

			// pop-up modal if user click to the edit button
			$(document).on('click', "input[name='edit']", function() {
				let trid = $(this).closest('tr').attr('id'); 
				// console.log(trid);

				getDetail(trid);
				$('textarea').prop('readonly', false);
				$('input[type=radio]').prop('disabled', false);
				$('#btnSubmit').show();
				$('#txtQuestionId').val(trid);
			});

			$(document).on('click', "input[name='delete']", function() {
				let trid = $(this).closest('tr').attr('id'); 
				// console.log(trid);

				if(confirm("Are you sure to delete this question ?")) {
					$.ajax({
						url: './delete_ques.php',
						type: 'post',
						data: {
							id: trid
						},
						success: function(data) {
							alert(data);
							readData();
						}
					});
				}
			});
			
		</script>
	</body>
</html>
