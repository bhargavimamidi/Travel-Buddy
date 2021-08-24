<?php
session_start();
?>

<!doctype html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
		body {
			background-image: url("https://image.freepik.com/free-vector/abstract-pattern-design_1053-523.jpg");

		}

		span {
			display: inline-block;
			padding-top: 4.5em;
			padding-bottom: 4.5em;
			color: white;
			cursor: pointer;
		}

		label {
			color: white;
			width: 170px;
		}

		form input[type="file"] {

			cursor: pointer;
		}

		img {
			border-radius: 50%;
			height: 150px;
			width: 150px;
			background-size: cover;
			background-position: center;
			background-blend-mode: multiply;
			vertical-align: middle;
			text-align: center;
			color: transparent;
			transition: all .3s ease;
			text-decoration: none;
			margin-left: 130px;

		}

		.set {
			margin-left: 400px;
			padding: 10px;
		}

		input {
			margin-left: 50px;
			width: 250px;
			height: 40px;
			border-radius: 8px;

		}

		.set1l {
			width: 200px;
			margin-left: 100px;
			margin-top: 30px;
			margin-bottom: 20px;

		}

		.glyphicon glyphicon-camera {
			margin-left: 100px;
		}

		.s {
			margin-left: 100px;
		}

		.update {}

		:root {
			--background: #1a8cff;
			--background-accent: #1a8cff;
			--background-accent-2: white;
			--light: #b3d9ff;
			--dark: #69BC22;
			--text: #0066cc;
		}

		button {
			margin-left: 520px;
			display: block;
			cursor: pointer;
			outline: none;
			border: none;
			background-color: white;
			width: 200px;
			height: 55px;
			border-radius: 50px;
			font-size: 1.8rem;
			font-weight: 900;
			color: black;
			background-size: 100% 100%;

			margin-bottom: 15px;
			margin-top: 10px;
		}
		button:hover{
			background-color: grey;
		}


		label {
			font-family: "Times New Roman", Times, serif;
			font-size: 1.5em;
		}

		.set1 {
			width: 700px;
			margin-left: 400px;
			font-family: "Times New Roman", Times, serif;
			font-size: 1em;
		}

		.set1l {
			width: 400px;
			font-family: "Times New Roman", Times, serif;
			font-size: 1.5em;

		}
	</style>
</head>

<body>
	<?php
	include "fconnection.php";
	$u = $_SESSION['n'];
	$sql = "select * from mp where username='$u'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$dp = $row['dp'];
	$name = $row['name'];
	$password = $row['password'];
	$email = $row['Email'];
	$mobile = $row['Mobile'];
	
$_SESSION['name'] = $name;
$_SESSION['dp'] = $dp;
$_SESSION['mobile'] = $mobile;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

	$user1 = $_SESSION['n'];
	$name1 = $_SESSION['name'];
	$dp1 = $_SESSION['dp'];
	$mobile1 = $_SESSION['mobile'];
	$email1 = $_SESSION['email'];
	$password1 = $_SESSION['password'];

	echo "<form action='change.php' method='POST' >
 <div style='margin-left: 50px;'>
 <label style='color:white;margin-left: 400px;margin-bottom: 0px; font-size: 3em;' > ACCOUNT</label>
 <hr style='color: #D3D3D3;
 margin-top: 5px;
   margin-bottom: 5px;

 width: 600px;
 margin-left: 400px;'>
 <label style='color:#D3D3D3; ;margin-left: 400px;margin-bottom: 0px; width: 300px;' > PROFILE PICTURE</label>
 <div class='set1'style='margin-left: 450px;'>
  <img src='images/$dp1' style='margin-top: 10px;'>
  <br>
 
  <label class='set1l'><input type='File' name='fileToUpload' id='fileToUpload' style='width: 500px; margin-left: 0px;'></label>
  <button class='btn' class='fourth' style='border-radius: 50px;margin-left: 125px;margin-top: 0px;'>Change DP</button>
 
  </div>
  <br>
  
  <hr style='color: #D3D3D3;
  margin-top: 5px;
    margin-bottom: 5px;

  width: 600px;
  margin-left: 400px;'>
  <label style='color:#D3D3D3;margin-left: 400px;margin-bottom: 0px;width: 300px;' > BASIC INFORMATION</label>
  <br>
 </form>
  <form action='' method='POST' >
  <div class='update' style='margin-left: 50px;'>
  <div class='set'>
  <label> Change name:</label>
  <input type='text' value='$name1' name='name' id='name' >
  </div>
  <br>
  <div class='set'>
  <label> Change email:</label>
  <input type='text' value='$email1' name='email' id='email' >
  </div>
  <br> 
  <div class='set'>
  <label> Change mobile:</label>
  <input type='text' value='$mobile1' name='mobile' id='mobile'>
 </div> 
  <br>
  <div class='set'>
  <label> Change password:</label>
  <input type='password' value='$password1' name='password' id='password'>
  </div>
  
  <button class='btn' class='fourth' style='border-radius: 50px;'>Update</button>
  </div>
</form></div>";

	?>


<?php
include "fconnection.php";
if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
	$user2 = $_SESSION['n'];
	$name2 = mysqli_real_escape_string($con, $_REQUEST['name']);
	$email2 = mysqli_real_escape_string($con, $_REQUEST['email']);
	$mobile2 = mysqli_real_escape_string($con, $_REQUEST['mobile']);
	$password2 = mysqli_real_escape_string($con, $_REQUEST['password']);
	$sql = "update mp set name='$name2',Email='$email2', Mobile='$mobile2',password='$password2' where username='$user2' ";

	if (mysqli_query($con, $sql)) {
	
		//header("Location: settings.php");
		
	

	} else {
		echo "ERROR: Could not able to execute  ";
	}


	mysqli_close($con);
}
?>
</body>

</html>