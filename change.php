<?php
 include "fconnection.php";
 session_start();
	$user2=$_SESSION['n']; 
    $dp2= mysqli_real_escape_string($con, $_REQUEST['fileToUpload']);
    $sql="update mp set dp='$dp2' where username='$user2' ";
	
	if(mysqli_query($con, $sql)){
		echo "Records added successfully.";
		header("location: test.php");
	} else{
		echo "ERROR: Could not able to execute  ";
	}
	 
	
	mysqli_close($con);
	
?> 