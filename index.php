<!DOCTYPE html>
<html lang="en">
<head>
  <title>Làm bài thi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">

  <div class="panel-group">

    <div class="panel panel-primary">
      <div class="panel-heading">Làm bài thi</div>
      <div class="panel-body">
      	<div class="row">
      		<div class="com-sm-12 text-right">
      			<button type="button" class="btn btn-success" id="btnStart">Bắt đầu</button>
      		</div>
      	</div>
      	
      	<div id="questions"></div>

      	<div class="row">
      		<div class="col-sm-12 text-center">
      			<button type="button" class="btn btn-warning" id="btnFinish">Kết thúc bài thi</button>
      		</div>
      	</div>

      </div>
    </div>

  </div>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
		$('#btnFinish').hide();
	});
	$('#btnStart').click(function() {
		getQuestion();
		$('#btnFinish').show();
		$(this).hide();
	});

	$('#btnFinish').click(function() {
		$(this).hide();
		$('#btnStart').show();
	});

	function getQuestion() {
		$.ajax({
			url:'questions.php',
			type:'get',
			success: function(data) {
				// console.log(data);
				$('#questions').html(data);
			}
		});
	}
</script>