<?php 
	include('./dbhelp.php');

	$id = $_POST['id'];

	$sql = "delete from question where id = '$id'";
	execute($sql);
	echo "Delete question successfully";
?>