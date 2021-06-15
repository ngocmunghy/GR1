<?php
	include("dbhelp.php");

	$sql 	= "SELECT * FROM question ORDER BY RAND() LIMIT 5";

	$questions = executeResult($sql);
	$data = '';
	$index = 1;
	foreach($questions as $question) {
		$data .= '<div class="row" style="margin-left: 10px;">';
      	$data .= 	'<h5 style="font-weight: bold;">'.'<span class="text-danger">Câu '.$index.'</span>: '.$question['description'].'</h5>';
      	$data .= 	'<div class="radio col-md-12">';
      	$data .= 		'<label>';
      	$data .= 			'<input type="radio" name="group'.$index.'" id="rdOptionA">'.$question['option_a'];
      	$data .= 		'</label>';
      	$data .= 	'</div>';
      	$data .= 	'<div class="radio col-md-12">';
      	$data .= 		'<label>';
      	$data .= 			'<input type="radio" name="group'.$index.'" id="rdOptionB">'.$question['option_b'];
      	$data .= 		'</label>';
      	$data .= 	'</div>';
      	$data .= 	'<div class="radio col-md-12">';
      	$data .= 		'<label>';
      	$data .= 			'<input type="radio" name="group'.$index.'" id="rdOptionC">'.$question['option_c'];
      	$data .= 		'</label>';
      	$data .= 	'</div>';
      	$data .= 	'<div class="radio col-md-12">';
      	$data .= 		'<label>';
      	$data .= 			'<input type="radio" name="group'.$index.'" id="rdOptionD">'.$question['option_d'];
      	$data .= 		'</label>';
      	$data .= 	'</div>';   		      		
      	$data .= '</div>';
      	$index++;
	}

	echo $data;

?>