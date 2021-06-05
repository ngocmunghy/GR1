<?php
	include('./dbhelp.php');					
	$sql 	= "SELECT * FROM question";

	$questions = executeResult($sql);
	$data = '';
	foreach($questions as $question) {
		$data .= "<tr id=".$question['id'].">";
			$data .= "<td scope = 'row'>" . $question["id"] . "</td>";
			$data .= "<td class = 'text-primary'>" . $question["description"] . "</td>";
			$data .= "<td scope = 'row'>";
			$data .= "<input type='button' name='view' class='btn btn-xs btn-info' value='Xem'>&nbsp";

			$data .= "<input type='button' name='edit' class='btn btn-xs btn-warning' value='Sửa'>&nbsp";

			$data .= "<input type='button' name='delete' class='btn btn-xs btn-danger' value='Xóa'>&nbsp";

			$data .= "</td>";
		$data .= "</tr>";
	}

	echo $data;

?>