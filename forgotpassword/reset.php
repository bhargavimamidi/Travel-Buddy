<?php

$link = mysqli_connect("localhost:3307", "root", "", "mp");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(($_SERVER['REQUEST_METHOD'] == 'POST')) {
	if(isset($_GET['u'])){
		$username = $_GET['u'];}

$password = mysqli_real_escape_string($link, $_REQUEST['password']);
//$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$msg="Password Updated. Please login to continue";
$sql = "update mp set password='$password' where username='$username'";
if(mysqli_query($link, $sql)){
    //echo "PASSWORD UPDATED";
	//header('Location: mp2/homepage.html');
	
  $_SESSION['msg']=$msg;
	header('Location: ../homepage.php#container');
  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
mysqli_close($link);
}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
<style>
	body {
	  margin: 0;
	  font-family: Arial, Helvetica, sans-serif;
	  background-image:url("https://image.freepik.com/free-vector/abstract-pattern-design_1053-523.jpg") ;

	}
.page-content
{
	background-image:url("https://image.freepik.com/free-vector/abstract-pattern-design_1053-523.jpg") ;

}

.col-lg-6 login-btm login-button
{
  display: block;
  width: 400px;
  margin: 0 auto 0 auto;
  position: absolute;
  left: 0;
  right: 0;
  top: 30vh;
}

:root {
  --background: #1a8cff;
  --background-accent: #1a8cff;
  --background-accent-2: white;
  --light: #b3d9ff;
  --dark: #69BC22;
  --text: #0066cc;
}
button {
	margin-left:100px;
  display: block;
  cursor: pointer;
  outline: none;
  border: none;
  background-color: var(--light);
  width: 400px;
  height: 70px;
  border-radius: 30px;
  font-size: 1.5rem;
  font-weight: 600;
  color: black;
  background-size: 100% 100%;
  box-shadow: 0 0 0 7px var(--light) inset;
  margin-bottom: 15px;
}

button:hover {
  background-image: linear-gradient(
    145deg,
    transparent 10%,
	#1a8cff 10% 20%,
    transparent 20% 30%,
	#1a8cff 30% 40%,
    transparent 40% 50%,
	#1a8cff 50% 60%,
    transparent 60% 70%,
	#1a8cff 70% 80%,
    transparent 80% 90%,
	#1a8cff 90% 100%
  );
  animation: background 3s linear infinite;
}

@keyframes background {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 400px 0;
  }
}

</style>
</head>
<body class="form-v10">
	
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="" method="post" id="myform">
			
				<div class="form-right">
					<h2>Reset Password</h2>
                  <?php 
				  if(isset($_GET['u'])){
					  $u= $_GET['u'];
				  }
				  
				   ?>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="password" name="password" class="zip" id="password" placeholder="New Password" required>
						</div>	
					</div>
                    <<div class="form-row-last">
						<input type="submit" name="share" class="register" value="Reset">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
