<?php 
	include("dbhelp.php");

	$question	= $_POST['question'];
	$optA		= $_POST['optA'];
	$optB		= $_POST['optB'];
	$optC		= $_POST['optC'];
	$optD		= $_POST['optD'];
	$ans		= $_POST['ans'];

	$sql = " INSERT INTO question values(NULL, '$question', '$optA', '$optB', '$optC', '$optD', '$ans') ";
	execute($sql);
	echo "New record created successfully";

?>