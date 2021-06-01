<?php 
	session_start();
	include("dbhelp.php");

	$id = $_GET['id'];
	$sql = "select * FROM question where id = '$id'";
	$rs = executeResult($sql);
	$res = $rs[0];
	// $description = $res['description'];
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
		<div class="mb-3">
          <label for="question-area" class="form-label">Question</label>
          <textarea class="form-control" readonly id="question-area" rows="3">
          	<?php echo $res['description']; ?>
          </textarea>
        </div>
        <div class="mb-3">
          <label for="txtOptA" class="form-label">Option A</label>
          <textarea class="form-control" readonly id="txtOptA" rows="1">
          	<?php echo $res['option_a']; ?>
          </textarea>
        </div>
        <div class="mb-3">
          <label for="txtOptB" class="form-label">Option B</label>
          <textarea class="form-control" readonly id="txtOptB" rows="1">
          	<?php echo $res['option_b']; ?>
          </textarea>
        </div>
        <div class="mb-3">
          <label for="txtOptC" class="form-label">Option C</label>
          <textarea class="form-control" readonly id="txtOptC" rows="1">
          	<?php echo $res['option_c']; ?>
          </textarea>
        </div>
        <div class="mb-3">
          <label for="txtOptA" class="form-label">Option D</label>
          <textarea class="form-control" readonly id="txtOptD" rows="1">
          	<?php echo $res['option_d']; ?>
          </textarea>
        </div>

        <a href="./">
		    <button class="btn btn-primary">Back</button>
		</a>	
	</div>

</body>
</html>