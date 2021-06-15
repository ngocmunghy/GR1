<?php 
	include("dbhelp.php");

	$id = $_GET['id'];

	$sql = "select * from question where id = '$id'";
	$rs = executeResult($sql);
	$res = $rs[0];
	echo json_encode($res, JSON_UNESCAPED_UNICODE);
?>

