<?php 
	include('dbhelp.php');

	$id 		= $_POST['id'];
	$question	= $_POST['question'];
	$optA		= $_POST['optA'];
	$optB		= $_POST['optB'];
	$optC		= $_POST['optC'];
	$optD		= $_POST['optD'];
	$ans		= $_POST['ans'];

	$sql = "update question set description = '$question', option_a = '$optA', option_b = '$optB', option_c = '$optC', option_d = '$optD', answer = '$ans' where id = '$id'";
	execute($sql);
	echo "Update question successfully";
?>