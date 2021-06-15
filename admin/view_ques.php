<?php
	include('./dbhelp.php');					
	$search = $_GET['search'];
	$sql 	= "SELECT * FROM question WHERE description LIKE '%".$search."%' ";

	$questions = executeResult($sql);
	$index = 1;
	$data = '';
	foreach($questions as $question) {
		$data .= "<tr id=".$question['id'].">";
			$data .= "<td scope = 'row'>" . $index++ . "</td>";
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