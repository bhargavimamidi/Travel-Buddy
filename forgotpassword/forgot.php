<!DOCTYPE html>
<html>
<title> Forgot Password </title>
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
	.form-detail
	{
		background-image:url("https://image.freepik.com/free-vector/abstract-pattern-design_1053-523.jpg") ;

	}
	.page-content
	{
		background-image:url("https://image.freepik.com/free-vector/abstract-pattern-design_1053-523.jpg") ;

	}
	.form-group
	{		

	}
	.btn btn-outline-primary
	{		
	position: relative;	
	padding: 1.4rem 4.2rem;
	padding-right: 3.1rem;
	font-size: 1.4rem;
	color: yellow;
	letter-spacing: 1.1rem;
	text-transform: uppercase;
	transition: all 500ms cubic-bezier(0.77, 0, 0.175, 1);	
	cursor: pointer;
	user-select: none;
	}
	
	* {
  box-sizing: border-box;
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


  background-repeat: no-repeat;
  background-size: 100% 30px;
  background-position: top left, bottom left;
  min-height: 98vh;
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




.form-v10-content
{
	background-color:white;
}
.page-content
{
	background-color:white;
}
.form-group
{
	

}
</style>
</head>
<body class="form-v10">
	
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="authentication.php" method="post" id="myform">
			
				<div class="form-right">
					<h2>Forgot Password</h2>
                    <div class="form-group">
					<div class="form-row form-row-1">
						<input type="text" name="username" class="additional" id="username" placeholder="Username" required>
					</div>
                    </div>
				
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="password" name="secret" class="zip" id="secret" placeholder="Secret Question-What is your mother's maiden name?" required>
						</div>
						
					</div>
					<div class="form-row-last">
						<input type="submit" name="share" class="register" value="Submit">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>



