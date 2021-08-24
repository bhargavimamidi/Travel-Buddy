<?php
include "fconnection.php";

	$user2 = $_SESSION['n'];
	$name2 = mysqli_real_escape_string($con, $_REQUEST['name']);
	$email2 = mysqli_real_escape_string($con, $_REQUEST['email']);
	$mobile2 = mysqli_real_escape_string($con, $_REQUEST['mobile']);
	$password2 = mysqli_real_escape_string($con, $_REQUEST['password']);
	$sql = "update mp set name='$name2',Email='$email2', Mobile='$mobile2',password='$password2' where username='$user2' ";

	if (mysqli_query($con, $sql)) {
	
		header("location: test.php");
	} else {
		echo "ERROR: Could not able to execute  ";
	}


	mysqli_close($con);

?>